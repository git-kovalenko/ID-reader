<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-12 23:25:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php:137
2014-07-12 23:25:32 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#9 {main} in /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php:137
2014-07-12 23:45:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-07-12 23:45:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line