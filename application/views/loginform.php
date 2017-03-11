<header class="header">
	<a class="logo" href="http://lindstrom.ua">
		<img src="images/lindstrom_logo.png" alt="Home Lindstrom.ua"></img>
	</a>

	<h1>База данных спецодежды</h1>

</header>

<main class="content">

	<?php if (isset($error)){ ?>
		<p class="message">Проверьте правильность ввода логина и пароля</p>
	<?php } ?>

	<form class="login" accept-charset="utf-8" action="" method="post">
		<h1>Авторизация</h1>
		
		<p>Адрес электронной почты</p>
		<input id="inp-login" type = "text" name="login" value="" autocomplete="on" ></input>
		
		<p>Пароль</p>
		<input id="inp-pass" type = "password" name="password" value="" autocomplete="off" ></input>
		<input id="logon" type = "submit" name="loginbutton" value="Вход на сайт"></input>
		
	</form>

	<a href="/login/registration" class="homeref">Регистрация пользователя</a>

	<img class="idreader_logo" src="images/id_reader_logo.png" alt="Home"></img>


</main>