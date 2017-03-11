
function del_remark(){
//var drop = $('#drop-remark');
	var ind = document.getElementById('drop-remark').selectedIndex;
	var selected_remark = document.getElementById('drop-remark').children[ind].text;;
	document.getElementById('del-remark').disabled = true;
	
	$.post( "database.php", {del_remark: selected_remark}) 
	.success(function(data) {
		show_remarks();
	});
}
function show_remarks(){
	$('#drop-remark > *').remove();
	$('#drop-remark').append("<option disabled>Кликните для выбора удаляемого замечания</option>");
	
	$.post( "database.php", {show_remarks: "1"}) 
	.success(function( data ) {
		var arr = data.split("***");
		var arrLength = arr.length-1;
		for (var i = 0; i < arrLength; i++) {
		
			$('#drop-remark').append("<option>"+ arr[i] +"</option>");
		}
		
		document.getElementById('del-remark').disabled = false;
	});

}
function new_remark(e, txt){
	if (e.keyCode == 13) {
		$.post( "database.php", {add_remark: txt}) 
		.success(function(data) {
			alert(data);
			$('#new-remark').select();
			show_remarks();			
		});
	}
}
function delete_user(){
	var user = $('#drop-users').val().trim();
	$( "#dialog-confirm" ).dialog({
			autoOpen: false,
			modal: true,
			title: 'Удаление пользователя',
			width: 'auto',
			buttons: {
				"Удалить": function() {
					$( this ).dialog( "close" );
					document.getElementById('delete-user').disabled = true;
					$.post( "database.php", {delete_user: "1", user: user}) 
					.success(function(data) {
						alert(data);
						
					});
				},
				" Нет ": function() {
					$( this ).dialog( "close" );
					document.getElementById('delete-user').disabled = true;
				}
			}
		});
		
		$( "#dialog-confirm" ).dialog({
			open: function(event,ui){
				$( "#dialog-confirm span" ).text("После удаления пользователь не сможет зайти на сайт.");
				$( "#dialog-confirm p" ).text("Вы действительно хотите удалить пользователя " + user+" ?");
			}
		});
		
		$("#dialog-confirm").dialog("open");
	
}

function show_users(){
	$('#drop-users > *').remove();
	
	$.post( "database.php", {users: "1"}) 
	.success(function( data ) {
		var arr = data.split("***");
		var arrLength = arr.length-1;
		for (var i = 0; i < arrLength; i++) {
			$('#drop-users').append("<option class='dropopt' value="+ arr[i] +">"+ arr[i] +"</option>");
		}
		
		document.getElementById('delete-user').disabled = false;
	});
}
function new_email(mail){
	newmail = mail;
	if (newmail.length > 1){
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(newmail)) {
			alert('Ошибка в адресе электронной почты.');
			return false;
		}
		
		document.getElementById("drop-role").disabled = false;
	}
}

function drop_role(){
	new_role_index = document.getElementById('drop-role').selectedIndex;
	//var role = document.getElementById('drop-role').children[new_role_index].text;
	
	if ((new_role_index == 1) || (new_role_index == 2)){
		document.getElementById("drop-customer").disabled = false;
		document.getElementById("new-user").disabled = true;
		
		if ( $('#drop-customer').children().length < 2 ){
			
			$.post( "database.php", {distinct_infild: "`customer_id`"}) 
			.success(function( data ) {
				var arr = data.split("***");
				var arrLength = arr.length-1;
				for (var i = 0; i < arrLength; i++) {
					$('#drop-customer').append("<option class='dropopt' value="+ arr[i] +">"+ arr[i] +"</option>");
				}
			});
			
		}

	}else{
		document.getElementById("drop-customer").disabled = true;
		document.getElementById("new-user").disabled = false;
	}
	
}

function drop_customer(){
	document.getElementById("new-user").disabled = false;
	
}

function show_customers(id){
	$('#'+id+' > :first-child').prop('disabled', true);
	$('#'+id+' > .dropopt').remove();
	$.post( "database.php", {distinct_infild: "customer_id"}) 
	.success(function( data ) {
		var arr = data.split("***");
		var arrLength = arr.length-1;
		for (var i = 0; i < arrLength; i++) {
			$('#'+id).append("<option class='dropopt'>"+ arr[i] +"</option>");
		}
	});
	
}

function reset(resetfild){
	if ($('#drop_reset > option').length < 2){
		return;
	}
	var customer = $('#drop_reset').val();
	if (resetfild == "status"){
		var val = "'reset'";
	} 
	if (resetfild == "remark"){
		var val = "NULL";
	}
	
	if (confirm("Установить всем единицам клиента № "+customer+"\n в поле '"+ resetfild +"' значение '"+val+"'?")){
		$.post( "database.php", {reset: customer, fild: resetfild, value: val}) 
		.success(function( data ) {
			data = data.trim()
			if (resetfild == "status"){
				alert(data +" - единицам клиента № "+customer+"\n установлен статус 'reset'" );
			} 
			if (resetfild == "remark"){
				alert(data +" - единицам клиента № "+customer+"\n удалены замечания" );
			}
		});	
	}
}













	