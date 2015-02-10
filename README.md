Community Edition (CE)
======================

The CampaignChain Community Edition has all basic modules included and you can
easily add more of them inside the application.

1. Set up Database
------------------

Launch your MySQL client of choice and create a new MySQL database for the
application.

2. Install Composer
-------------------

CampaignChain utilizes https://getcomposer.org/download/ for its package and
modules management. Install it with this command:

    $ curl -sS https://getcomposer.org/installer | php

3. Install Bower
----------------

For JavaScript components, CampaignChain makes use of Bower, which - you guessed
it - is a package manager for JavaScript code.

Before you can install Bower, you must first install npm which ships with
node.js: http://nodejs.org/download/

Now install Bower through npm:

    $ npm install -g bower

4. Install Base System
----------------------

In a folder of your choice, execute Composer to download all files of the
CampaignChain base system. Please note that this might take a while.

    $ composer create-project --stability=dev campaignchain/campaignchain-ce campaignchain dev-1.0.0-beta.1

5. Configure Base System
------------------------

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

6. Clear Cache and Dump Assets
------------------------------

Once Composer is done, execute the following commands, still inside the
CampaignChain root folder:

    $ php app/console cache:clear --env=prod --no-debug

    $ php app/console assetic:dump --env=prod --no-debug

7. Configure CampaignChain Scheduler
------------------------------------

The CampaignChain scheduler is a PHP script that executes scheduled Operations.

On Linux or Mac OS X, configure it as a cron job so that it runs automatically
every minute:

    $ crontab -e -u <username>
    */1 * * * * /usr/bin/php /path/to/campaignchain/app/console campaignchain:scheduler

On Windows, you could use the task scheduler or AT command to achieve the same:
http://technet.microsoft.com/en-us/library/bb726974.aspx

8. Start Server
---------------

Use PHP's built-in Web server to run CampaignChain.

    $ php app/console server:run

By default, the built-in Web server listens for connections on 127.0.0.1. If
you're planning to connect to the server over a network, you can specify the
network IP address that the server should use. For example, the command below
runs the Web server on port 80 of IP address 192.168.1.1:

    $ php app/console server:run 192.168.1.1:80
    
9. Installation Wizard
-----------------------

Hop over to http://localhost:8000/campaignchain/install.php and follow the
instructions.

10. Install Modules
-------------------

You can easily add modules (e.g. to post on Twitter or Facebook) at
http://localhost:8000/modules/new/.

Success!
--------

CampaignChain is now installed, configured and ready for use!