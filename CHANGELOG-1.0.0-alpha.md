Changelog for CampaignChain Community Edition 1.0.0-alpha
=========================================================

This changelog references the relevant changes done in 1.0.0-alpha.x releases.

Find details about the issues here: https://campaignchain.atlassian.net

1.0.0-alpha.3 (2014-12-08)
--------------------------

* Bug

    * [CE-100] - Show proper error message if wrong password has been provided upon login
    * [CE-101] - Keep Create New button visible in tablet + smartphone view
    * [CE-106] - Error at profile edit page in Symfony 2.6
    * [CE-108] - Calendar never displays campaigns data
    * [CE-109] - Fix rendering of Activity entries in Calendar
    * [CE-110] - Get milestone icon per milestone module
    * [CE-111] - Milestones not showing up in monitoring charts
    * [CE-118] - Move CSS of timeline from template to CSS file
    * [CE-127] - Make tracking API accessible without being logged in
    * [CE-134] - When importing sample data: Error: Call to a member function move() on a non-object

* Improvement

    * [CE-5] - Streamline "monitor" vs. "report"
    * [CE-26] - Add Cancel buttons to all forms and change “Save” to “Next” where applicable
    * [CE-33] - Move Timeline and Calendar view from core to campaign-scheduled
    * [CE-37] - Start + end date checks for campaigns also on server-side
    * [CE-61] - Define colors of Timeline chart in CSS instead of tpl file
    * [CE-95] - Grab website favicon to be used as location icon
    * [CE-96] - TrackingController.php should return error message in JSON response
    * [CE-102] - Optimize navbar for mobile
    * [CE-120] - Rename "Timeline" and "Calendar" headings to "Plan"
    * [CE-129] - Move installer and tracking.js to web/ folder with composer plugin
    * [CE-130] - Make 1 bundle only contain 1 module?
    * [CE-131] - Split API routes to /api/v* for public and /api/private/ for internal use
    * [CE-133] - Include assetic and security parameters in config.yml instead of defining them there directly

* New Feature

    * [CE-1] - Allow to configure name of Tracking ID
    * [CE-9] - Created + Last Updated attributes for entities
    * [CE-68] - Module installation: Implement versioning
    * [CE-90] - Button to test CTA tracking configuration in Channels list
    * [CE-99] - Functionality to add new OAuth App entry
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