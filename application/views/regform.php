<header class="header">
</header>

<main class="content">

	<?php if (isset($regok)){ ?>
		<p class='message'>Регистрация прошла успешно. <br>
		На ваш адрес выслан логин и пароль.
		</p>
	<?php } ?>

	<?php if (isset($errors)){ ?>
		<?php foreach($errors as $item) {?>
			<p class='message'><?php echo $item;?></p>
		<?php } ?>
		<p class='message'>Адрес электронной почты нужно предварительно согласовать с администрацией
		( customer.service@lindstrom.ua ).
		</p>
	<?php } ?>

	<a href="/login" class="homeref">На главную</a>

	<form class="registration" accept-charset="utf-8" action="" method="post">
		<h1>Регистрация</h1>

		
		
		<p>Адрес электронной почты</p>
		<input type = "text" name="email" value="" autocomplete="on" ></input>
		
		<p>Пароль</p>
		<input type = "text" name="pass" value="" autocomplete="on" ></input>
		
		<input type = "submit" name="regbutton" value="Зарегистрировать"></input>

		<p>Для получения доступа к регистрации свяжитесь с отделом обслуживания клиентов customer.service@lindstrom.ua</p>
	</form>
</main>