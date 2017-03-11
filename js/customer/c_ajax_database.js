function showline(fild, value){
	$.post(
		"/customer_database.php", 
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
		"/customer_database.php", 
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
function show_all(){
	var customer = parseInt($("#customer-number").text());
	$.post( "customer_database.php", { show: "`customer_id`", val: customer})
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
function return_item(return_val){
	return_val = return_val.replace(/[^0-9]/gi, "");
	
	if (return_val.length >= 8){
		change_status_show (return_val, "RETURNED");
		$("#inp-return").select();
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
			$.post( "customer_database.php", { search: fild, val: value})
			.success(function( data ) {
				$("#frame1 tbody").remove();
				document.getElementById('table').innerHTML = (data + document.getElementById('table').innerHTML);
				var amount = $("#table tr").length - 1;
				$("#foundamount").html(amount +" - единиц найдено с параметром:  "+ fild +" = "+ value+":")
			});

		} else{
			$.post( "customer_database.php", { show: fild, val: "'"+value+"'"})
			.success(function( data ) {
				$("#frame1 tbody").remove();
				document.getElementById('table').innerHTML = (data + document.getElementById('table').innerHTML);
				var amount = $("#table tr").length - 1;
				$("#foundamount").html(amount +" - единиц найдено с параметром:  "+ fild +" = "+ value+":")
			});
		}
    }
}










