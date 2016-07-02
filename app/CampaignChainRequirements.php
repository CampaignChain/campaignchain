<?php
/*
 * This file is part of the CampaignChain package.
 *
 * (c) CampaignChain Inc. <info@campaignchain.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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