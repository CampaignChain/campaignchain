Changelog for CampaignChain Community Edition 1.0.0-alpha
=========================================================

This changelog references the relevant changes done in 1.0.0-alpha.x releases.

Find details about the issues here: https://campaignchain.atlassian.net

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