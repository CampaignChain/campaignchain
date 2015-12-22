Changelog for CampaignChain Community Edition 1.0.0-beta
========================================================

This changelog references the relevant changes done in 1.0.0-beta.x releases.

Find details about the issues here: https://campaignchain.atlassian.net

1.0.0-beta.3 (2015-12-22)
-------------------------

* New Features

    * [CE-53] - Connect to Google Analytics via OAuth
    * [CE-383] - The marketing manager accesses the settings menu to add a new user
    * [CE-384] - The marketing manager can browse a list of users to see whether everyone in his team does have access
    * [CE-385] - Every user can upload a photo/avatar to his account so that others can more easily spot what he does
    * [CE-388] - The social media manager can verify that he's logged in based on his account photo being displayed along with his name in the top right of the header
    * [CE-389] - The marketing manager can edit an existing user to correct a mistake
    * [CE-390] - The marketing manager adds a new user who just joined his team
    * [CE-393] - Refactor Assignee hook to work with new user management
    * [CE-394] - The system administrator installs CampaignChain and provides his user data
    * [CE-428] - A user clicks on a button in the Settings sidebar to close it
    * [CE-444] - A developer selects the sample data as per the composer package name
    * [CE-455] - A developer would like his application to connect to the REST API via OAuth

* Task

    * [CE-381] - Refactor module framework
    * [CE-382] - Adjust all modules to work with new modules framework
    * [CE-403] - Adjust module generator to refactored modules framework
    * [CE-533] - Dissolve distribution-ce into campaignchain-ce

* Improvement

    * [CE-234] - Simplify form for Linkedin Activity
    * [CE-418] - Open all external links as new tab/window
    * [CE-446] - Use DHTMLX Gantt 3.3

* Bug

    * [CE-66] - Gracefully ask user to restart if Wizard session data is empty (e.g. due to error)
    * [CE-172] - Add assignee hook to Linkedin activity
    * [CE-223] - When connecting new Facebook user, pages cannot be deselected and all of them will be connected
    * [CE-303] - If start date of timeline is after today, don’t show today line
    * [CE-305] - Module update script changes module data for scheduled campaign to that of scheduled milestone
    * [CE-308] - Add "campaignchain" as tag for all composer packages
    * [CE-310] - Module update script duplicates report
    * [CE-312] - Don’t show scheduled campaigns in past when creating new Activity or Milestone
    * [CE-325] - Today line almost gone after editing Activity
    * [CE-330] - When activating "Now" in due hook, report scheduler is not being created
    * [CE-338] - Add hooks in modal edit view
    * [CE-353] - bootstrap-clockpicker.min.js missing upon installation at step 1
    * [CE-358] - Installation on Windows - RuntimeException
    * [CE-361] - Module installer wrongly uses full path prefixed with ..\..\ on Windows
    * [CE-363] - Assign copyright to CampaignChain Inc.
    * [CE-364] - Adding new Facebook location doesn't work
    * [CE-404] - Facebook REST client not connecting
    * [CE-414] - Mapping error
    * [CE-415] - Exception error
    * [CE-416] - Add Remember Me function
    * [CE-417] - CTA Tracking should not respond with BAD REQUEST when a mailto link is intercepted
    * [CE-420] - Connecting to Facebook should consider the selected pages during the connection process
    * [CE-421] - Make sure the timezone is correct whenever something is related to a date (and time)
    * [CE-425] - ParserUtil::sanitizeUrl() in Location::setUrl() adds unnecessary trailing slash that causes e.g. GoToWebinar links to not work
    * [CE-429] - Side menu should be rendered as Bootstrap component
    * [CE-430] - Remove "Teams" from Settings menu, because not implemented yet
    * [CE-431] - Error if no settings navigation item provided by a module
    * [CE-440] - Attempted to load class "MilestoneRepository" when viewing calendar
    * [CE-448] - 500 Internal Server Error after re-saving an new activity
    * [CE-469] - Can't load sample data due to Google Analytics error
    * [CE-477] - Error: 'Child "redirects" does not exist.' when creating new OAuth server app
    
