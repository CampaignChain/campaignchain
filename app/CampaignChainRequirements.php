<?php
/*
 * Copyright 2016 CampaignChain, Inc. <info@campaignchain.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once 'SymfonyRequirements.php';

class CampaignChainRequirements extends SymfonyRequirements
{
    public function __construct()
    {
        parent::__construct();

        // System call, e.g. to use Composer via command line, must be possible.
        $this->addRecommendation(
            function_exists('system'),
            'system() should be available',
            'Please enable the PHP function <strong>system()</strong>.'
        );

        $this->addRecommendation(
            class_exists('IntlDateFormatter '),
            'Internationalization Functions should be installed',
            'Install and enable the <strong>PHP-INTL</strong> module: http://php.net/manual/en/intl.setup.php.'
        );

        // /app/campaignchain must be writable.
        $campaignchainAppDir = __DIR__.DIRECTORY_SEPARATOR.'campaignchain';
        $this->addRequirement(
            is_writable($campaignchainAppDir),
            realpath($campaignchainAppDir).' must be writable',
            'Change the permissions of "'.realpath($campaignchainAppDir).'" directory so that the web server can write into it.'
        );

        // /composer.json must be writable
        $composerJson = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'composer.json';
        $this->addRecommendation(
            is_writable($composerJson),
            realpath($composerJson).' should be writable',
            'Change the permissions of "'.realpath($composerJson).'" file if you would like to have the built-in modules dashboard work for users.'
        );

        // /app/sessions must be writable.
        $campaignchainSessionsDir = __DIR__.DIRECTORY_SEPARATOR.'sessions';
        $this->addRequirement(
            is_writable($campaignchainSessionsDir),
            realpath($campaignchainSessionsDir).' must be writable',
            'Change the permissions of "'.realpath($campaignchainSessionsDir).'" directory so that the web server can write into it.'
        );
    }
}