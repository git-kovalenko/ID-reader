<?php defined('SYSPATH') or die('No direct script access.');
$cust_role = '';
class Controller_Main extends Common {
	
	public $template = 'basic';
	
	
	public function action_index()
	{	
		$this->template->body = View::factory('noaccess');
		
		$auth = Auth::instance();
		$user = $auth->get_user()->username;
		
		$acceptedmail = new Model_Acceptedmail;
		$useraccess = ORM::factory('acceptedmail', array('email'=>$user));
		if ($useraccess->loaded()){
			$customer = intval($useraccess->customer_id);
		}
		
		if ($auth->logged_in('customer_basic')){
			$this->template->body = View::factory('customer_basic');
			$this->template->body->client = 'Сustomer # <span id="customer-number">'.$customer.'</span>';
			$this->template->body->customer = $customer;
		}
		
		if ($auth->logged_in('customer_admin')){
			$this->template->body = View::factory('customer_admin');
			$this->template->body->client = 'Сustomer # <span id="customer-number">'.$customer.'</span>';
			$this->template->body->customer = $customer;
		}
				
		if ($auth->logged_in('admin')){
			$this->template->body = View::factory('home');
			
		} 
		
		if ($auth->logged_in('worker')){
			$this->template->body = View::factory('worker');
			
		}
	
		/*if ($auth->logged_in('login')){
		}*/
		
		
		
	}

}
