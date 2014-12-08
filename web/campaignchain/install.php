<?php
/*
 * This file is part of the CampaignChain package.
 *
 * (c) Sandro Groganz <sandro@campaignchain.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!isset($_SERVER['HTTP_HOST'])) {
    exit('This script cannot be run from the CLI. Run it from a browser.');
}

if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
    '127.0.0.1',
    '::1',
))) {
    header('HTTP/1.0 403 Forbidden');
    exit('This script is only accessible from localhost.');
}

require_once dirname(__FILE__) . '/../../app/CampaignChainRequirements.php';

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