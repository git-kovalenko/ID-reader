<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template {
	
	public $template = 'basic';
	
	public function action_index()
	{	
		$auth = Auth::instance();
		$data = array();
		
		if ($auth->logged_in()){
			Controller::redirect('main');
		} else{
			if (isset($_POST['loginbutton'])){
				$login = Arr::get($_POST, 'login', '');
				$password = Arr::get($_POST, 'password', '');
				if ($auth->login($login, $password)){
					
					$session = Session::instance(); 
					$auth_redirect = $session-> get('auth_redirect', '');
					$session-> delete('auth_redirect');
					
					Controller::redirect($auth_redirect);
				}else{
					$data["error"] = "";
				}

			}
		}
		
		$this->template->body = View::factory('loginform', $data);
		
	}
	public function action_logout()
	{
		$auth = Auth::instance();
		$auth -> logout();
		
		Controller::redirect('');
	}
	
	public function action_registration(){
		$data = array();
		if (isset($_POST['regbutton'])){
				$email = Arr::get($_POST, 'email', '');
				$pass = Arr::get($_POST, 'pass', '');
				
				$register = new Model_Register();
				if ($register->reg($email, $pass)){
					$data["regok"]	= "";
				}else{
					$data["errors"]	= $register->errors;
				}
		
		
		}
				
		$this->template->body = View::factory('regform', $data);
	}

	public function action_hash()
	{
		$auth = Auth::instance();
		
		$this->template->body = $auth->hash_password('admin');
	}
	
	
	
}
