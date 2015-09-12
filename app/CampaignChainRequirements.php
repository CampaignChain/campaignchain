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

        // /app must be writable.
        $this->addRequirement(
            is_writable(__DIR__),
            realpath(__DIR__).' must be writable',
            'Change the permissions of "'.realpath(__DIR__).'" directory so that the web server can write into it.'
        );

        // /composer.json must be writable
        $composerJson = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'composer.json';
        $this->addRequirement(
            is_writable($composerJson),
            realpath($composerJson).' must be writable',
            'Change the permissions of "'.realpath($composerJson).'" file so that the web server can write into it.'
        );
    }
}