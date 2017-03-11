<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-13 11:29:07 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/auth/classes/Kohana/Auth.php:143
2014-07-13 11:29:07 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/auth/classes/Kohana/Auth.php(143): Kohana_Auth->hash('admin')
#1 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(16): Kohana_Auth->hash_password('admin')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_hash()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#8 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/auth/classes/Kohana/Auth.php:143
2014-07-13 11:30:50 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Cookie.php:67
2014-07-13 11:30:50 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /home/a3dfoto/3d-foto.in.ua/koh/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Cookie.php:67
2014-07-13 11:33:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2014-07-13 11:33:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-13 11:49:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/loginform.php [ 1 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php:1
2014-07-13 11:49:23 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 1, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(49): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php:1
2014-07-13 11:52:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/loginform.php [ 1 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php:1
2014-07-13 11:52:26 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 1, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(49): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php:1
2014-07-13 11:56:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/loginform.php [ 1 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php:1
2014-07-13 11:56:02 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 1, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(49): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php:1
2014-07-13 11:56:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/loginform.php [ 1 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php:1
2014-07-13 11:56:13 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 1, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(49): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php:1
2014-07-13 11:56:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/loginform.php [ 1 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php:1
2014-07-13 11:56:35 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 1, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(49): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/loginform.php:1
2014-07-13 12:09:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: main ~ APPPATH/views/basic.php [ 49 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php:49
2014-07-13 12:09:57 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 49, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#10 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php:49
2014-07-13 12:10:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Login.php [ 32 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php:32
2014-07-13 12:10:59 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 32, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php:32
2014-07-13 14:28:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Main.php [ 18 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:18
2014-07-13 14:28:01 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 18, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:18
2014-07-13 14:28:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/Controller/Main.php [ 18 ] in file:line
2014-07-13 14:28:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-13 14:29:24 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Main.php [ 19 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:29:24 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/a3dfoto/3...', 19, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:30:27 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Main.php [ 19 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:30:27 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/a3dfoto/3...', 19, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:32:07 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Main.php [ 19 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:32:07 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/a3dfoto/3...', 19, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:32:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Login.php [ 29 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php:29
2014-07-13 14:32:45 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 29, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php:29
2014-07-13 14:34:24 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Main.php [ 19 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:34:24 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/a3dfoto/3...', 19, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:45:57 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Main.php [ 19 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:45:57 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/a3dfoto/3...', 19, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:46:35 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Main.php [ 19 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:46:35 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/a3dfoto/3...', 19, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:53:38 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Main.php [ 19 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:53:38 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/a3dfoto/3...', 19, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:57:38 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Main.php [ 19 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:57:38 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/a3dfoto/3...', 19, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:57:45 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Main.php [ 19 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 14:57:45 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/a3dfoto/3...', 19, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-13 20:02:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: REQUEST_URL ~ APPPATH/classes/Common.php [ 8 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Common.php:8
2014-07-13 20:02:14 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Common.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/home/a3dfoto/3...', 8, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(69): Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Help))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Common.php:8
2014-07-13 20:04:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Login.php [ 22 ] in file:line
2014-07-13 20:04:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-13 21:08:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view regview could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php:137
2014-07-13 21:08:47 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('regview')
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(30): Kohana_View->__construct('regview', Array)
#2 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(46): Kohana_View::factory('regview', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#9 {main} in /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php:137