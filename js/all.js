

/*Menu=================================================*/
function sortmenu(){
	colorbutton(1);
	$("#inp-manual").attr('name', "sorting");
	$("#inp-manual").show();
	var inpsorting = $("#inp-sorting"); 
	inpsorting.show();
	inpsorting.focus();
	inpsorting.select();
}
function foldmenu(){
	colorbutton(2);
	$("#inp-manual").attr('name', "folding");
	$("#inp-manual").show();
	var inpfolding = $("#inp-folding"); 
	inpfolding.show();
	inpfolding.focus();
	inpfolding.select();
}
function packmenu(){
	colorbutton(3);
	$("#inp-manual").attr('name', "packing");
	$("#inp-manual").show();
	$("#check-unpacked").show();
	$("#packing_done").show();
	var inppacking = $("#inp-packing"); 
	inppacking.show();
	inppacking.focus();
	inppacking.select();
	$("#drop_cust").show();

	$.post( "database.php", {distinct_infild: "`customer_id`"}) 
	.success(function( data ) {
		$('#drop_cust .dropopt').remove();
		var arr = data.split("***");
		var arrLength = arr.length-1;
		for (var i = 0; i < arrLength; i++) {
			var val = arr[i].trim();
			$('#drop_cust').append("<option class='dropopt' value="+ val +">"+ val +"</option>");
		}
		
		var customer = $('#drop_cust').val().trim();
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
	});
}
function stockmenu(){
	colorbutton(4);
	$("#stock-setup").show();
	$(".table_head * input").show();
	var inpcode = $("#table thead").children().children(':nth-child(2)').children(); 
	//inpcode.css({'backgroundColor': 'pink'})
	inpcode.show();
	inpcode.focus();
	inpcode.select();
	
}
function servicemenu(){
	colorbutton(5);
	$("#service-setup").show();
	$(".table_head * input").show();
	
	document.getElementById("drop-customer").disabled = true;
	document.getElementById("drop-role").disabled = true;
	document.getElementById("new-user").disabled = true;
	document.getElementById("delete-user").disabled = true;
	
}
function reportmenu(){
	colorbutton(6);
	$("#report-setup").show();
	$(".table_head * input").show();
	
	datepicker_config();
		
	$.post( "database.php", {distinct_infild: "`customer_id`"}) 
	.success(function( data ) {
		$('#cust-report .dropopt').remove();
		var arr = data.split("***");
		var arrLength = arr.length-1;
		for (var i = 0; i < arrLength; i++) {
			var val = arr[i].trim();
			$('#cust-report').append("<option class='dropopt'>"+ val +"</option>");
		}
	});
}

function contacts(){
	//colorbutton(7);
	//$("#contacts").show();
	document.location.href = "help";
	
}
function colorbutton(number){
	$("ul#nav > li").css({background: "inherit", borderColor: "transparent"});
	$('ul#nav > li:eq(' + number + ')').css({
		background: 'linear-gradient(to top, #CAFF70, white )', 
		borderColor: '#133c8d', 
		borderRadius: '5px' 
	});
	
	$('#dynamic-setup > div:visible').hide();
	$('#search_row').hide();
	$(".table_head * input").hide();
	$("#foundamount").text("");
	$("#frame1 tbody").remove();
	$("#inp-sorting").hide();
	$("#inp-folding").hide();
	$("#inp-packing").hide();
	$("#inp-manual").hide();
	$("#check-unpacked").hide();
	$("#packing_done").hide();
	$("#drop_dep").hide();
	$("#drop_cust").hide();
	$("#inp-return").hide();
	
	close_unpacked();
}

document.addEventListener("DOMNodeInserted", function (event) {
	var e = event
	if (e.target.className == "table_row" || e.target.firstChild.className == "table_row"){
		contextmenu();
		
		$(".table_row").each(function(  ) {
			var tt = $( this ).children(':nth-child(11)').text()
			if (tt.length > 0){
				$( this ).children(':nth-child(11)').css({'backgroundColor': 'red'});				
			}
		})
	}
}, false);
//document.getElementById('files').addEventListener('change', handleFileSelect, false);

function datepicker_config(){
	$.datepicker.setDefaults(
		$.extend($.datepicker.regional["ru"])
	);
	$("#datepicker").datepicker({
		showOn: 'both',
		buttonText: 'Выбор даты',
		buttonImage: '../images/calendar.png',
		buttonImageOnly: true,
		numberOfMonths: 1,
		maxDate: '0d',
		dateFormat: 'yy-mm-dd',
		showButtonPanel: true,
		onClose: function(dateText, inst) {
			$(this).css("background-color","pink");
			var customer = $('#cust-report').val();
			var to = $('#datepicker2').val();
			if (to.length == 10){
				$('#day-report').attr({href : "report.php?dayreport="+ $(this).val() + "&to="+ to +"&customer="+ customer});
			}
		}
	});
	
	$("#datepicker2").datepicker({
		showOn: 'both',
		buttonText: 'Выбор даты',
		buttonImage: '../images/calendar.png',
		buttonImageOnly: true,
		numberOfMonths: 1,
		maxDate: '0d',
		dateFormat: 'yy-mm-dd',
		showButtonPanel: true,
		onClose: function(dateText, inst) {
			$(this).css("background-color","pink");
			var customer = $('#cust-report').val();
			var from = $('#datepicker').val();
			if ($(this).val().length == 10){
				$('#day-report').attr({href : "report.php?dayreport="+ from + "&to="+ $(this).val() +"&customer="+ customer});
			}
			
		}
	});
}

function print_table(){
	pr = document.getElementById('frame1').innerHTML; 
	newWin=window.open('','printWindow','Toolbar=0,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0');
	newWin.document.open();
	var st = "<style>*{font-size: 12px;}</style>"
	newWin.document.write(st + pr);
	newWin.print();
	newWin.close(); 
}
function print_table2(){
	pr = document.getElementById('frame2').innerHTML; 
	newWin=window.open('','printWindow','Toolbar=0,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0');
	newWin.document.open();
	var st = "<style>*{font-size: 12px;}</style>"
	newWin.document.write(st + pr);
	newWin.print();
	newWin.close(); 
}

function clear_input(){
	document.getElementById('inp-manual').value = ""; 
}
