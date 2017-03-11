<?php
//Исходные параметры
$servername='a3dfoto.mysql.ukraine.com.ua';
$dbusername='a3dfoto_root';
$dbpassword='dupl1';
$dbname='a3dfoto_db'; 
$tablename='history';

//'max_input_vars' in php.ini fle mast be 10000 !
date_default_timezone_set('Europe/Kiev');

	connectdb();
	
$base = array();
switch (true) {
	case (!empty($_GET["code"])):
		$base = get_base($_GET["code"]);	
		break;
	}
	
	
	


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
	$objPHPExcel->getActiveSheet()->getStyle('A2:S2')->getAlignment()->setWrapText(true);
	
	//$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		
	$ran = array ('A','B','C','D'); 
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
 
	$objPHPExcel->getActiveSheet()->getStyle('A2:D2')->applyFromArray($styleArray);
	
	/*$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('A1', 'Привет')
	->setCellValue('B1', 'Мир!');*/
	
	//Создаем шапку таблички данных
	$active_sheet->setCellValue('A2','#');
	$active_sheet->setCellValue('B2','  Код  ');
	$active_sheet->setCellValue('C2','Дата');
	$active_sheet->setCellValue('D2','Действие');
	 
	//В цикле проходимся по элементам массива и выводим все в соответствующие ячейки
	$row_start = 3;
	$i = 0;
	foreach($base as $item) {
		$row_next = $row_start + $i;
		 
		$active_sheet->setCellValue('A'.$row_next,$item['id']);
		$active_sheet->setCellValue('B'.$row_next,$item['code']);
		$active_sheet->setCellValue('C'.$row_next,$item['date']);
		$active_sheet->setCellValue('D'.$row_next,$item['action']);
		 
		$i++;
	}	

	
	
	header("Content-Type:application/vnd.ms-excel");
	//header("Content-Disposition:attachment;filename=simple");
	header("Content-Disposition:attachment;filename=history_of_item_".$_GET["code"]);
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
function get_base($code) {
	global $tablename;
	
	$query = "SELECT * FROM ".$tablename." WHERE `code` = ".$code;
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




