	<script src = ../js/customer/cadmin_ajax_database.js></script>
	<script src = ../js/customer/cadmin_all.js></script>
	<script src = ../js/customer/cadmin_mouse_menu.js></script>
	
	
	
	
	<header class="header">
		<nav> 
			<ul id="nav">
				<li>
					<a class="logo" href="">
						<img src="images/lindstrom_logo.png" alt="Home"></img>
					</a>
				</li>
				<li onclick="sendmenu()">
					<p class="nav">
						Отправка одежды
					</p>
				</li>
				<li onclick="receivemenu()">
					<p class="nav">
						Доставка одежды
					</p>
				</li>
				<li onclick="printmenu()">
					<p class="nav">
						PRINT
					</p>
				</li>
				<li onclick="reportmenu()">
					<p class="nav">
						Отчёты
					</p>
				</li>
				<li onclick="contactmenu()">
					<p class="nav">
						Контакты
					</p>
				</li>
			
				<li> 
					<a class="exit" href="/login/logout">
						<img src="images/exit.png" alt="Exit"></img>
					</a>
				</li>
			</ul>		
		</nav>
		
			
		
		<?php echo $client ?>
		
		<div id = 'dynamic-setup'>
			<div id="print-setup">
				
				<input id="show-sent" type = "button" value="Все отправленные за 24 часа на экран" onclick="show_sent()">
				<input id="show-received" type = "button" value="Все доставленные за 24 часа на экран" onclick="show_received()">

				<input id="clear-all" type = "button" value="Скрыть все" onclick="clear_all()">
				<span id="amount_b">Найдено строк: </span>
				<br>
				Вывод данных в файл Excel: <br>
				<a href="report_customer_admin.php?send=1&customer=<?php echo $customer?>">Отправленные за 24 часа</a> <br>
				<a href="report_customer_admin.php?received=1&customer=<?php echo $customer?>">Доставленные за 24 часа</a> <br>
			</div>
			
			<div id = "stock-setup">
				
				<input type="button" value="Вывод всей базы на экран" onclick="show_all(<?php echo $customer ?>)"/>
				
				<a href="report_customer_admin.php?all=1&customer=<?php echo $customer ?>" >Вывод всей базы в файл Excel</a> <br>
					
			</div>
			<div id = "report-setup">
					<span>Отчет за период (включительно)</span>
					
										
					<span>С:</span>
					<input id="datepicker" type="text" autocomplete="off"/>
					<span>По:</span>
					<input id="datepicker2" type="text" autocomplete="off"/>
					<br>
					<a id="day-report" href="#">В файл Excel</a>
					<input type="button" value="На экран" onclick="period_to_screen()"/>
					
			</div>
			
			<div id="contacts">
				ООО «Линдстрем» <br>
				ул. Вискозная, 8 <br>
				Киев, 02660, Украина <br>
				тел. +38044 583 03 41 <br>
				факс +38044 501 31 05 <br>
				customer.service@lindstrom.ua <br>
			</div>
			
		<div>
		
	</header>

	<main class="content">
		
	<input id="inp-sending" type = "text" value="" autocomplete="off" onkeyup="sending(this.value)"></input>
	<input id="inp-receiving" type = "text" value="" autocomplete="off" onkeyup="receiving(this.value)"></input>
	<input id="inp-manual" type = "text" value="Ввод с клавиатуры" name="" autocomplete="off" onfocus="clear_input()" onkeyup="manual_input_code(event.keyCode, this.value, this.name)"></input>
	
	<span id="sending_label" style="display: none; color: red;">Отправка-></span>
	<span id="receiving_label" style="display: none; color: #0066FF;"><-Доставка</span>
	
	<input id="print" type = "button" value="Печать таблицы..." onclick="print()">
	
	<div id="dialog-confirm">
		<span></span>
		<p></p> 
	</div>
	
	
		
		<div id="frame1">
			<p id="foundamount"></p>
			<table id='table' bordercolor="gray" border="1" cellspacing="0" > 
				<thead class='table_head' >
					<tr>
						<td>#</td>
						<td>Код <br> <input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></input></td>
						<td>Имя владельца <br> <input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></input></td>
						<td>Статус</td>
						<td>Время отправки</td>
						<td>Время доставки</td>
						<td>Замечание</td>
					</tr>
				</thead>
			</table>
		</div>

		
		
	</main>
	<ul id="contex-of-mousemenu" hidden>
	</ul>