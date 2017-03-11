<?php
//Исходные параметры
$servername='a3dfoto.mysql.ukraine.com.ua';
$dbusername='a3dfoto_root';
$dbpassword='dupl1';
$dbname='a3dfoto_db'; 
$tablename='test2';

//'max_input_vars' in php.ini fle mast be 10000 !
date_default_timezone_set('Europe/Kiev');

//настройки вывода в таблицу
$GLOBALS['viewfilds'] = "`id`,	`code`,	`wearer_name`,	`status`, `send_time`, `customer_receive_time`, `remark`";
$GLOBALS['customer_number'] = $_POST["customer_number"];
//
connectdb();

switch (true) {
	case (!empty($_POST["show"])):
		show($_POST["show"], $_POST["val"]);
		break;
	case (!empty($_POST["show_short"])):
		show_short($_POST["show_short"], $_POST["val"]);
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
	case (!empty($_POST["show2filds"])):
		show2filds($_POST["show2filds"], $_POST["value1"], $_POST["fild2"], $_POST["value2"]);
		break;
	case (!empty($_POST["show3filds"])):
		show3filds($_POST["show3filds"], $_POST["value1"], $_POST["fild2"], $_POST["value2"], $_POST["fild3"], $_POST["value3"]);
		break;
	
	case (!empty($_POST["period_to_screen"])):
		period_to_screen($_POST["period_to_screen"], $_POST["to"], $_POST["customer"]);
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
function show($fild, $value){
	global $tablename;

	$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." WHERE ".$fild." = ".$value;
	
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	// Выводим результаты в html
	totable($result);
	
	mysql_free_result($result);
}
//======================================================================
function show_short($fild, $value){
	global $tablename;

	$query = "SELECT `id`,	`code`,	`wearer_name` FROM ".$tablename." WHERE ".$fild." = ".$value;
	
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	// Выводим результаты в html
	totable($result);
	
	mysql_free_result($result);
}
//======================================================================
function totable($result){
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		if ($line[status] !== "RECEIVED"){
			$line[status] = "SEND";
		}
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
	
	$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." WHERE ".$fild1." = ".$value1." AND ".$fild2."= ".$value2." AND ".$fild3."  ".$value3; 
	//value3 должно содержать = или IN ...
	
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	totable($result);
	mysql_free_result($result);
}
//======================================================================
function period_to_screen($datefrom, $dateto, $customer){
	global $tablename;
	
	$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." 
			WHERE `customer_id` = ".$customer." 
			AND ( ( `status` = 'SEND' AND `send_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			OR (`status` = 'RECEIVED' AND `customer_receive_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			OR (`status` = 'SORTED' AND `sorting_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			OR (`status` = 'FOLDED' AND `folding_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			OR (`status` = 'PACKED' AND `packing_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			OR (`status` = 'RETURNED' AND `return_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			)";
	
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	totable($result);
	mysql_free_result($result);
}

//======================================================================
function search($fild, $value){
	global $tablename;

	$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." WHERE ".$fild." LIKE '%".$value."%' 
	AND `customer_id` = ".$GLOBALS['customer_number'];
	//AND `status` IN ('SEND', 'RECEIVED')";
	
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	totable($result);
	mysql_free_result($result);
}

//======================================================================
function change($code, $fild, $value){
	global $tablename;
		
	$date_fild;
	$date_now = date ("Y-m-d H:i:s"); //, $phptime
	
	if ($value == "'SEND'"){
		$date_fild = "`send_time`";
	}
	if ($value == "'RECEIVED'"){
		$date_fild = "`customer_receive_time`";
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


?>




