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
	'LAST_TOPICS'			=> 'Ultimi Topic',
    'LAST_POSTS'			=> 'Ultimi Post',
	'TOP_TOPICS'			=> 'Argomenti più visti',
	'ACP_TTT_TITLE'			=> 'Impostazioni generali',
	'ACP_TTT_CATEGORY'		=> 'Top Ten Topics',
	
	'AFTER_FORUMLIST'		=> 'Dopo la lista dei forum e del box di login',
	'AFTER_MARKFORUM'		=> 'Prima della lista dei forum, ma dopo link "segna come gi&agrave; letti"',
	'BEFORE_LOGIN' 			=> 'Dopo la lista dei forum, ma prima del box di login',
	'ALL_FOOTER'			=> 'In tutte le pagine, nel footer',
	'ACP_TTT_SAVED'			=> 'Impostazioni della Top Ten Topics aggiornate',
	'SIXMONTH' => 'ultimi 6 mesi',
	'TWELVEMONTH' => 'ultimi 12 mesi',
	'ONEMONTH' => 'ultimo mese',
	'THREEMONTH' => 'ultimi 3 mesi',
	'ALL_TOPICS' => 'Tutti',
	'TTT_BASED' => 'basata sulla MOD di <a href="http://giannidose.altervista.org">Micogian</a>',
	'TNORMAL' => 'Solo topic normali',
	'TIMPORTANT' => 'Topic normali e importanti',
	'TANNUNCE' => 'Topic normali, importanti e annunci',
	'TGLOBAL' => 'Topic normali, importanti, annunci e annunci globali',
	'TTT_BY' => 'di',
));
