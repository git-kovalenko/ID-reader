<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usernew extends ORM {
	protected $_table_name = 'users'; //таблица users

	public function rules(){
		return array(
			'username' => array(
				array('not_empty'),
				array('email'),
				array(array($this, 'username_unique')),
			),
			
			'password' => array(
                array('not_empty'),
            ),
		);
	
	}
	
	public function username_unique($username){
	
		$usertemp = ORM::factory('usernew', array('username'=>$username));
		
		if ($usertemp->loaded()){
			return FALSE;
		} else{
			return TRUE;
		}
	}

}