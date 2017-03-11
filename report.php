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

connectdb();

switch (true) {
	case (!empty($_GET["dayreport"])):
		$base = get_report_ofday($_GET["customer"], $_GET["dayreport"], $_GET["to"]);
	break;
	
	default:
	$base = get_base();
	
}	
//exit;
	require_once 'Classes/PHPExcel.php';

	$objPHPExcel = new PHPExcel();
	
$locale = 'ru';
$validLocale = PHPExcel_Settings::setLocale($locale);


	
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
	$active_sheet->getPageSetup()
	->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
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
	$objPHPExcel->getActiveSheet()->getStyle('A6:S6')->getAlignment()->setWrapText(true);
	
	//$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
	
	$ran = array ('A','C','F','E'); 
	foreach($ran as $columnID) {
		$objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
	}
	
	
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
 
	$objPHPExcel->getActiveSheet()->getStyle('A6:S6')->applyFromArray($styleArray);
	
	/*$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('A1', 'Привет')
	->setCellValue('B1', 'Мир!');*/
	
	//Создаем шапку таблички данных
	$active_sheet->setCellValue('A6','#');
	$active_sheet->setCellValue('B6','Код');
	$active_sheet->setCellValue('C6','Модель');
	$active_sheet->setCellValue('D6','Код владельца');
	$active_sheet->setCellValue('E6','Имя владельца');
	$active_sheet->setCellValue('F6','Статус');
	$active_sheet->setCellValue('G6','Время отправки');
	$active_sheet->setCellValue('H6','Время сортировки');
	$active_sheet->setCellValue('I6','Время складывания');
	$active_sheet->setCellValue('J6','Время упаковки');
	$active_sheet->setCellValue('K6','Замечание');
	$active_sheet->setCellValue('L6','Время замечания');
	$active_sheet->setCellValue('M6','Снято замечание');
	$active_sheet->setCellValue('N6','Отдел');
	$active_sheet->setCellValue('O6','Номер клиента');
	$active_sheet->setCellValue('P6','Имя клиента');
	$active_sheet->setCellValue('Q6','Замечание принято');
	$active_sheet->setCellValue('R6','Ручное подтверждение упаковки');
	$active_sheet->setCellValue('S6','Время возврата');
	
	 
	//В цикле проходимся по элементам массива и выводим все в соответствующие ячейки
	$row_start = 7;
	$i = 0;
	$row_next = 7;
	foreach($base as $item) {
		$row_next = $row_start + $i;
		 
		$active_sheet->setCellValue('A'.$row_next,$item['id']);
		$active_sheet->setCellValue('B'.$row_next,$item['code']);
		$active_sheet->setCellValue('C'.$row_next,$item['product_id']);
		$active_sheet->setCellValue('D'.$row_next,$item['wearer_id']);
		$active_sheet->setCellValue('E'.$row_next,$item['wearer_name']);
		$active_sheet->setCellValue('F'.$row_next,$item['status']);
		$active_sheet->setCellValue('G'.$row_next,$item['send_time']);
		$active_sheet->setCellValue('H'.$row_next,$item['sorting_time']);
		$active_sheet->setCellValue('I'.$row_next,$item['folding_time']);
		$active_sheet->setCellValue('J'.$row_next,$item['packing_time']);
		$active_sheet->setCellValue('K'.$row_next,$item['remark']);
		$active_sheet->setCellValue('L'.$row_next,$item['remark_on_time']);
		$active_sheet->setCellValue('M'.$row_next,$item['remark_off_time']);
		$active_sheet->setCellValue('N'.$row_next,$item['department']);
		$active_sheet->setCellValue('O'.$row_next,$item['customer_id']);
		$active_sheet->setCellValue('P'.$row_next,$item['customer_name']);
		$active_sheet->setCellValue('Q'.$row_next,$item['remark_confirm']);
		$active_sheet->setCellValue('R'.$row_next,$item['packing_confirm']);
		$active_sheet->setCellValue('S'.$row_next,$item['return_time']);
		 
		$i++;
	}	
	
	$row_last = 1;
	$active_sheet->setCellValue('B'.$row_last,"Дата:");
	$active_sheet->setCellValue('C'.$row_last, $time_now);
	$active_sheet->setCellValue('E'.$row_last,"Всего:");
	$active_sheet->setCellValue('F'.$row_last++, $row_next - $row_start);
	$active_sheet->setCellValue('E'.$row_last,"Прислано:");
	$active_sheet->setCellValue('F'.$row_last++, "=COUNTIF(F".$row_start.":F".$row_next.", \"SEND\")");
	$active_sheet->setCellValue('E'.$row_last,"Отсортировано:");
	$active_sheet->setCellValue('F'.$row_last++, "=COUNTIF(F".$row_start.":F".$row_next.", \"SORTED\")");
	$active_sheet->setCellValue('E'.$row_last,"Сложено:");
	$active_sheet->setCellValue('F'.$row_last++, "=COUNTIF(F".$row_start.":F".$row_next.", \"FOLDED\")");
	$active_sheet->setCellValue('E'.$row_last,"Упаковано:");
	$active_sheet->setCellValue('F'.$row_last++, "=COUNTIF(F".$row_start.":F".$row_next.", \"PACKED\")");
	
	
	header("Content-Type:application/vnd.ms-excel");
	if (!empty($_GET["dayreport"])) {
		header("Content-Disposition:attachment;filename=".$_GET["customer"]."_report_period_from_".$_GET["dayreport"]."_to_".$_GET["to"]);
	}else{
		header("Content-Disposition:attachment;filename=report_all_".$date_now);
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
	
	$query = "SELECT * FROM ".$tablename;
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
//================================================================
function get_report_ofday($customer, $datefrom, $dateto) {
	global $tablename;
	$base = array();
				
	$query = "SELECT * FROM ".$tablename." 
	WHERE `customer_id` = ".$customer." 
	AND ( ( `status` = 'SEND' AND `send_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
	OR (`status` = 'RECEIVED' AND `customer_receive_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
	OR (`status` = 'SORTED' AND `sorting_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
	OR (`status` = 'FOLDED' AND `folding_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
	OR (`status` = 'PACKED' AND `packing_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
	OR (`status` = 'RETURNED' AND `return_time` BETWEEN STR_TO_DATE('".$datefrom." 00:00:00', '%Y-%m-%d %H:%i:%s') AND STR_TO_DATE('".$dateto." 23:59:59', '%Y-%m-%d %H:%i:%s') )
	)";
	
	$result = mysql_query($query);
	if(!$result) { exit(mysql_error());	}
	
	for($i = 0;$i < mysql_num_rows($result);$i++) {
		$base[] = mysql_fetch_assoc($result);
	}
	mysql_free_result($result);
	return $base;       
}


?>




