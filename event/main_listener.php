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
	public function variables_refresh($event)
	{
	$url=utf8_normalize_nfc($this->request->variable('request_uri', '', true));
	
    
    
	//change true -> false to disable the options
	$whoisonline = true; //refresh who is online
	$forumlist = true;   //refresh forum list
	$posts_intopics = true;   //refresh posts in view topics
	$reload_seconds = 15;   //refresh time in seconds
    
    
    
	$this->template->assign_var('FORUMLIST_RELOAD', $forumlist); 
	$this->template->assign_var('WHOISONLINE_RELOAD', $whoisonline);
	$this->template->assign_var('POSTS_RELOAD', $posts_intopics);
	$this->template->assign_var('URL_CORRENTE', $url);
	$this->template->assign_var('TIME_RELOAD', $reload_seconds);
	}
}
