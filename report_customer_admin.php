<?php
//Исходные параметры
$servername='a3dfoto.mysql.ukraine.com.ua';
$dbusername='a3dfoto_root';
$dbpassword='dupl1';
$dbname='a3dfoto_db'; 
$tablename='test2';

//'max_input_vars' in php.ini fle mast be 10000 !
date_default_timezone_set('Europe/Kiev');
$date_now = date ("Y_m_d"); 
$time_now = date ("Y-m-d H:i:s"); 

$customer = $_GET['customer'];
$GLOBALS['viewfilds'] = "`id`,	`code`,	`wearer_name`,	`status`, `send_time`, `customer_receive_time`, `remark`";

	connectdb();
	$base = get_base();
	
	require_once 'Classes/PHPExcel.php';

	$objPHPExcel = new PHPExcel();
	
	/*$objPHPExcel->getProperties()->setCreator("user")
    ->setLastModifiedBy("username")
    ->setTitle("Title")
    ->setSubject("Название.")
    ->setDescription("Описание")
    ->setKeywords("php, all results")
    ->setCategory("some category");*/

	//$objPHPExcel->createSheet();
	$objPHPExcel->setActiveSheetIndex(0);
	$active_sheet = $objPHPExcel->getActiveSheet();
	

	//Ориентация страницы и  размер листа
//	$active_sheet->getPageSetup()
//	->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	
	$active_sheet->getPageSetup()
	->SetPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
	//Поля документа       
	$active_sheet->getPageMargins()->setTop(1);
	$active_sheet->getPageMargins()->setRight(0.75);
	$active_sheet->getPageMargins()->setLeft(0.75);
	$active_sheet->getPageMargins()->setBottom(1);
	//Название листа
	$active_sheet->setTitle("База ".$tablename);  
	//Шапка и футер
	$active_sheet->getHeaderFooter()->setOddHeader("&CЛиндстрем");
	$active_sheet->getHeaderFooter()->setOddFooter('&L&B'.$active_sheet->getTitle().'&RСтраница &P из &N');
	//Настройки шрифта
	$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
	$objPHPExcel->getDefaultStyle()->getFont()->setSize(8);
	$objPHPExcel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	
	$objPHPExcel->getActiveSheet()->getDefaultStyle()->getAlignment()->setWrapText(true);
	$objPHPExcel->getActiveSheet()->getStyle('A2:S2')->getAlignment()->setWrapText(true);
	
	//$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
	
	$styleArray = array(
		'borders' => array(
			'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => 'FFFF00'),
		  ),
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb'=>'CAFF70'),
		),
		'font' => array(
			'bold' => true,
			'size' => 8,
		),
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		),
	);
	
		$objPHPExcel->getActiveSheet()->getStyle('A2:G2')->applyFromArray($styleArray);
		
	/*$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('A1', 'Привет')
	->setCellValue('B1', 'Мир!');*/
	
	//Создаем шапку таблички данных
	$active_sheet->setCellValue('A2','#    ');
	$active_sheet->setCellValue('B2','Код   ');
	$active_sheet->setCellValue('C2','Имя владельца');
	$active_sheet->setCellValue('D2','Статус');
	$active_sheet->setCellValue('E2','Время отправки');
	$active_sheet->setCellValue('F2','Время доставки');
	$active_sheet->setCellValue('G2','Замечание');

	
	//В цикле проходимся по элементам массива и выводим все в соответствующие ячейки
	$row_start = 3;
	$i = 0;
	foreach($base as $item) {
		if ($item[status] !== "RECEIVED"){
			$item[status] = "SEND";
		}
		$row_next = $row_start + $i;
		 
		$active_sheet->setCellValue('A'.$row_next,$item['id']);
		$active_sheet->setCellValue('B'.$row_next,$item['code']);
		$active_sheet->setCellValue('C'.$row_next,$item['wearer_name']);
		$active_sheet->setCellValue('D'.$row_next,$item['status']);
		$active_sheet->setCellValue('E'.$row_next,$item['send_time']);
		$active_sheet->setCellValue('F'.$row_next,$item['customer_receive_time']);
		$active_sheet->setCellValue('G'.$row_next,$item['remark']);
	
		
		$i++;
	}	
	
	$ran = array ('A','B','C','E','F'); 
	foreach($ran as $columnID) {
		$objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
	}
	
	
	header("Content-Type:application/vnd.ms-excel");
	header("Content-Disposition:attachment;filename=simple");
	if (empty($rem)){
		header("Content-Disposition:attachment;filename=".$customer."_report_all_".$date_now);
	}else{
		header("Content-Disposition:attachment;filename=".$customer."_report_remarks_".$date_now);
	}
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	
	ob_end_clean();
	$objWriter->save('php://output');
	
	exit();


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
//================================================================
function get_base() {
	global $tablename;
	global $customer;
	
	switch (true) {
		case (!empty($_GET["send"])):
			$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." WHERE `customer_id` = ".$customer." 
			AND `send_time` >= date_sub(now(), INTERVAL 24 HOUR)";
		break;
		case (!empty($_GET["received"])):
			$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." WHERE `customer_id` = ".$customer." 
			AND `status` = 'RECEIVED' 
			AND `customer_receive_time` >= date_sub(now(), INTERVAL 24 HOUR)";
		break; 
		case (!empty($_GET["dayreport"])):
			$datefrom = $_GET["dayreport"];
			$dateto = $_GET["to"];
			
			$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." 
			WHERE `customer_id` = ".$_GET['customer']." 
			AND ( ( `status` = 'SEND' AND `send_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			OR (`status` = 'RECEIVED' AND `customer_receive_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			OR (`status` = 'SORTED' AND `sorting_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			OR (`status` = 'FOLDED' AND `folding_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			OR (`status` = 'PACKED' AND `packing_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			OR (`status` = 'RETURNED' AND `return_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
			)";
		break; 
		case (!empty($_GET["all"])):
			$query = "SELECT ".$GLOBALS['viewfilds']." FROM ".$tablename." 
			WHERE `customer_id` = ".$_GET['customer'];
		break; 
	}
	
	$result = mysql_query($query);
	if(!$result) {
		exit(mysql_error());
	}
	 
	$base = array();
	for($i = 0;$i < mysql_num_rows($result);$i++) {
	$base[] = mysql_fetch_assoc($result);
		}
	
	mysql_free_result($result);
	return $base;       
}


?>




