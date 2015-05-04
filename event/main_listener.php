<?php

/**
*
* @package ajaxreload
* @copyright (c) 2013 Bruninoit
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace bruninoit\ajaxreload\event;
/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
/**
* Event listener
*/

class main_listener implements EventSubscriberInterface
{
	
	static public function getSubscribedEvents()
	{
		return array(
			'core.common'		=> 'variables_refresh',
			'core.user_setup'	=> 'ar_languages',
			);
	}
	protected $config;
	protected $request;
        protected $template;

	public function __construct(\phpbb\config\config $config, \phpbb\request\request $request, \phpbb\template\template $template)
	{
        $this->config = $config;
        $this->request = $request;
        $this->template = $template;
	}
	
	
	public function ar_languages($event)
	{	
//language start
$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'bruninoit/ajaxreload',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
//language end
	}
	
	
	public function variables_refresh($event)
	{
	$url=$this->request->variable('rwefd', '');
	
    
   //OPTIONS START 
	//change true to false to disable the option which you want
	$whoisonline = true;		//refresh who is online
	$forumlist = true;		//refresh forum list
	$posts_intopics = true; 	//refresh posts in view topics
	$viewforum = true; 		//refresh topics/forums list in viewforum
	
	//refresh time in seconds
	$reload_seconds = 15;
    //OPTIONS END 
    
    
	$this->template->assign_var('FORUMLIST_RELOAD', $forumlist); 
	$this->template->assign_var('WHOISONLINE_RELOAD', $whoisonline);
	$this->template->assign_var('POSTS_RELOAD', $posts_intopics);
	$this->template->assign_var('VIEWFORUM_RELOAD', $viewforum);
	$this->template->assign_var('URL_CORRENTE', $url);
	$this->template->assign_var('TIME_RELOAD', $reload_seconds);
	}
}
