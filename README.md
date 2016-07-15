# CampaignChain

## Introduction

With CampaignChain, marketers can plan, execute, monitor and optimize campaigns
in a holistic overview. Programmers can integrate communication channels, tools 
and devices with our open-source platform.

Today, marketers face an increasing amount of online channels, tools and devices 
(IoT, beacons). As the opportunities for highly targeted marketing grow, so 
does fragmentation of workflows. CampaignChain is the only marketing technology 
that allows for a comprehensive real-time access to all marketing activities.

Our goal is to help everyone make innovative marketing ideas come true. That's
why we made CampaignChain the first open-source platform for marketing
integration.

## Technology

CampaignChain is based on [Symfony](http://symfony.com), a PHP framework.

## Architecture

![High-level overview of CampaignChain architecture](https://github.com/CampaignChain/campaignchain-docs/raw/master/images/architecture_800px.png)

## Installation

In general, CampaignChain is being installed through [Comoser](https://getcomposer.org/download/)
just like the Symfony Standard Framework.

### Requirements

Before you install CampaignChain, make sure you have the following software
installed on the server:

* PHP 5.4 or better
* PHP JSON, PDO, curl, GD and intl extensions enabled
* PHP’s system() function must work
* MySQL 5.5 or better
* Java 1.5 or better

### Set up Database

Launch your MySQL client of choice and create a new MySQL database for the
application.

### Install Composer

CampaignChain utilizes [Comoser](https://getcomposer.org/download/) for its package and
modules management. Install it with this command:

    $ curl -sS https://getcomposer.org/installer | php

### Install Bower

For JavaScript components, CampaignChain makes use of Bower, which - you guessed
it - is a package manager for JavaScript code.

Before you can install Bower, you must first install npm, which ships with
[Node.js](http://nodejs.org/download/):

Now install Bower through npm:

    $ npm install -g bower

### Install Base System

In a folder of your choice, execute Composer to download all files of the
CampaignChain base system. Please note that this might take a while.

In below command, replace the **[version]** placeholder with a release or branch
(e.g. 1.0.0-beta.2 or dev-master). Find a list of releases here: 
https://github.com/CampaignChain/campaignchain/releases

    $ composer create-project --stability=dev campaignchain/campaignchain campaignchain [version]

### Configure Base System

During the process, Composer will ask in the command line to provide some
configuration parameters. Please make sure you check/provide at least the
following (default values in brackets):

    database_driver (pdo_mysql):
    database_host (127.0.0.1):
    database_port (null):
    database_name (campaignchain_ce):
    database_user (root):
    database_password (null):
    java_path (/usr/bin/java):

### Clear Cache and Dump Assets

Once Composer is done, execute the following commands, still inside the
CampaignChain root folder:

    $ php app/console cache:clear --env=prod --no-debug

    $ php app/console assetic:dump --env=prod --no-debug

### Configure CampaignChain Scheduler

The CampaignChain scheduler is a PHP script that executes scheduled Operations.

On Linux or Mac OS X, configure it as a cron job so that it runs automatically
every minute:

    $ crontab -e -u <username>
    */1 * * * * cd /path/to/campaignchain && php app/console campaignchain:scheduler --env=prod 1>/dev/null 2>/dev/null

On Windows, you could use the task scheduler or AT command to achieve the same:
http://technet.microsoft.com/en-us/library/bb726974.aspx

### Write Permissions

Please ensure that the following directories are writable by PHP, relative to
the CampaignChain root:

* app/campaignchain
* app/cache
* app/logs
* app/sessions
* web/assetic
* web/bundles
* web/css
* web/fonts
* web/images
* web/js
* web/media
* web/storage

If you'd like to use the built-in modules manager, then you should also make
the `composer.json` file in the root directory writable by PHP.

### Start Server

Use PHP's built-in Web server to run CampaignChain.

    $ php app/console server:start

By default, the built-in Web server listens for connections on 127.0.0.1. If
you're planning to connect to the server over a network, you can specify the
network IP address that the server should use. For example, the command below
runs the Web server on port 80 of IP address 192.168.1.1:

    $ php app/console server:start 192.168.1.1:80
    
### Installation Wizard

Hop over to http://localhost:8000/campaignchain/install.php and follow the
instructions.

### Sample Data

If you'd like to load sample data to play with CampaignChain, read
http://docs.campaignchain.com/en/master/developer/book/sample_data.html to
learn how to get it.

### Success!

CampaignChain is now installed, configured and ready for use!

## Usage

To make full use of CampaignChain’s end user capabilities, you could now

1. [Configure Call to Action (CTA) tracking](http://docs.campaignchain.com/en/master/administrator/configuration/cta.html)
2. [Learn how to create your first campaign and activity](http://docs.campaignchain.com/en/master/user/get_started.html)

## Customization

* [Learn how to integrate additional online channels](http://doc.campaignchain.com/en/master/developer/cookbook/connect_a_new_online_channel.html)

## Documentation

Our documentation provides information to users, developers and administrators: http://docs.campaignchain.com/