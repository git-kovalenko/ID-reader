/*Menu=================================================*/
function sendmenu(){
	colorbutton(1);
	$("#inp-manual").attr('name', "sending");
	$("#inp-manual").show();
	var inpsending = $("#inp-sending"); 
	inpsending.show();
	inpsending.focus();
	inpsending.select();
	$("#sending_label").show(); 
}
function receivemenu(){
	colorbutton(2);
	$("#inp-manual").attr('name', "receiving");
	$("#inp-manual").show();
	var receiving = $("#inp-receiving"); 
	receiving.show();
	receiving.focus();
	receiving.select();
	$("#receiving_label").show(); 
}

function printmenu(){
	colorbutton(3);
	$("#print-setup").show();
	var cust_num = $('#customer-number').val();
	
	/*$(".table_head * input").show();
	var inpcode = $("#table thead").children().children(':nth-child(2)').children(); 
	inpcode.css({'backgroundColor': 'pink'})
	inpcode.show();
	inpcode.focus();
	inpcode.select();
	*/
}

function reportmenu(){
	colorbutton(4);
	$("#report-setup").show();
	$(".table_head * input").show();
	datepicker_config();
}
function contactmenu(){
	colorbutton(5);
	$("#contacts").show();
	$("#frame1").hide();
}

function colorbutton(number){
	$("ul#nav > li").css({background: "inherit", borderColor: "transparent"});
	$('ul#nav > li:eq(' + number + ')').css({
		background: 'linear-gradient(to top, #CAFF70, white )', 
		borderColor: '#133c8d', 
		borderRadius: '5px' 
	});
	
	$('#dynamic-setup > div').hide();
	$('#search_row').hide();
	$("#frame1").show();
	$("#frame1 tbody").remove();
	
	$(".table_head * input").hide();
	$("#foundamount").text("");
	
	$("#inp-sending").hide();
	$("#inp-receiving").hide();
	$("#inp-manual").hide();
	$("#receiving_label").hide(); 
	$("#sending_label").hide(); 
	
	
	if (document.getElementById('contex-of-mousemenu').children.length == 0){
		load_remarks();
	}
}

function print(){
	pr = document.getElementById('frame1').innerHTML; 
	newWin=window.open('','printWindow','Toolbar=0,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0');
	newWin.document.open();
	var st = "<style>*{font-size: 12px;}</style>"
	newWin.document.write(st + pr);
	newWin.print();
	newWin.close(); 
}

document.addEventListener("DOMNodeInserted", function (event) {
	var e = event
	
	if (e.target.className == "table_row" || e.target.firstChild.className == "table_row"){
		
		var rep = $( "#report-setup" ).is( ":visible" );
		if (rep){
			contextmenu();
		}
		
		$(".table_row").each(function(  ) {
			var tt = $( this ).children(':nth-child(7)').text()
			if (tt.length > 0){
				$( this ).children(':nth-child(7)').css({'backgroundColor': 'red'});				
			}
		})
	}
}, false);

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
			var customer = $('#customer-number').text();
			var to = $('#datepicker2').val();
			if (to.length == 10){
				$('#day-report').attr({href : "report_customer_admin.php?dayreport="+ $(this).val() + "&to="+ to +"&customer="+ customer});
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
			var customer = $('#customer-number').text();
			var from = $('#datepicker').val();
			if ($(this).val().length == 10){
				$('#day-report').attr({href : "report_customer_admin.php?dayreport="+ from + "&to="+ $(this).val() +"&customer="+ customer});
				
			}
			
		}
	});
}

function clear_input(){
	document.getElementById('inp-manual').value = ""; 
}

