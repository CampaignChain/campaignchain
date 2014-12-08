<?php
/*
 * This file is part of the CampaignChain package.
 *
 * (c) Sandro Groganz <sandro@campaignchain.com>
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

        // PHP session directory must be writable.
        $this->addRequirement(
            is_writable(session_save_path()),
            session_save_path().' must be writable',
            'Change the permissions of "'.session_save_path().'" directory so that the web server can write into it.'
        );

        // /app must be writable.
        // PHP session directory must be writable.
        $this->addRequirement(
            is_writable(__DIR__),
            realpath(__DIR__).' must be writable',
            'Change the permissions of "'.realpath(__DIR__).'" directory so that the web server can write into it.'
        );
    }
}