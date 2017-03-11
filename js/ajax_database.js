function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    // Only process image files.
	var f = files[0];
	if (f.type.match('text.*')) {
		
		var reader = new FileReader();
		reader.onload = function(e) {
			var strArray = e.target.result.split("\n");
			//document.getElementById('str').innerHTML = e.target.result;
						
			strArray[1] = strArray[1].replace("Customer", "").trim();
			var customer_number = parseInt(strArray[1].slice(0, strArray[1].indexOf(" ")),  10);
			var customer_name = strArray[1].slice(strArray[1].indexOf(" "));
			customer_name = customer_name.replace(/[^a-zа-я0-9ё їіє.-]/gi, "");
			
			var dbase = [];
			var k = 0;
			var arrLength = strArray.length;
			for (var i = 2; i < arrLength; i++) {
				//alert("i= " + i + "\n" + strArray[i]);
				if (strArray[i].indexOf("Items") != -1){
					continue;
				}			 
				if (strArray[i].indexOf("Code ") != -1){
					continue;
				}
				if (strArray[i].indexOf("Wearer total ") != -1){
					continue;
				}
				if (strArray[i].indexOf("Date ") != -1){
					continue;
				}
				if (strArray[i].indexOf("Locker ") != -1){
					continue;
				}			
				
				if (strArray[i].indexOf("Wearer   ") != -1){
					strArray[i] = strArray[i].replace("Wearer ", "").trim();
					var wearer_number = parseInt(strArray[i].slice(0, strArray[i].indexOf(" ")),  10);
					
					if (strArray[i].indexOf("Department ") != -1){
						var wearer_name = strArray[i].slice(strArray[i].indexOf(" "), strArray[i].indexOf("Department")).trim();
						var department = strArray[i].slice(strArray[i].indexOf("Department")+11).trim();
					} else {
						var wearer_name = strArray[i].slice(strArray[i].indexOf(" ")).trim();
						var department = strArray[i+1].slice(strArray[i+1].indexOf("Department")+11).trim();
					}
					//убрать спецсимволы справка http://learn.javascript.ru/regexp-character-sets-and-ranges
					wearer_name = wearer_name.replace(/[^a-zа-я0-9ё їіє.-]/gi, "");
					department = department.replace(/[^a-zа-я0-9ё їіє.-]/gi, "");
					
					var n = 3;
					do{
						var tmp = wearer_name.slice(0, wearer_name.indexOf(" ")).trim();
						var tmp2 = wearer_name.replace(tmp, "").trim();
						if (tmp2.indexOf(tmp) != -1){
							wearer_name = tmp2;
						}
						n = n - 1;
					}while(n > 0)				
					
				}
				
				if (strArray[i].trim().slice(0,4).indexOf("0000") != -1){
					strArray[i] = strArray[i].trim();
					var code = parseInt( strArray[i].slice(0,17).trim(), 10);
					strArray[i] = strArray[i].slice(17).trim();
					var product = strArray[i].slice(0, strArray[i].indexOf(" ")).trim();
					dbase[k] = [code, product, wearer_number, wearer_name, department, customer_number, customer_name];
					k = k + 1;
				}
			}

			//download dbase to server
			$.post(
				"/database.php", 
				{
				updatedb: dbase
				},
				onSuccess
			);
			
			function onSuccess(data){
				//$("#list").text(data);
				alert(data);
			}
		}
		// Read the file as text.
		reader.readAsText(f, 'CP1251');
	}

}
//========================================================
function create_database(){
	$.post( "database.php", { create_db: "1"})
	.success(function( data ) {
		alert(data);
	});
}
//========================================================
function showline(fild, value){
	$.post(
		"/database.php", 
		{
		show: fild,
		val: value
		},
		onReceive
	);
	function onReceive(data){
		//var inner = document.getElementById('table').innerHTML;
		//var innerdata = data + inner;
		document.getElementById('table').innerHTML = data + document.getElementById('table').innerHTML;
		
		var last_customer = $('#table tbody').children().children(':nth-child(15)').text().trim();
		var last_dep = $('#table tbody').children().children(':nth-child(14)').text().trim();
		
		if ($('#table tbody').length == 1){
			$('#drop_cust .dropopt').remove();
			$('#drop_dep .dropopt').remove();
			$('#drop_cust').append("<option class='dropopt'>"+ last_customer +"</option>");			
			$('#drop_dep').append("<option class='dropopt'>"+ last_dep +"</option>");			
			
		}else{
			if (document.getElementById('drop_dep').style.display !== 'none'){
				if($('#drop_dep').val().trim() !== last_dep){
					alert("Предупреждение: единица из отдела -" + last_dep)
				}
			}
		}
	
	}
}
//========================================================
function changeline(code, fild, value){
	$.post(
		"/database.php", 
		{
		change: code, 
		fild: fild,
		val: value
		},
		onReceive
	);
	function onReceive(data){
		if ((value == "'SORTED'")||(value == "'FOLDED'")||(value == "'PACKED'")||(value == "'RETURNED'")||(value == "'SEND'")){
			showline('code', code);
		}
		if ($("#frame2").css('display') !== 'none'){
			unpacked_in_dep();		
		}

	}
}

