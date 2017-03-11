	<script src = ../js/customer/c_ajax_database.js></script>
	<script src = ../js/customer/c_all.js></script>
	<script src = ../js/customer/c_mouse_menu.js></script>
	
	
	
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
				<li onclick="stockmenu()">
					<p class="nav">
						Склад
					</p>
				</li>
				<li onclick="reportmenu()">
					<p class="nav">
						Отчеты
					</p>
				</li>
				<li onclick="contacts()"> 
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
			<div id="stock-setup">
				
				<input id="show-all" type = "button" value="Показать все" onclick="show_all()">
				<span id="amount_b">Всего строк </span>
				<input id="clear-all" type = "button" value="Скрыть все" onclick="clear_all()">
			
			
			</div>
			
			<div id="report-setup">
			Вывод данных в файл Excel: <br>
				<a href="creport.php?customer=<?php echo $customer ?>" >Вся база данных</a> <br>
				<a href="creport.php?rem=1&customer=<?php echo $customer ?>" >Только единицы с замечаниями</a> <br>

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
	
	<div id="dialog-confirm">
		<span></span>
		<p></p> 
	</div>
	
	
	
		<div id="frame1">
			<p id="foundamount"></p>
			<table id='table' bordercolor="gray" border="1" cellspacing="0" > 
				<thead class='table_head' >
					<tr>
						<td>#<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></input></td>
						<td>Код<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Имя владельца<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Статус<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Время отправки<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Замечание<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
					</tr>
				</thead>
			</table>
		</div>

		
		
	</main>
	<ul id="contex-of-mousemenu" hidden>
	</ul>