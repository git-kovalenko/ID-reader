document.oncontextmenu = function(){ return false; }

function contextmenu() {      
	
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
					.append('<li><a href="#">Добавить замечание</a></li>')    
					.append('<li><a href="#">Удалить замечание</a></li>')    
					.append('<li><a href="#">Возврат единицы</a></li>')     
				)           
				.show(); // Показываем меню с небольшим стандартным эффектом jQuery. Как раз очень хорошо подходит для меню          
			
				$('.context-menu ul li').click(function(){ contextclick(this); return false; });
			
			}
	}); 
};  

function contextclick(elem){ 
	var index = $(elem).index();	
	switch (index) {
		case 0:
			addremark()
			break
		case 1:
			removeremark()
			break
		case 2:
			return_item()
			break
	}

};

function addremark(){
	$('.context-menu').remove();
	var rem_td = $('#selected-html-element').parent().children(':nth-child(11)')
	var oldremark = rem_td.text();
	$('<input type="text" class="remark-input"></input>')             
		.css({                 
			
		})             
		.appendTo(rem_td); 
	                  
	var reminput = $('.remark-input')
	reminput.val(oldremark + " ");
	reminput.focus();
	reminput.select();                  
	var code = $('#selected-html-element').parent().children(':nth-child(2)').text().trim();
	
	
	$('.remark-input').keyup(function(event){ 
		if (event.keyCode == 13) {
			var value = this.value.trim();
			$.post( "database.php", { change: code, fild: "`remark`", val: "'"+value+"'"})
			.success(function( data ) {
				
				$.post( "database.php", { change: code, fild: "`remark_off_time`", val: "NULL"})
				.success(function( data ) {
	
					$.post( "database.php", { show: 'code', val: code})
					.success(function( data ) {
					$('#selected-html-element').parent().replaceWith( data );
					
					});		

				});
			});
		}
	})
}

function removeremark(){
	$('.context-menu').remove();                  
	var code = $('#selected-html-element').parent().children(':nth-child(2)').text().trim();

	$.post( "database.php", { change: code, fild: "`remark`", val: "NULL"})
	.success(function() {
		$.post( "database.php", { change: code, fild: "`remark_confirm`", val: "NULL"})
		.success(function() {
		
				$.post( "database.php", { show: 'code', val: code})
				.success(function( data ) {
					$('#selected-html-element').parent().replaceWith( data );
				});	
		});
	});
}
function return_item(){
	$('.context-menu').remove();                  
	var retcode = $('#selected-html-element').parent().children(':nth-child(2)').text().trim();
	change_status_show (retcode, "RETURNED");
}