//========================================================
function sorting(sort_val){
	sort_val = sort_val.replace(/[^0-9]/gi, "");
	
	if (sort_val.length >= 8){
		change_status_show (sort_val, "SORTED");
		$("#inp-sorting").select();
	}
}

//========================================================
function folding(fold_val){
	fold_val = fold_val.replace(/[^0-9]/gi, "");
	
	if (fold_val.length >= 8){
		change_status_show (fold_val, "FOLDED");
		$("#inp-folding").select();
	}
}

//========================================================
function packing(pack_val){
	pack_val = pack_val.replace(/[^0-9]/gi, "");
	
	if (pack_val.length >= 8){
		change_status_show (pack_val, "PACKED");
		$("#inp-packing").select();
	}
}

//========================================================
function change_status_show (code, status_value){

		$.post( "database.php", { read_code: code, fild: '`status`'})
		.success(function( data ) {
			var last_status = data.trim();
								
			if (last_status == status_value){
				if (confirm('Код повторяется на другой единице. \n Для добавления замечания нажмите "OK".')){
					if (confirm('Добавить замечание "Код повторяется на другой единице" ???')){

						$.post( "database.php", { read_code: code, fild: '`remark`'})
						.success(function( data ) {
							var remark_double = data.trim() + " + Код повторяется на другой единице. Обнаружено при операции: " + status_value;
							$.post( "database.php", { change: code, fild: "`remark`", val: "'" + remark_double + "'"})
							.success(function( data ) {
								$.post( "database.php", { change: code, fild: "`remark_off_time`", val: "NULL"})
								.success(function( data ) {
										showline('code', code);
								});
							})
						})
					
					}
				}
			}else if (last_status !== 'RETURNED'){
				$.post( "database.php", { read_code: code, fild: '`remark`'})
				.success(function( data ) {
					var remark_text = data.trim();
					
					if (remark_text == ""){
						changeline(code, 'status', "'" + status_value + "'");
						changeline(code, 'packing_confirm', "NULL");
					}else{
						if (confirm('Замечание: \n'+ remark_text +'\n Если проблема устранена, нажмите "OK".')){
			
							$.post( "database.php", { change: code, fild: "`remark_confirm`", val: "1"})
							.success(function( data ) {
								changeline(code, 'status', "'" + status_value + "'");
								changeline(code, 'packing_confirm', "NULL");
							
							});
						}
					}
				});
			}
			if ((last_status == 'RETURNED')&& (status_value !== 'RETURNED')){
				$.post( "database.php", { read_code: code, fild: '`return_time`'})
				.success(function( data ) {
					data = data.trim();
					if (confirm('Эта единица была возвращена '+ data +'\n Изменить статус на - '+ status_value +'???')){
						changeline(code, 'status', "'" + status_value + "'");
						changeline(code, 'return_time', "NULL");
						changeline(code, 'packing_confirm', "NULL");
					}
				});	
			}
			if ((last_status == 'RETURNED')&& (status_value == 'RETURNED')){
				$.post( "database.php", { read_code: code, fild: '`return_time`'})
				.success(function( data ) {
					data = data.trim();
					alert('Эта единица уже была возвращена '+ data);
				});	
			}
			
			
			
		});
}