1.0.0-beta.2 (2015-09-15)
-------------------------

* New Feature

    * [CE-299] - Campaign template
    * [CE-300] - Repeating campaign
    * [CE-301] - Tabs for different views of a single campaign
    * [CE-306] - SlideShare integration (phase 1)
    * [CE-17] - MailChimp integration (phase 1)

* Improvement

    * [CE-262] - Generate multiple modules per bundle
    * [CE-307] - Add tooltips for buttons in tables showing all campaigns, activities and milestones
    * [CE-313] - Include docs through Read The Doc and not as a composer package
    * [CE-315] - Display Campaign icon and optional image just like for Locations
 
* Bug

    * [CE-293] - CamelCase module name
    * [CE-294] - Info re routes after module has been generated
    * [CE-295] - "use" statement missing in Controller
    * [CE-303] - If start date of timeline is after today, don’t show today line
    * [CE-305] - Module update script changes module data for scheduled campaign to that of scheduled milestone
    * [CE-308] - Add "campaignchain" as tag for all composer packages
    * [CE-310] - Module update script duplicates report
    * [CE-312] - Don’t show scheduled campaigns in past when creating new Activity or Milestone
    * [CE-325] - Today line almost gone after editing Activity
    * [CE-330] - When activating "Now" in due hook, report scheduler is not being created
    * [CE-358] - Installation on Windows - RuntimeException
    * [CE-361] - Module installer wrongly uses full path prefixed with ..\..\ on Windows


1.0.0-beta.1 (2015-02-17)
-------------------------

* Bug

    * [CE-200] - Timeline: Today line to long at bottom in embedded view, breaks sync with left column
    * [CE-243] - Module installer to also take into account modules in src/
    * [CE-251] - Error when providing correct channel for activity module generation
    * [CE-252] - Update auto-generated stub entries in campaignchain.yml
    * [CE-253] - Use vendor name as prefix of module name in campaignchain.yml
    * [CE-254] - Add mandatory routes automatically in campaignchain.yml and routing.yml
    * [CE-260] - Compile Error: Cannot redeclare class OAuthSignatureMethod_HMAC_SHA1
    * [CE-274] - Operation's CSS should include suffix
    * [CE-277] - Ask for required website link to specify homepage in composer.json
    * [CE-278] - Controller of Activity module should not be empty
    * [CE-282] - DataTables boostrap JS asset does not exist
    * [CE-289] - module description vs. display name
    * [CE-290] - Index route and Controller in report module
    * [CE-291] - Allow vendor name to be CamelCase

* Improvement

    * [CE-242] - Extend campaignchain:module:update to completely update modules registry
    * [CE-249] - Show just Channel icon if Location has no image
    * [CE-250] - Compose channel icon per channel module
    * [CE-259] - Use trigger hook tpl in Activity sidebar and report
    * [CE-261] - Create route entries for Activity module
    * [CE-263] - Generate report stubs for Operation module
    * [CE-264] - Generate form type and templates and CSS for Operation
    * [CE-268] - Verify in modules installer, that required routes have been provided by Channel, Activity, Campaign, Milestone modules
    * [CE-270] - Store bundle class when registering it and use this to compose the Web assets path
    * [CE-275] - Ask for Metrics of an Operation module
    * [CE-276] - Describe syntax of channel for Activity module
    * [CE-279] - Include Hooks for Activity module
    * [CE-280] - Change "Module license" to "Package license"
    * [CE-281] - Generate Channel module controller
    * [CE-288] - module name should be allowed to have dashes

* New Feature

    * [CE-240] - Integrate with GoToWebinar
    * [CE-245] - Visualize CTA tracking
    * [CE-273] - Create entity skeleton per operation module

* Task

    * [CE-246] - Date and time format in user profile should not be editable