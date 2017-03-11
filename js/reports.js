
function cust_sel(cust_number){
	
	var date_from = $('#datepicker').val();
	var date_to = $('#datepicker2').val();
	if (date_to.length == 10){
		$('#day-report').attr({href : "report.php?dayreport="+ date_from + "&to="+ date_to +"&customer="+ cust_number});
	}

}
	
function report_ofcode(value){

	
	var code = parseInt(value);
	
	$('#inp-history-code').prev().css("border","1px solid red");
	
	var ref = "report_history.php?code=" + code;
	$('#inp-history-code').prev().attr("href", ref);

	
}