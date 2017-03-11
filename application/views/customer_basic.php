	<script src = ../js/customer/cbasic_ajax_database.js></script>
	<script src = ../js/customer/cbasic_all.js></script>
	<script src = ../js/customer/cbasic_mouse_menu.js></script>
	
	
	
	
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
				<a href="report_customer_basic.php?send=1&customer=<?php echo $customer?>">Отправленные за 24 часа</a> <br>
				<a href="report_customer_basic.php?received=1&customer=<?php echo $customer?>">Доставленные за 24 часа</a> <br>
			</div>
		<div>
		
	</header>

	<main class="content">
		
	<input id="inp-sending" type = "text" value="" autocomplete="off" onkeyup="sending(this.value)"></input>
	<span id="sending_label" style="display: none; color: red;">Отправка-></span>
	<input id="inp-receiving" type = "text" value="" autocomplete="off" onkeyup="receiving(this.value)"></input>
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
						<td>Код</td>
						<td>Имя владельца</td>
						<td>Статус</td>
						<td>Время отправки</td>
						<td>Время доставки</td>
					</tr>
				</thead>
			</table>
		</div>

		
		
	</main>
	<ul id="contex-of-mousemenu" hidden>
	</ul>