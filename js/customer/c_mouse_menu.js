function load_remarks(){
	//$('#contex-of-mousemenu > *').remove();
	
	$.post( "customer_database.php", {show_remarks: "1"}) 
	.success(function( data ) {
		var arr = data.split("***");
		var arrLength = arr.length-1;
		for (var i = 0; i < arrLength; i++) {
			$('#contex-of-mousemenu').append("<li><a href='#'>"+ arr[i] +"</a></li>");
		}
		
		//document.getElementById('del-remark').disabled = false;
	});


}

document.oncontextmenu = function(){ return false; }

function contextmenu() {      
	if (document.getElementById('contex-of-mousemenu').children.length == 0){
			load_remarks();
		}
	var	li_remarks = document.getElementById('contex-of-mousemenu').innerHTML;

	// Вешаем слушатель события нажатие кнопок мыши для всего документа:     
	$('.table_row').mousedown(function(event) {                  
			
		// Убираем css класс selected-html-element у абсолютно всех элементов на странице с помощью селектора "*":         
		$('#selected-html-element').removeAttr('id');       //removeClass('selected-html-element');         
		// Удаляем предыдущие вызванное контекстное меню:         
		$('.context-menu').remove();                  
		$('.remark-input').remove();                  

			// Проверяем нажата ли именно правая кнопка мыши:         
			if (event.which === 3)  {                          
				// Получаем элемент на котором был совершен клик:             
				var target = $(event.target);                          
				// Добавляем класс selected-html-element что бы наглядно показать на чем именно мы кликнули (исключительно для тестирования):             
				target.attr('id', 'selected-html-element');   //addClass('selected-html-element');              
				
				// Создаем меню:             
				$('<div/>', {                 
					class: 'context-menu' 
					// Присваиваем блоку наш css класс контекстного меню:             
				})             
				.css({                 
					left: event.pageX+'px', // Задаем позицию меню на X                 
					top: event.pageY+'px' // Задаем позицию меню по Y             
				})             
				.appendTo('body') 
				// Присоединяем наше меню к body документа:             
				.append( // Добавляем пункты меню:                 
					$('<ul>')
					.append(li_remarks)    
					   
				)           
				.show(); // Показываем меню с небольшим стандартным эффектом jQuery. Как раз очень хорошо подходит для меню          
			
				$('.context-menu ul li').click(function(){ contextclick(this); return false; });
			
			}
	}); 
};  

function contextclick(elem){ 
	var text = $(elem).text();	
		addremark(text);
};

function addremark(text){
	$('.context-menu').remove();
	var rem_td = $('#selected-html-element').parent().children(':nth-child(11)')
	var oldremark = rem_td.text();
	/*$('<input type="text" class="remark-input"></input>')             
		.css({                 
			
		})             
		.appendTo(rem_td); 
	                  
	var reminput = $('.remark-input')
	reminput.val(oldremark + " ");
	reminput.focus();
	reminput.select();                  */
	var code = $('#selected-html-element').parent().children(':nth-child(2)').text().trim();
	
	
			var remark = oldremark + " " + text;
			$.post( "customer_database.php", { change: code, fild: "`remark`", val: "'"+remark+"'"})
			.success(function( data ) {
				
				$.post( "customer_database.php", { change: code, fild: "`remark_off_time`", val: "NULL"})
				.success(function( data ) {
	
					$.post( "customer_database.php", { show: 'code', val: code})
					.success(function( data ) {
					$('#selected-html-element').parent().replaceWith( data );
					
					});		

				});
			});
		
	
}

