<?php
/** 
* 
* @package StaffIt - Ajax Reload
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'ACP_AR_TITLE'			=> 'الإعدادات',
	'ACP_AR_CATEGORY'		=> 'التحميل التلقائي للصفحات ',
	'ACP_AR_SAVED'			=> 'تم تحديث الإعدادات بنجاح',
	'AR_FORUMLIST'			=> 'تحديث قائمة المنتدى ',
	'AR_FORUMLIST_DESC'		=> 'اختار "نعم" لو تريد إعادة تحميل قائمة المنتدى في الواجهة الرئيسية',
	'AR_POSTS'			=> 'تحديث صفحة الموضوع ',
	'AR_POSTS_DESC'			=> 'اختار "نعم" لو تريد إعادة تحميل صفحة الموضوع',
	'AR_VIEWFORUM'			=> 'تحديث قائمة المواضيع الجديدة في المنتديات الفرعية ',
	'AR_VIEWFORUM_DESC'		=> 'اختار "نعم" لو تريد إعادة تحميل قائمة المواضيع الجديدة والمنتديات في صفحة المنتدى',
	'AR_WHOISONLINE'		=> 'تحديث الموجودون الآن ',
	'AR_WHOISONLINE_DESC'		=> 'اختار "نعم" لو تريد إعادة تحميل قائمة الأعضاء الموجودون في الواجهة الرئيسية',
	'AR_TIME'			=> 'وقت إعادة التحميل ',
	'AR_TIME_DESC'			=> 'سيتم إعادة التحميل عند القيمة التي ستحددها هنا بالثواني',
));
