<?php
$export_mail_type = 'tz_custom';

/* Google Recaptcha Secret Key */
$g_secret_key = '6LcFmy0cAAAAAPgW-eKa01ZhvffVXJKxWguwcI0b'; 

/* AWeber List Name. 
Get AWeber List Name from https://www.aweber.com/users/autoresponder/manage
*/

define('aweber_list_name','');

/* ActiveCampaign API URL, API KEY and List ID. 
Get API URL, API KEY and list id from go to http://www.activecampaign.com/ > My Settings > Developers
*/

define('ac_api_url','');
define('ac_api_key','');
define('ac_api_listid','');

/* Custom Email Recipient email address &amp; Email subject line */
$tz_email = 'james.hill@premiserv.co.uk';
$tz_from_email = 'hello@cleaningcompanymanchester.co.uk'; 
$tz_subject = 'https://cleaningcompanymanchester.co.uk';


/* Campaign Monitor API key and List ID. 
Get CM API KEY from https://your-username.createsend.com/admin/account/
Get CM List ID from https://www.campaignmonitor.com/api/getting-started/#listid
*/

define('cm_api_key', '');
define('cm_list_id', '');

/* GetResponse API key and Campaign Token. 
Get GetResponse API KEY from https://app.getresponse.com/my_api_key.html
Get GetResponse Campaign Token from https://app.getresponse.com/campaign_list.html
*/

define('getresponse_api_key',''); 
define('getresponse_campaign_token',''); 

/* Mailchimp API key and List ID. 
Get Mailchimp API key from http://admin.mailchimp.com/account/api
Get Mailchimp List ID from http://admin.mailchimp.com/lists/
*/

define('mailchimp_api_key', ''); 
define('mailchimp_api_listid', '');

/* MailerLite API KEY &amp; GROUP ID
Get API KEY and GROUP ID from go to https://app.mailerlite.com/integrations/api/
*/

define('ml_api_key','');
define('ml_groupid','');
?>