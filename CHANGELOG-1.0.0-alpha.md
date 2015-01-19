Changelog for CampaignChain Community Edition 1.0.0-alpha
=========================================================

This changelog references the relevant changes done in 1.0.0-alpha.x releases.

Find details about the issues here: https://campaignchain.atlassian.net


1.0.0-alpha.4 (2015-01-19)
--------------------------

* Bug

    * [CE-85] - Char count of max chars in FB and Twitter message only works when you start typing
    * [CE-111] - Milestones not showing up in monitoring charts
    * [CE-135] - Error when creating new Website location: Integrity constraint violation: 1048 Column 'createdDate' cannot be null
    * [CE-136] - Make fullscreen header look as in Bootstrap modal
    * [CE-139] - Due hook does not handle timezone properly when editing
    * [CE-140] - Timeline does not handle timezones other than UTC properly
    * [CE-150] - Sorting icons not being shown in datatables
    * [CE-161] - Not storing image of newly connected Linkedin Location
    * [CE-171] - Add glyphicons as asset for Base template
    * [CE-173] - ResourceOwner is null when inserting new OAuth app
    * [CE-174] - "Undefined variable" if no campaign or no milestone or no activity defined
    * [CE-179] - Public Facebook post only visible to friends
    * [CE-190] - Move actions in calendar view
    * [CE-191] - Grey out done actions in Calendar
    * [CE-193] - On mouse over, text of Action in calendar disappears
    * [CE-220] - Editing Linkedin News Item in Modal does not work
    * [CE-221] - Unabel to install modules
    * [CE-222] - Notice: Undefined variable: wizardPages if connecting new Facebook user that has no pages
    * [CE-226] - Allow secret field to be empty for OAuth application (in form and DB)
    * [CE-227] - Installer does not register bundle with multiple modules
    * [CE-229] - Image of select2 dropdown not visible

* Improvement

    * [CE-31] - Icons should allow to identify channel, activity (and operation) where applicable
    * [CE-44] - Optimize layout of activity form
    * [CE-60] - Use the latest stable Bootstrap 3.x version
    * [CE-73] - Add and edit actions in calendar view
    * [CE-114] - In calendar, use colors for done, ongoing and upcoming campaigns
    * [CE-116] - Dynamically load blocks from modules
    * [CE-141] - Logo in header should point to start page in application
    * [CE-144] - Use DHTMLXGantt 3.1
    * [CE-156] - DHTMLXGantt: Set touch-device feature only when used through touch device :)
    * [CE-157] - Use twbs/twitter instead of twitter/bootstrap
    * [CE-180] - Footer should not be sticky, because it eats up screen estate esp. on mobile
    * [CE-182] - Make datetime picker allow scheduling on any day at any time
    * [CE-185] - Installation routines should create proper YAML files
    * [CE-192] - Don't allow to drag campaigns in calendar
    * [CE-195] - Save changes in DB when calendar item gets dragged
    * [CE-196] - Show modal to edit calendar item upon double click
    * [CE-218] - Automatically collect stats for Facebook
    * [CE-219] - Automatically collect stats for Linkedin

* New Feature

    * [CE-58] - Show published Twitter status as rendered by Twitter (through REST API)
    * [CE-137] - Provide read view of activities for Twitter, Facebook, Linkedin
    * [CE-151] - Dev GUI: option to reset system, e.g. to test installation
    * [CE-153] - Provide a dev flag in parameters.yml for CampaignChain
    * [CE-158] - Post status update on Facebook page
    * [CE-197] - Command to update kernel config per changes in bundles' config
    * [CE-214] - Automatically collect stats for a Tweet

* Task

    * [CE-165] - Remove ce.yml sample data


1.0.0-alpha.3 (2014-12-08)
--------------------------

* Bug

    * [CE-100] - Show proper error message if wrong password has been provided upon login
    * [CE-101] - Keep Create New button visible in tablet + smartphone view
    * [CE-106] - Error at profile edit page in Symfony 2.6
    * [CE-108] - Calendar never displays campaigns data
    * [CE-109] - Fix rendering of Activity entries in Calendar
    * [CE-110] - Get milestone icon per milestone module
    * [CE-118] - Move CSS of timeline from template to CSS file
    * [CE-127] - Make tracking API accessible without being logged in
    * [CE-134] - When importing sample data: Error: Call to a member function move() on a non-object

* Improvement

    * [CE-26] - Add Cancel buttons to all forms and change “Save” to “Next” where applicable
    * [CE-33] - Move Timeline and Calendar view from core to campaign-scheduled
    * [CE-61] - Define colors of Timeline chart in CSS instead of tpl file
    * [CE-95] - Grab website favicon to be used as location icon
    * [CE-102] - Optimize navbar for mobile
    * [CE-120] - Rename "Timeline" and "Calendar" headings to "Plan"
    * [CE-130] - Make 1 bundle only contain 1 module?
    * [CE-131] - Split API routes to /api/v* for public and /api/private/ for internal use
    * [CE-133] - Include assetic and security parameters in config.yml instead of defining them there directly

* New Feature

    * [CE-9] - Created + Last Updated attributes for entities
    * [CE-68] - Module installation: Implement versioning
    * [CE-90] - Button to test CTA tracking configuration in Channels list
    * [CE-103] - Implement blocks
    * [CE-104] - Make Dashboard page the About page
    * [CE-105] - 3 blocks on Execute entry page

* Task

    * [CE-107] - Avoid misconception that distribution-ce bundle equals CE download

1.0.0-alpha.2 (2014-10-31)
--------------------------

* Bug

    * [CE-2] - Ensure consistent syntax of URLs in Location
    * [CE-3] - Tracking ID not correctly appended when URL contains #anchor
    * [CE-8] - Timeline error when no campaign data
    * [CE-89] - Remove "Is this your personal channel" when connecting new Location
    * [CE-91] - Don't show a Location when creating new Activity that has no Activities
    * [CE-92] - "Unrecognized field: URL" when posting Tweet with URL
    * [CE-94] - CTA tracking always appends ID instead of setting it in cookie
    * [CE-97] - Show only root Locations in http://localhost:8000/app_dev.php/channels/

* Improvement

    * [CE-6] - Fix that CTA tracking code fires only once
    * [CE-28] - Rename _create routes to _new for consistency sake
    * [CE-46] - Use CampaignChain logo in login screen
    * [CE-82] - Move FOSUserBundle routings to CoreBundle routing and see if that works
    * [CE-93] - Do not run localhost URLs through bit.ly for CTA tracking

* New Feature

    * [CE-22] - Provide a form where the admin can manage all OAuth app keys
    * [CE-24] - If channels list empty, display info how to connect channel
    * [CE-69] - Module installation: install bundle assets
    * [CE-87] - Add help icon which opens user docs

* Task

    * [CE-47] - Rename CREDITS file to NOTICE as per APL

1.0.0-alpha.1 (2014-10-06)
--------------------------

* Initial release.