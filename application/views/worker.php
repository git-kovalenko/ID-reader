	<script src = ../js/ajax_database.js></script>
	<script src = ../js/all.js></script>

	<header class="header">
		<nav> 
			<ul id="nav">
				<li>
					<a class="logo" href="">
						<img src="images/lindstrom_logo.png" alt="Home"></img>
					</a>
				</li>
				<li onclick="sortmenu()">
					<p class="nav">
						Сортировка
					</p>
				</li>
				<li onclick="foldmenu()">
					<p class="nav">
						Складывание 
					</p>
				</li>
				<li onclick="packmenu()">
					<p class="nav">
						Упаковка
					</p>
				</li>
				<li> 
					<a class="exit" href="/login/logout">
						<img src="images/exit.png" alt="Exit"></img>
					</a>
				</li>
			</ul>		
		</nav>
	
		
		<div id = 'dynamic-setup'>
			
			<div id="contacts">
				contacts
			</div>
		<div>
		
	</header>

	<main class="content">
		
	<input id="inp-sorting" type = "text" value="" autocomplete="off" onkeyup="sorting(this.value)"></input>
	<input id="inp-folding" type = "text" value="" autocomplete="off" onkeyup="folding(this.value)"></input>
	<input id="inp-packing" type = "text" value="" autocomplete="off" onkeyup="packing(this.value)"></input>
	<input id="inp-manual" type = "text" value="Ввод с клавиатуры" name="" autocomplete="off" onfocus="clear_input()" onkeyup="manual_input_code(event.keyCode, this.value, this.name)"></input>

	<input id="check-unpacked" type="button" value="Показать неупакованные" onclick="unpacked_in_dep()"></input>
	<input id="packing_done" type="button" value="Упаковку закончено" onclick="packing_done()"></input>
	<select id="drop_cust" onchange="customer_change(this.value)">
		<option disabled>Выберите номер клиента</option>
	</select>
	<select id="drop_dep">
		<option disabled>Выберите отдел</option>
	</select>
	
	<input id="print" type = "button" value="Печать таблицы..." onclick="print_table()">
	
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
						<td>Модель<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Код владельца <input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Имя владельца<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Статус<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Время отправки<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Время сортировки<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Время складывания<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Время упаковки<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Замечание<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Время замечания<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Снято замечание<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Отдел<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Номер клиента<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Имя клиента<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Зам. ОК<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
						<td>Пак. ОК<input type="text" onkeyup="searchbox(event, this)"  autocomplete="off"></td>
					</tr>
				</thead>
			</table>
		</div>
		
		
		
		
		<div id="frame2">
			<p>Осталось неупакованных:</p>
			<input id="close-unpacked" type="button" value="Закрыть" onclick="close_unpacked()"></input>
			<input id="print2" type = "button" value="Печать таблицы..." onclick="print_table2()">
			<table id='table2' bordercolor="gray" border="1" cellspacing="0" > 
				<thead class='table_head' >
					<tr>
						<td>#</td>
						<td>Код</td>
						<td>Модель</td>
						<td>Код владельца</td>
						<td>Имя владельца</td>
						<td>Статус</td>
						<td>Время отправки</td>
						<td>Время сортировки</td>
						<td>Время складывания</td>
						<td>Время упаковки</td>
						<td>Замечание</td>
						<td>Время замечания</td>
						<td>Снято замечание</td>
						<td>Отдел</td>
						<td>Номер клиента</td>
						<td>Имя клиента</td>
						<td>Зам ОК</td>
						<td>Пак ОК</td>
					</tr>
				</thead>
				
			</table>
		</div>
		
		
		
		
		
		
		
	</main>