//========================================================
function packing_done(){
	var ind = document.getElementById('drop_dep').selectedIndex;
	var dep = document.getElementById('drop_dep').children[ind].text;
	ind = document.getElementById('drop_cust').selectedIndex;
	var cust = document.getElementById('drop_cust').children[ind].text;
	$.post( "database.php", { 
		show3filds: "`department`", value1: "'"+ dep +"'", 
		fild2: "`customer_id`",	value2: "'"+ cust +"'", 
		fild3: "`status`", value3: " IN ('SORTED', 'FOLDED', 'new', 'SEND')"})
	.success(function( data ) {
	
		$("#frame2").css({
			'display' : "block"	
		});
		$("#frame1").css({
			'max-height' : '40%'	
		});
		
		var inppacking = $("#inp-packing"); 
		inppacking.focus();
		inppacking.select();
		$("#frame2 tbody").remove();
		
		document.getElementById('table2').innerHTML = (data + document.getElementById('table2').innerHTML);
		var unpacked_count = $("#table2 tr").length - 1;
		$("#frame2 > p").text("Для отдела "+ dep +" осталось неупакованных: " + unpacked_count)
	
		//перебор с подтверждением
		var i = 1;
		$( "#dialog-confirm" ).dialog({
			autoOpen: false,
			modal: true,
			title: 'Не упаковано:',
			width: 'auto',
			buttons: {
				"Да, проблема решена.": function() {
					$( this ).dialog( "close" );
					$.post( "database.php", { change: cod, fild: "`packing_confirm`", val: "1"})
					.success(function( data ) {
						//
					if (i <= unpacked_count){
							$("#dialog-confirm").dialog("open");
						}
					});
				},
				" Нет ": function() {
					$( this ).dialog( "close" );
					var ii=i-1;
					$("#table2 tbody").children(':nth-child('+ ii +')').css({'background-color': 'white'});
					//
					if (i <= unpacked_count){
						$("#dialog-confirm").dialog("open");
					}				
				}
			}
		});
		
		$( "#dialog-confirm" ).dialog({
			open: function(event,ui){
				var j = i;
				while(j <= unpacked_count){
					var pack_confirm = $("#table2 tbody").children(':nth-child('+ j +')').children(':nth-child(18)').text();
					if (pack_confirm == 1){
						j += 1;
					}else{
						i = j;
						break;
					}
				}
				
				if (i > unpacked_count){
					//return;
					$("#dialog-confirm").dialog("close");
				}
				
				cod = $("#table2 tbody").children(':nth-child('+ i +')').children(':nth-child(2)').text();
				var model = $("#table2 tbody").children(':nth-child('+ i +')').children(':nth-child(3)').text();
				var id = $("#table2 tbody").children(':nth-child('+ i +')').children(':nth-child(4)').text();
				var name = $("#table2 tbody").children(':nth-child('+ i +')').children(':nth-child(5)').text();
				$( "#dialog-confirm span" ).text(cod +' - ' + model +' - ' + id +' - '  + name );
				$( "#dialog-confirm p" ).text('Если проблема устранена, нажмите "Да".');
				$("#table2 tbody").children(':nth-child('+ i +')').get(0).scrollIntoView();
				$("#table2 tbody").children(':nth-child('+ i +')').css({'background-color': '#00FA9A'});
				i += 1;
			}
		});
		
		$("#dialog-confirm").dialog("open");
	});
}
//========================================================
function unpacked_in_dep(){
	var ind = document.getElementById('drop_dep').selectedIndex;
	var dep = document.getElementById('drop_dep').children[ind].text;
	ind = document.getElementById('drop_cust').selectedIndex;
	var cust = document.getElementById('drop_cust').children[ind].text;

	$.post( "database.php", { 
		show3filds: "`department`", value1: "'"+ dep +"'", 
		fild2: "`customer_id`",	value2: "'"+ cust +"'", 
		fild3: "`status`", value3: " IN ('SORTED', 'FOLDED', 'new')"})
	.success(function( data ) {
	
		$("#frame2").css({
			'display' : "block"	
		});
		$("#frame1").css({
			'max-height' : '40%'	
		});
		
		var inppacking = $("#inp-packing"); 
		inppacking.focus();
		inppacking.select();
		$("#frame2 tbody").remove();
		
		document.getElementById('table2').innerHTML = (data + document.getElementById('table2').innerHTML);
		var unpacked_count = $("#table2 tr").length - 1;
		$("#frame2 > p").text("Для отдела "+ dep +" осталось неупакованных: " + unpacked_count)
	});
}
//========================================================
function customer_change(customer){
	$.post( "database.php", { distinct_infild2f: "`department`", wherefild: "customer_id", value: customer}) 
		.success(function( data ) {
			$("#drop_dep").show();
			$('#drop_dep .dropopt').remove();
			var arr = data.split("***");
			var arrLength = arr.length-1;
			for (var i = 0; i < arrLength; i++) {
				var val = arr[i].trim();
				$('#drop_dep').append("<option class='dropopt' value="+ val +">"+ val +"</option>");
			}
		});
}





