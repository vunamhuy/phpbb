<?php
/**
 *
 * Group Subscription. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_GROUPSUB_SETTINGS_TITLE'			=> 'Group Subscription settings',
	'ACP_GROUPSUB_SETTINGS_SAVED'			=> 'Group Subscription options saved successfully',
	'ACP_GROUPSUB_SETTINGS_PAYPAL'			=> 'PayPal settings',
	'ACP_GROUPSUB_PP_SANDBOX'				=> 'Enable sandbox mode',
	'ACP_GROUPSUB_PP_SANDBOX_EXPLAIN'		=> 'Sandbox mode allows you to test PayPal payments without using real funds.',
	'ACP_GROUPSUB_SETTINGS_PP_API'			=> 'PayPal API settings',
	'ACP_GROUPSUB_SETTINGS_PP_SB_API'		=> 'PayPal sandbox API settings',
	'ACP_GROUPSUB_PP_CLIENT'				=> 'Client ID',
	'ACP_GROUPSUB_PP_SECRET'				=> 'Client secret',
	'ACP_GROUPSUB_PP_API_EXPLAIN'			=> 'To get your <strong>Client ID</strong> and <strong>Client secret</strong>, go to the <a href="https://developer.paypal.com/developer/applications/" target="_blank">PayPal Developer Dashboard</a>. With <strong>%1$s</strong> selected at the top, in the <strong>REST API apps</strong> section, click on an existing application or click <strong>Create App</strong> to create a new application. Here you will be able to access your API credentials.',
	'ACP_GROUPSUB_SETTINGS_GENERAL'			=> 'General options',
	'ACP_GROUPSUB_NOTIFY_ADMINS'			=> 'Notify admins',
	'ACP_GROUPSUB_NOTIFY_ADMINS_EXPLAIN'	=> 'If enabled, administrators with the <em>“Can view users’ subscriptions”</em> permission will be notified of all new subscriptions.',
	'ACP_GROUPSUB_HEADER'					=> 'Page header',
	'ACP_GROUPSUB_HEADER_EXPLAIN'			=> 'Information to display at the top of all subscription pages.',
	'ACP_GROUPSUB_FOOTER'					=> 'Page footer',
	'ACP_GROUPSUB_FOOTER_EXPLAIN'			=> 'Information to display at the bottom of all subscription pages.',
	'ACP_GROUPSUB_COLLAPSE_TERMS'			=> 'Collapse terms list',
	'ACP_GROUPSUB_COLLAPSE_TERMS_EXPLAIN'	=> 'The list of terms for a package will be listed in a select box if there are more than this many options.',
	'ACP_GROUPSUB_SETTINGS_DEFAULTS'		=> 'Package defaults',
	'ACP_GROUPSUB_DEFAULT_CURRENCY'			=> 'Default currency',
	'ACP_GROUPSUB_DEFAULT_CURRENCY_EXPLAIN'	=> 'This is the default currency for all new packages, which can be overridden on a per-package basis.',
	'ACP_GROUPSUB_WARN_TIME'				=> 'Warning time',
	'ACP_GROUPSUB_WARN_TIME_EXPLAIN'		=> 'The number of days before the expiration of a subscription to notify the subscriber.',
	'ACP_GROUPSUB_GRACE'					=> 'Grace period',
	'ACP_GROUPSUB_GRACE_EXPLAIN'			=> 'The number of days after a subscription ends before removing the user from groups.',

	'ACP_GROUPSUB_SANDBOX'	=> 'Sandbox',
	'ACP_GROUPSUB_LIVE'		=> 'Live',

	'ACP_GROUPSUB_ERROR_CURRENCY'	=> 'You must select a valid currency.',
));
