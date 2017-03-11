<?php
//Исходные параметры
$servername='a3dfoto.mysql.ukraine.com.ua';
$dbusername='a3dfoto_root';
$dbpassword='dupl1';
$dbname='a3dfoto_db'; 
$tablename='test2';

//'max_input_vars' in php.ini file mast be 10000 !
date_default_timezone_set('Europe/Kiev');

//настройки вывода в таблицу
$GLOBALS['viewfilds'] = "`id`,`code`,`product_id`,`wearer_id`,`wearer_name`,`status`,`send_time`,`sorting_time`,
		`folding_time`,`packing_time`,`remark`,`remark_on_time`,`remark_off_time`,
		`department`,`customer_id`,`customer_name`,`remark_confirm`,`packing_confirm`";
//
connectdb();

switch (true) {
	case (!empty($_POST["history_code"])):
		add_history($_POST["history_code"], $_POST["action"]);
		break;
	
	case (!empty($_POST["updatedb"])):
		//print ("POST dbase \n");
		update($_POST["updatedb"]);
		break;
	
	case (!empty($_POST["show"])):
		show($_POST["show"], $_POST["val"]);
		break;
	
	case (!empty($_POST["search"])):
		search($_POST["search"], $_POST["val"]);
		break;

	case (!empty($_POST["change"])):
		change($_POST["change"],  $_POST["fild"], $_POST["val"]);
		break;
	
	case (!empty($_POST["amount"])):
		count_base();
		break;
	case (!empty($_POST["read_code"])):
		read_fild($_POST["read_code"], $_POST["fild"]);
		break;
	case (!empty($_POST["distinct_infild"])):
		select_distinct($_POST["table"], $_POST["distinct_infild"]);
		break;
	case (!empty($_POST["distinct_infild2f"])):
		select_distinct2f($_POST["distinct_infild2f"], $_POST["wherefild"], $_POST["value"]);
		break;
		
		
	case (!empty($_POST["show2filds"])):
		show2filds($_POST["show2filds"], $_POST["value1"], $_POST["fild2"], $_POST["value2"]);
		break;
	case (!empty($_POST["show3filds"])):
		show3filds($_POST["show3filds"], $_POST["value1"], $_POST["fild2"], $_POST["value2"], $_POST["fild3"], $_POST["value3"]);
		break;
	case (!empty($_POST["report_all"])):
		report();
		break;
	
	case (!empty($_POST["newmail"])):
		insertuser($_POST["newmail"], $_POST["newrole"], $_POST["newcustomer"] );
		break;
	case (!empty($_POST["users"])):
		allusers();
		break;
	case (!empty($_POST["delete_user"])):
		delete_user($_POST["user"]);
		break;
	case (!empty($_POST["add_remark"])):
		add_remark($_POST["add_remark"]);
		break;
	case (!empty($_POST["show_remarks"])):
		show_remarks();
		break;
	case (!empty($_POST["del_remark"])):
		delete_remark($_POST["del_remark"]);
		break;
	case (!empty($_POST["reset"])):
		reset_customer_fild($_POST["reset"], $_POST["fild"], $_POST["value"]);
		break;


		
	case (!empty($_POST["create_db"])):
		createtable();;
		break;
		
	default: // действие по умолчанию
} 
mysql_close($link);


//======================================================================
	function connectdb(){
	global $servername, $dbusername, $dbpassword, $dbname; 

	$link=mysql_connect ("$servername","$dbusername","$dbpassword")
	or die ( " Not able to connect to server ");
	mysql_select_db("$dbname", $link) or die ("could not open db".mysql_error());

	// в какой кодировке получать данные от клиента
	@mysql_query('set character_set_client="utf8"');
	// в какой кодировке получать данные от БД для вывода клиенту
	@mysql_query('set character_set_results="utf8"');
	// кодировка в которой будут посылаться служебные команды для сервера
	@mysql_query('set collation_connection="utf8_general_ci"');

	mysql_query('SET NAMES utf8');
}

//======================================================================

