<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register {
	
	public function reg($email, $pass){
		$usernew = new Model_Usernew;
		$acceptedmail = new Model_Acceptedmail;
					
		//новый user
		$usernew -> username = $email;
		$usernew -> email = $email;
		$auth = Auth::instance();
		$usernew -> password = $auth->hash_password($pass);
				
		try {
			$usernew -> check();

			$mailtemp = ORM::factory('acceptedmail', array('email'=>$email));
			if ($mailtemp->loaded()){
				
			$usernew -> save();
			$userrole = $mailtemp->role;
			
			}else{
				$this->errors = array();
				return FALSE;
			}
			
			// Считываем юзера
			$usertemp = ORM::factory('usernew', array('username'=>$email));
			$userid = $usertemp->id;
			
			
			switch (intval($userrole)) {
				case (1): $role = 4; break;
				case (2): $role = 5; break;
				case (3): $role = 2; break;
				case (4): $role = 3; break;
			};
	
			
			//сохранение роли
			$addrole = new Model_Addrole();
			$addrole-> user_id = $userid;
			$addrole-> role_id = $role;
			$addrole-> save();
			
			if ($role !== 1){
				$addrole = new Model_Addrole();
				$addrole-> user_id = $userid;
				$addrole-> role_id = 1;
				$addrole-> save();
			}
			
			
			//$useful = new Model_Useful();
			$from = 'customer.service@lindstrom.ua';
			$subject = 'Регистрация';
			$server = $_SERVER['SERVER_NAME'];
			$message = " Здравствуйте! \n Регистрация на сайте $server прошла успешно.\n Ваш логин: $email\n Ваш пароль: $pass";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= "Content-type: text/plain; charset=utf-8";
			
			mail($email, $subject, $message, $headers); 
			
		}
		catch(ORM_Validation_Exception $e){
			$this->errors = $e->errors('validation');
			return FALSE;
		}

		//var_dump($userid);
		//exit;
		
		return TRUE;
	}

	
}