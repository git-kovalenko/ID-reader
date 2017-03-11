/*Menu=================================================*/
function sendmenu(){
	colorbutton(1);
	var inpsending = $("#inp-sending"); 
	inpsending.show();
	inpsending.focus();
	inpsending.select();
	$("#sending_label").show(); 
}
function receivemenu(){
	colorbutton(2);
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
	$(".table_head * input").hide();
	$("#foundamount").text("");
	$("#frame1 tbody").remove();
	$("#inp-sending").hide();
	$("#inp-receiving").hide();
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



/*
document.addEventListener("DOMNodeInserted", function (event) {
	var e = event
	
	if (e.target.className == "table_row" || e.target.firstChild.className == "table_row"){
		contextmenu();
		
		$(".table_row").each(function(  ) {
			var tt = $( this ).children(':nth-child(6)').text()
			if (tt.length > 0){
				$( this ).children(':nth-child(6)').css({'backgroundColor': 'red'});				
			}
		})
	}
}, false);
*/
