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
	'ACP_AR_TITLE'			=> 'Impostazioni',
	'ACP_AR_CATEGORY'		=> 'Real Time Notifications ',
	'ACP_AR_SAVED'			=> 'Impostazioni aggiornate correttamente',
	'AR_FORUMLIST'			=> 'Reload lista dei forum',
	'AR_FORUMLIST_DESC'			=> 'Premi su si se vuoi abilitare il reload della lista dei forum nell\'index',
	'AR_POSTS'			=> 'Reload post nei topic',
	'AR_POSTS_DESC'			=> 'Premi su si se vuoi abilitare il reload dei post all\'interno dei topic',
	'AR_VIEWFORUM'			=> 'Reload lista topic e forum nei sub-forum',
	'AR_VIEWFORUM_DESC'			=> 'Premi su si se vuoi abilitare il reload della lista dei topic e dei forum all\'interno di forum e sub-forum',
	'AR_WHOISONLINE'			=> 'Reload elenco utenti online',
	'AR_WHOISONLINE_DESC'			=> 'Premi su si se vuoi abilitare il reload della lista degli utenti online nell\'index',
	'AR_TIME'			=> 'Tempo di reload',
	'AR_TIME_DESC'			=> 'Numero di secondi dopo i quali le parti di pagine abilitate qui sopra saranno automaticamente aggiornate',
));
