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

if (!isset($_SERVER['HTTP_HOST'])) {
    exit('This script cannot be run from the CLI. Run it from a browser.');
}

require_once dirname(__FILE__) . '/../../var/CampaignChainRequirements.php';

// Check if already installed.
$installFile = __DIR__.'/../../app/campaignchain/.install';
if(
    !file_exists($installFile)
) {
    // System is installed and user wants to access the Installation
    // Wizard. Hence, redirect to login page.
    header('Location: /');
    exit;
}


$campaignchainRequirements = new CampaignChainRequirements();

$majorProblems = $campaignchainRequirements->getFailedRequirements();
$minorProblems = $campaignchainRequirements->getFailedRecommendations();

$page_title = 'Server Environment';
?>
    <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="robots" content="noindex,nofollow" />
        <title><?php echo $page_title; ?> - Installation Wizard - CampaignChain</title>
        <link rel="stylesheet" href="/bundles/framework/css/structure.css" media="all" />
        <link rel="stylesheet" href="/bundles/framework/css/body.css" media="all" />
        <link rel="stylesheet" href="/bundles/sensiodistribution/webconfigurator/css/install.css" media="all" />
        <link rel="stylesheet" href="/bundles/campaignchaincore/css/campaignchain/install.css" media="all" />
    </head>
<body>
<div id="content">
    <div class="header clear-fix">
        <div class="header-logo">
            <a href="http://www.campaignchain.com"><img style="height: 24px;" alt="CampaignChain" src="/bundles/campaignchaincore/images/campaignchain_logo.png"></a>
        </div>
    </div>

    <div>
    <div class="block">
    <div class="symfony-block-content">
    <div class="page-header">
        <h1><?php echo $page_title; ?> <small>Installation Wizard</small></h1>
    </div>

<p>Welcome to your new CampaignChain application!</p>
<p>This wizard will guide you through the installation process.</p>

<?php if (count($majorProblems)): ?>
    <h3>Major Problems</h3>
    <p>Major problems have been detected and <strong>must</strong> be fixed before continuing:</p>
    <ol>
        <?php foreach ($majorProblems as $problem): ?>
            <li><?php echo $problem->getHelpHtml() ?></li>
        <?php endforeach; ?>
    </ol>
<?php endif; ?>

<?php if (count($minorProblems)): ?>
    <h3>Recommendations</h3>
    <p>
        <?php if (count($majorProblems)): ?>Additionally, to<?php else: ?>To<?php endif; ?> enhance your CampaignChain experience,
        it’s recommended that you fix the following:
    </p>
    <ol>
        <?php foreach ($minorProblems as $problem): ?>
            <li><?php echo $problem->getHelpHtml() ?></li>
        <?php endforeach; ?>
    </ol>
<?php endif; ?>

<?php if ($campaignchainRequirements->hasPhpIniConfigIssue()): ?>
    <p id="phpini">*
        <?php if ($campaignchainRequirements->getPhpIniConfigPath()): ?>
            Changes to the <strong>php.ini</strong> file must be done in "<strong><?php echo $campaignchainRequirements->getPhpIniConfigPath() ?></strong>".
        <?php else: ?>
            To change settings, create a "<strong>php.ini</strong>".
        <?php endif; ?>
    </p>
<?php endif; ?>

<?php if (!count($majorProblems) && !count($minorProblems)): ?>
    <p class="ok">Your configuration looks good to run Symfony.</p>
<?php endif; ?>

<?php if (!count($majorProblems)): ?>
<form method="POST" action="/install/">
    <button type="submit">Next Step</button>
</form>
<?php endif; ?>

<?php if (count($majorProblems) || count($minorProblems)): ?>
    <p><a href="/campaignchain/install.php">Re-check configuration</a></p>
<?php endif; ?>
    </div>
    </div>
    </div>
</div>
</body>
</html>