function showline(fild, value){
	$.post(
		"/basic_customer_database.php", 
		{
		show: fild,
		val: value
		},
		onReceive
	);
	function onReceive(data){
		document.getElementById('table').innerHTML = data + document.getElementById('table').innerHTML;
	}
}
//========================================================
function changeline(code, fild, value){
	$.post(
		"/basic_customer_database.php", 
		{
		change: code, 
		fild: fild,
		val: value
		},
		onReceive
	);
	function onReceive(data){
			
		if (value == "'SEND'"){
			showline('code', code);
		}
		
		if (value == "'RECEIVED'"){
			$.post( "admin_customer_database.php", { change: code, fild: "`send_time`", val: "NULL"})
			.success(function() {
				showline('code', code);
			});
		}
	}
}

//========================================================
function sending(send_val){
	send_val = send_val.replace(/[^0-9]/gi, "");
	parseInt
	if (send_val.length >= 8){
		send_val = parseInt(send_val);
		
		changeline(send_val, 'status', "'SEND'");
		$("#inp-sending").select();
	}
}


//========================================================
function receiving(receive_val){
	receive_val = receive_val.replace(/[^0-9]/gi, "");
	parseInt
	if (receive_val.length >= 8){
		receive_val = parseInt(receive_val);
		
		changeline(receive_val, 'status', "'RECEIVED'");
		$("#inp-receiving").select();
	}
}


//========================================================
function show_sent(){
	var customer = parseInt($("#customer-number").text());
	$.post( "basic_customer_database.php", { show3filds: "`customer_id`", value1: customer, fild2: "`customer_id`", value2: customer, fild3: "`send_time`", value3: ">= date_sub(now(), INTERVAL 24 HOUR)"})
		.success(function( data ) {
			$("#frame1 tbody").remove();
			
			document.getElementById('table').innerHTML = (data + document.getElementById('table').innerHTML);
			var amount_base = $("#table tr").length - 1;
			$("#amount_b").html("Найдено строк: " + amount_base)
			
		});

}
//========================================================
function show_received(){
	var customer = parseInt($("#customer-number").text());
	$.post( "basic_customer_database.php", { show3filds: "`customer_id`", value1: customer, fild2: "`status`", value2: "'RECEIVED'", fild3: "`customer_receive_time`", value3: ">= date_sub(now(), INTERVAL 24 HOUR)"})
		.success(function( data ) {
			$("#frame1 tbody").remove();
			
			document.getElementById('table').innerHTML = (data + document.getElementById('table').innerHTML);
			var amount_base = $("#table tr").length - 1;
			$("#amount_b").html("Найдено строк: " + amount_base)
			
		});

}

//========================================================
function clear_all(){
	$("#table tbody").remove();
	$("#amount_b").html("Найдено строк: ")
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
				fild = 'wearer_name'
				break
			case 3:
				fild = 'status'
				break
			case 4:
				fild = 'send_time'
				break
			case 5:
				fild = 'remark'
				break
		}
		
		if ((num == 1) || (num == 2) || (num == 3) || (num == 4) || (num == 5)) {
			$.post( "basic_customer_database.php", { search: fild, val: value})
			.success(function( data ) {
				$("#frame1 tbody").remove();
				document.getElementById('table').innerHTML = (data + document.getElementById('table').innerHTML);
				var amount = $("#table tr").length - 1;
				$("#foundamount").html(amount +" - единиц найдено с параметром:  "+ fild +" = "+ value+":")
			});

		} else{
			$.post( "basic_customer_database.php", { show: fild, val: "'"+value+"'"})
			.success(function( data ) {
				$("#frame1 tbody").remove();
				document.getElementById('table').innerHTML = (data + document.getElementById('table').innerHTML);
				var amount = $("#table tr").length - 1;
				$("#foundamount").html(amount +" - единиц найдено с параметром:  "+ fild +" = "+ value+":")
			});
		}
    }
}










