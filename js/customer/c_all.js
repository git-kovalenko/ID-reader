/*Menu=================================================*/
function sendmenu(){
	colorbutton(1);
	var inpsending = $("#inp-sending"); 
	inpsending.show();
	inpsending.focus();
	inpsending.select();
}

function stockmenu(){
	colorbutton(2);
	$("#stock-setup").show();
	$(".table_head * input").show();
	var inpcode = $("#table thead").children().children(':nth-child(2)').children(); 
	//inpcode.css({'backgroundColor': 'pink'})
	inpcode.show();
	inpcode.focus();
	inpcode.select();
	
}

function reportmenu(){
	colorbutton(3);
	$("#report-setup").show();
	$(".table_head * input").show();
	$("#frame1").hide();
}
function contacts(){
	colorbutton(4);
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
	$(".table_head * input").hide();
	$("#foundamount").text("");
	$("#frame1 tbody").remove();
	$("#inp-sending").hide();
	
	
	if (document.getElementById('contex-of-mousemenu').children.length == 0){
		load_remarks();
	}
}

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