function createtable(){
global $tablename;


	$query="CREATE TABLE IF NOT EXISTS 
		$tablename (
			`id` MEDIUMINT NOT NULL AUTO_INCREMENT,
			`code` INT(8) ZEROFILL UNSIGNED,
			`product_id` VARCHAR(15),
			`wearer_id` int(10) UNSIGNED,
			`wearer_name` VARCHAR(250),
			`status` VARCHAR(30),
			`send_time` DATETIME,
			`sorting_time` DATETIME,
			`folding_time` DATETIME,
			`packing_time` DATETIME,
			`remark` TEXT,
			`remark_on_time` DATETIME,
			`remark_off_time` DATETIME,
			`department` VARCHAR(250),
			`customer_id` int(10) UNSIGNED,
			`customer_name` VARCHAR(250),
			`remark_confirm` VARCHAR(5),
			`packing_confirm` VARCHAR(5),
			`return_time` DATETIME,
			`customer_receive_time` DATETIME,
			PRIMARY KEY(`id`),
			unique key (`code`)
		)";
	if (mysql_query("$query")) {
		echo "Table ".$tablename." created successfully \n";
	} else {
		echo "Error in creating table: ". mysql_error ();
	}
	
	$query="CREATE TABLE IF NOT EXISTS 
		`history` (
			`id` INT NOT NULL AUTO_INCREMENT,
			`code` INT(8) ZEROFILL UNSIGNED,
			`date` DATETIME,
			`action` TEXT,
			PRIMARY KEY(`id`)
		)";
	if (mysql_query("$query")) {
		echo "Table 'history' created successfully \n";
	} else {
		echo "Error in creating table: ". mysql_error ();
	}
	
	$query="CREATE TABLE IF NOT EXISTS 
		`acceptedmail` (
			`id` MEDIUMINT NOT NULL AUTO_INCREMENT,
			`email` VARCHAR(250),
			`role` int(3) UNSIGNED,
			`customer_id` int(10) UNSIGNED,
			`customer_role` int(1) UNSIGNED,
			`date` DATETIME,
			PRIMARY KEY(`id`)
		)";
		
	if (mysql_query("$query")) {
		echo "Table 'acceptedmail' created successfully \n";
	} else {
		echo "Error in creating table: ". mysql_error ();
	}
	
	$query="CREATE TABLE IF NOT EXISTS 
		`remarks` (
			`id` INT NOT NULL AUTO_INCREMENT,
			`remark` VARCHAR(250),
			PRIMARY KEY(`id`)
		)";
		
	if (mysql_query("$query")) {
		echo "Table 'remarks' created successfully \n";
	} else {
		echo "Error in creating table: ". mysql_error ();
	}
		
	$query=" CREATE TABLE IF NOT EXISTS `roles` (
	  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	  `name` varchar(32) NOT NULL,
	  `description` varchar(255) NOT NULL,
	  PRIMARY KEY  (`id`),
	  UNIQUE KEY `uniq_name` (`name`)
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

	INSERT INTO `roles` (`id`, `name`, `description`) VALUES(1, 'login', 'Login privileges, granted after account confirmation');
	INSERT INTO `roles` (`id`, `name`, `description`) VALUES(2, 'admin', 'Administrative user, has access to everything.');
	INSERT INTO `roles` (`id`, `name`, `description`) VALUES(3, 'worker', 'Worker, has access to changing wear status.');
	INSERT INTO `roles` (`id`, `name`, `description`) VALUES(4, 'customer_basic', 'customer, has minimal customer access.');
	INSERT INTO `roles` (`id`, `name`, `description`) VALUES(5, 'customer_admin', 'customer admin, has full customer access.');
	

	CREATE TABLE IF NOT EXISTS `roles_users` (
	  `user_id` int(10) UNSIGNED NOT NULL,
	  `role_id` int(10) UNSIGNED NOT NULL,
	  PRIMARY KEY  (`user_id`,`role_id`),
	  KEY `fk_role_id` (`role_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	
	CREATE TABLE IF NOT EXISTS `users` (
	  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	  `email` varchar(254) NOT NULL,
	  `username` varchar(32) NOT NULL DEFAULT '',
	  `password` varchar(64) NOT NULL,
	  `logins` int(10) UNSIGNED NOT NULL DEFAULT '0',
	  `last_login` int(10) UNSIGNED,
	  PRIMARY KEY  (`id`),
	  UNIQUE KEY `uniq_username` (`username`),
	  UNIQUE KEY `uniq_email` (`email`)
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

	CREATE TABLE IF NOT EXISTS `user_tokens` (
	  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	  `user_id` int(11) UNSIGNED NOT NULL,
	  `user_agent` varchar(40) NOT NULL,
	  `token` varchar(40) NOT NULL,
	  `created` int(10) UNSIGNED NOT NULL,
	  `expires` int(10) UNSIGNED NOT NULL,
	  PRIMARY KEY  (`id`),
	  UNIQUE KEY `uniq_token` (`token`),
	  KEY `fk_user_id` (`user_id`),
	  KEY `expires` (`expires`)
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

	ALTER TABLE `roles_users`
	  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
	  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

	ALTER TABLE `user_tokens`
	ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
	";
	global $servername, $dbusername, $dbpassword, $dbname; 
	
	$link = mysqli_connect( 
            $servername,  /* Хост, к которому мы подключаемся */ 
            $dbusername,       /* Имя пользователя */ 
            $dbpassword,   /* Используемый пароль */ 
            $dbname);     /* База данных для запросов по умолчанию */ 
	
	if ($link->multi_query($query)) {
		echo "Tables 'auth-schema' created successfully \n";
	} else {
		echo "Error in creating table: ". mysql_error ();
	}
	
	//mysqli_free_result($result); 
	mysqli_close($link); 
	
	/*
		for deleting in phpmyadmin:

		SET FOREIGN_KEY_CHECKS=0; 
		DROP TABLE users; 
		DROP TABLE roles; 
		SET FOREIGN_KEY_CHECKS=1; 
	*/
	
}

//======================================================================
function update($dbase){
	global $tablename;

//code, product, wearer_number, wearer_name, department, customer_number, customer_name
	$dblength = count($dbase);
	$total = 0;	
	$duplicate =0;

	for ($i = 0; $i < $dblength; $i++) {
		$query="INSERT INTO
			".$tablename." (`code`, `product_id`, `wearer_id`, `wearer_name`, `status`, `department`, `customer_id`, `customer_name`)
			VALUES
				(".$dbase[$i][0].", 
				 ".$dbase[$i][1].", 
				 ".$dbase[$i][2].",
				 '".$dbase[$i][3]."',
				 'new',
				 '".$dbase[$i][4]."',
				 ".$dbase[$i][5].",
				 '".$dbase[$i][6]."'		 )
			ON DUPLICATE KEY UPDATE 
				`wearer_id` = ".$dbase[$i][2].",
				`wearer_name` = '".$dbase[$i][3]."',
				`department` = '".$dbase[$i][4]."',
				`customer_id` = ".$dbase[$i][5].",
				`customer_name` = '".$dbase[$i][6]."'";
				
		if (mysql_query("$query")) {
			$total = $total + 1;
		} else {
			if (mysql_errno() == 1062){
				$duplicate = $duplicate + 1;
				continue;
			}else{
				print ("Error in Values insertion: ". mysql_error());
			}
		}
	}
	print ("\n ".$total." items added successfully \n");
	print ("\n ".$duplicate." duplicated items are not added \n");
}

//======================================================================
function show($fild, $value){
	global $tablename;

	$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." WHERE ".$fild." = ".$value;
	
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	// Выводим результаты в html
	totable($result);
	
	mysql_free_result($result);
}
//======================================================================
function totable($result){
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr class='table_row' >\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
}

//======================================================================
function show2filds($fild1, $value1, $fild2, $value2){
	global $tablename;
	
		$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." WHERE ".$fild1." = ".$value1." AND ".$fild2." = ".$value2;
	
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	totable($result);
	mysql_free_result($result);
}

//======================================================================
function show3filds($fild1, $value1, $fild2, $value2, $fild3, $value3){
	global $tablename;
	
	$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." WHERE ".$fild1." = ".$value1." AND ".$fild2." = ".$value2." AND ".$fild3."  ".$value3; 
	//value3 должно содержать = или IN ...
	
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	totable($result);
	mysql_free_result($result);
}

//======================================================================
function search($fild, $value){
	global $tablename;

	$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." WHERE ".$fild." LIKE '%".$value."%'";
	
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	totable($result);
	mysql_free_result($result);
}

//======================================================================
function change($code, $fild, $value){
	global $tablename;
		
	$date_fild;
	$date_now = date ("Y-m-d H:i:s"); //, $phptime
	
	if ($value == "'SORTED'"){
		$date_fild = "`sorting_time`";
	}
	if ($value == "'FOLDED'"){
		$date_fild = "`folding_time`";
	}
	if ($value == "'PACKED'"){
		$date_fild = "`packing_time`";
	}
	if ($value == "'SEND'"){
		$date_fild = "`send_time`";
	}
	if ($value == "'RETURNED'"){
		$date_fild = "`return_time`";
	}
	if ($fild == "`remark`"){
		$date_fild = "`remark_on_time`";
		if ( $value == "NULL"){
			$date_fild = "`remark_off_time`";
		}
	}
	if ($fild == "`remark_off_time`"){
		$date_fild = "`remark_on_time`";
	}
	
	if (count($date_fild) > 0){
		$date_fild = " , ".$date_fild." = '".$date_now."'";
	}
	//echo $date_fild;
	
// Выполняем SQL-запрос
	$query = "UPDATE ".$tablename."
		SET ".$fild." = ".$value."  
		".$date_fild." WHERE `code` = ".$code;

	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

	if (!empty($result)){
		$action = mysql_real_escape_string($fild." => ".$value);
		if ($fild == "status"){
			$action = mysql_real_escape_string($value);
		}
		if ($fild == "`remark`"){
			$action = "Замечание: ".mysql_real_escape_string($value);
			if ( $value == "NULL"){
				$action = "Замечание снято";
			}
		}
		
		if (($fild == "packing_confirm")||($fild == "`remark_confirm`")||($fild == "`remark_off_time`")){
			$action = "NULL";
		}
		if (($value == NULL)||($fild == "`remark_off_time`")){
			$action = "NULL";
		}
		
		if ($action != "NULL"){
			add_history($code, $action);
		}
	}
	
	
	
	
	mysql_free_result($result);
}
//======================================================================
function count_base(){
	global $tablename;
	
	$query = "SELECT COUNT(*) FROM ".$tablename;
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	echo mysql_result($result, 0);
	
	mysql_free_result($result);
}

//======================================================================
function read_fild($code, $fild){
	global $tablename;

	$query = "SELECT ".$fild." FROM ".$tablename." WHERE `code` = ".$code;
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	echo mysql_result($result, 0);

	mysql_free_result($result);
}

//======================================================================
function select_distinct($table, $fild){
	global $tablename;
	
	if (!empty($table)){
		$tablename = $table;
	}
	
	$query = "SELECT DISTINCT ".$fild." FROM ".$tablename;
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        echo $row[0]."***";  
    }
  
	mysql_free_result($result);
}

//======================================================================
function select_distinct2f($distfild, $fild2, $value){
	global $tablename;
	
	$query = "SELECT DISTINCT ".$distfild." FROM ".$tablename." WHERE `".$fild2."` = ".$value;
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        echo $row[0]."***";  
    }
  
	mysql_free_result($result);
}

//======================================================================
function add_history($code, $action){
	$date_now = date ("Y-m-d H:i:s"); //, $phptime

	$query = "INSERT INTO history
		(`code`, `date`, `action`)
		VALUES(
			'".$code."',
			'".$date_now."',
			'".$action."'
		)";
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	
	mysql_free_result($result);
}
//======================================================================
function insertuser($mail, $role, $customer){
	$date_now = date ("Y-m-d H:i:s");
	
	$query = "SELECT `date` FROM `acceptedmail` WHERE `email` = '".$mail."'";
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

	if (mysql_num_rows($result) !== 0){
		echo 'адрес '.$mail.' уже используется с ';
		echo mysql_result($result, 0);
		mysql_free_result($result);
	}else{
		$mail = mysql_real_escape_string($mail);
		$role = intval($role);
		$query= "INSERT INTO `acceptedmail` (`email`, `role`, `customer_id`, `date`) VALUES(
			'".$mail."', 
			".$role.", 
			'".$customer."', 
			'".$date_now."' 
			)";
		
		
		if (mysql_query("$query")) {
			echo "Новый пользователь добавлен \n";
		} else {
			echo "Error in creating table: ". mysql_error ();
		}	
	}	
}

function allusers(){
	$query = "SELECT `email` FROM `acceptedmail` ORDER BY `id`";
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		echo $row[0]."***";  
    }
	mysql_free_result($result);

}

function delete_user($user){
	$user = mysql_real_escape_string($user);
	$query = "DELETE FROM `acceptedmail` WHERE `email` = '".$user."'";
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	
	$query = "DELETE FROM `users` WHERE `email` = '".$user."'";
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	
	echo "Пользователь с адресом \n".$user."\n удален, и больше не сможет заходить на сайт.";
	
	mysql_free_result($result);
}

function add_remark($remark){
$query= "INSERT INTO `remarks` (`remark`) VALUES('".$remark."')";
			
		if (mysql_query("$query")) {
			echo "Новое замечание добавлено\n";
		} else {
			echo "Error in creating table: ". mysql_error ();
		}	
}

function show_remarks(){
	$query = "SELECT `remark` FROM `remarks` ORDER BY `id`";
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		echo $row[0]."***";  
    }
	mysql_free_result($result);

}

function delete_remark($remtext){
	$query = "DELETE FROM `remarks` WHERE `remark` = '".$remtext."'";
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	mysql_free_result($result);
}
function reset_customer_fild($customer, $fild, $value){
	global $tablename;
	
	$query = "UPDATE ".$tablename."
	SET `".$fild."` = ".$value." WHERE `customer_id` = ".$customer;

	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	echo mysql_affected_rows();
	mysql_free_result($result);
}



?>




