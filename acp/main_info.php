<?php
/** 
* 
* @package StaffIt - Ajax Notifications 
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
namespace bruninoit\ajaxreload\acp;
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\bruninoit\ajaxreload\acp\main_module',
			'title'		=> 'ACP_AR_TITLE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_AR_TITLE', 'auth' => 'ext_bruninoit/ajaxreload && acl_a_board', 'cat' => array('ACP_AR_TITLE')),
			),
		);
	}
}
