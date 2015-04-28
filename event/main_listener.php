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
	//change true -> false to disable the options
	$whoisonline = true; //refresh who is online
	$forumlist = true;   //refresh forum list
	$posts_intopics = true;   //refresh posts in view topics
	
	static public function getSubscribedEvents()
	{
		return array(
			'core.common'		=> 'variables_refresh',
			);
	}
	/* @var \phpbb\template\template */
	protected $config;

	public function __construct(\phpbb\config\config $config)
	{
        $this->$config = $config;
	}
	public function variables_refresh($event)
	{
	//change true to false to disable the options
	$this->template->assign_var('FORUMLIST_RELOAD', $forumlist); 
	$this->template->assign_var('WHOISONLINE_RELOAD', $whoisonline);
	$this->template->assign_var('POSTS_RELOAD', $posts_intopics);
	$this->template->assign_var('URL_CORRENTE', $what);
	}
}
