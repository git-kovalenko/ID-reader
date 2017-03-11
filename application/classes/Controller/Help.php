<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Help extends Common {
	
	public $template = 'basic';
	
	
	public function action_index()
	{	
		//$data = array();
		$this->template->body = View::factory('helpview');
		
	}

}