//========================================================
function show_all(){
	$.post( "database.php", { show: "''", val: "''"})
		.success(function( data ) {
			$("#frame1 tbody").remove();
			
			document.getElementById('table').innerHTML = (data + document.getElementById('table').innerHTML);
			var amount_base = $("#table tr").length - 1;
			$("#amount_b").html("Всего строк в базе " + amount_base)
			
		});

}
function clear_all(){
	$("#table tbody").remove();
}

//=========================================================
function return_input_show(){
	var inpreturn = $("#inp-return");
	inpreturn.show();
	inpreturn.focus();
	inpreturn.select();
}
//=========================================================
function ret_it(return_val){
	
	return_val = return_val.replace(/[^0-9]/gi, "");
	
	if (return_val.length >= 8){
		$("#inp-return").select();
		change_status_show (return_val, "RETURNED");
		
	}

}


//=========================================================

function close_unpacked(){
	$("#frame2 tbody").remove();
	$("#frame2").css({
		'display' : "none"	
	});
	$("#frame1").css({
		'max-height' : 'inherit'	
	});
}

function sysservice(){
	$("#sysform > input").show();
}

//===============================================================
function searchbox(e, elem){
	if ($(elem).width() < 50){
		$(elem).width(50);
	}
	if (e.keyCode == 13) {
        var fild = ""
		var value = elem.value.trim();
		var num = $(elem).parent().index();
		switch (num) {
			case 0:
				fild = 'id'
				break
			case 1:
				fild = 'code'
				break
			case 2:
				fild = 'product_id'
				break
			case 3:
				fild = 'wearer_id'
				break
			case 4:
				fild = 'wearer_name'
				break
			case 5:
				fild = 'status'
				break
			case 6:
				fild = 'send_time'
				break
			case 7:
				fild = 'sorting_time'
				break
			case 8:
				fild = 'folding_time'
				break
			case 9:
				fild = 'packing_time'
				break
			case 10:
				fild = 'remark'
				break
			case 11:
				fild = 'remark_on_time'
				break
			case 12:
				fild = 'remark_off_time'
				break
			case 13:
				fild = 'department'
				break
			case 14:
				fild = 'customer_id'
				break
			case 15:
				fild = 'customer_name'
				break
			case 16:
				fild = 'remark_confirm'
				break
			case 17:
				fild = 'packing_confirm'
				break
		}
		
		if ((num == 0) || (num == 14)) {
			$.post( "database.php", { show: fild, val: "'"+value+"'"})
			.success(function( data ) {
				$("#frame1 tbody").remove();
				document.getElementById('table').innerHTML = (data + document.getElementById('table').innerHTML);
				var amount = $("#table tr").length - 1;
				$("#foundamount").html(amount +" - единиц найдено с параметром:  "+ fild +" = "+ value+":")
			});
		} else{
			$.post( "database.php", { search: fild, val: value})
			.success(function( data ) {
				$("#frame1 tbody").remove();
				document.getElementById('table').innerHTML = (data + document.getElementById('table').innerHTML);
				var amount = $("#table tr").length - 1;
				$("#foundamount").html(amount +" - единиц найдено с параметром:  "+ fild +" = "+ value+":")
			});
		}
    }
}

function manual_input_code(key, code, name){
	if (key == 13) {
		code = code.replace(/[^0-9]/gi, "");

		if ((code.length <= 8)&&(code.length > 1)){
			$.post( "database.php", { show: 'code', val: code})
			.success(function( data ) {
				if (data.length > 100){
					switch (name) {
						case "sorting":
							change_status_show (code, "SORTED");
							break
						case "folding":
							change_status_show (code, "FOLDED");
						break
						case "packing":
							change_status_show (code, "PACKED");
						break
					}
					$("#inp-manual").select();
				}else{
					alert("Такого номера нет в базе данных")
				}
			});
		}
	}
}









