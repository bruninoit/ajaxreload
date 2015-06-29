<?php
/** 
* 
* @package StaffIt - Ajax Reload
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(
	'ACP_AR_TITLE'			=> 'Settings',
	'ACP_AR_CATEGORY'		=> 'Real Time Notifications ',
	'ACP_AR_SAVED'			=> 'Settings updated successfully',
	'AR_FORUMLIST'			=> 'Reload forum list',
	'AR_FORUMLIST_DESC'		=> 'Enable if you want to reload the forum list in \'index',
	'AR_POSTS'			=> 'Reload post new topic',
	'AR_POSTS_DESC'			=> 'Enable if you want to reload of the post\'s internal topic',
	'AR_VIEWFORUM'			=> 'Reload list of new topics in sub-forums',
	'AR_VIEWFORUM_DESC'		=> 'Enable if you want to reload the list of topics and forums',
	'AR_WHOISONLINE'		=> 'Reload the users online list',
	'AR_WHOISONLINE_DESC'		=> 'Enable the reload of the list of users online in index',
	'AR_TIME'			=> 'Reload time',
	'AR_TIME_DESC'			=> 'Number of seconds between reloads',
));
