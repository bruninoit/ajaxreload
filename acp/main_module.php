<?php
/** 
* 
* @package StaffIt - Ajax Reload
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
namespace bruninoit\ajaxreload\acp;
class main_module
{
	var $u_action;
	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		$user->add_lang('acp/common');
		$this->tpl_name = 'ar_settings';
		$this->page_title = $user->lang('ACP_AR_TITLE');
		add_form_key('bruninoit/ajaxreload');
		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('bruninoit/ajaxreload'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('ar_time', $request->variable('ar_time', '', true));
			$config->set('ar_forumlist', $request->variable('ar_forumlist', 0));
			$config->set('ar_posts', $request->variable('ar_posts', 0));
			$config->set('ar_viewforum', $request->variable('ar_viewforum', 0));
			$config->set('ar_whoisonline', $request->variable('ar_whoisonline', 0));
			trigger_error($user->lang('ACP_AR_SAVED') . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'U_ACTION' => $this->u_action,
			'AR_TIME'=> $config['ar_time'],
			'AR_FORUMLIST'=> $config['ar_forumlist'],
			'AR_POSTS'=> $config['ar_posts'],
			'AR_VIEWFORUM'=> $config['ar_viewforum'],
			'AR_WHOISONLINE'=> $config['ar_whoisonline']
		));
	}
}
