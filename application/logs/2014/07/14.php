<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-14 00:07:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Model/Register.php [ 15 ] in file:line
2014-07-14 00:07:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 12:24:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/regform.php [ 9 ] in file:line
2014-07-14 12:24:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 12:24:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH/classes/Model/Register.php [ 31 ] in file:line
2014-07-14 12:24:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 12:25:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC, expecting ',' or ';' ~ APPPATH/classes/Model/Usernew.php [ 6 ] in file:line
2014-07-14 12:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 12:25:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/Usernew.php [ 15 ] in file:line
2014-07-14 12:25:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 12:28:27 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Usernew' does not have a method 'username_unique' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2014-07-14 12:28:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/home/a3dfoto/3...', 377, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#3 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#4 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#5 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(15): Kohana_ORM->save()
#6 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('kayuga@ukr.net', '')
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-07-14 12:33:21 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Usernew' does not have a method 'username_unique' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2014-07-14 12:33:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/home/a3dfoto/3...', 377, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#3 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#4 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#5 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(15): Kohana_ORM->save()
#6 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('kayuga@ukr.net', '')
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-07-14 13:09:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Register::$errors ~ APPPATH/classes/Controller/Login.php [ 54 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php:54
2014-07-14 13:09:54 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/a3dfoto/3...', 54, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php:54
2014-07-14 14:02:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-07-14 14:02:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:06:14 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'kayuga@ukr.net' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('kayuga@ukr.net', 'kayuga@ukr.net', '123') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 14:06:14 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(15): Kohana_ORM->save()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('kayuga@ukr.net', '123')
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#11 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 14:06:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-07-14 14:06:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:13:47 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'sdasd@sdf.ds' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('sdasd@sdf.ds', 'sdasd@sdf.ds', 'sds') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 14:13:47 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(15): Kohana_ORM->save()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('sdasd@sdf.ds', 'sds')
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#11 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 14:14:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Model/Addrole.php [ 7 ] in file:line
2014-07-14 14:14:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:15:11 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'asdfk@sdf.sd' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('asdfk@sdf.sd', 'asdfk@sdf.sd', 'sdsd') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 14:15:11 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(15): Kohana_ORM->save()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('asdfk@sdf.sd', 'sdsd')
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#11 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 14:52:25 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'kayuga@ukr.net' for key 'uniq_email' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('kayuga@ukr.net', 'kayuga@ukr.net', '123') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 14:52:25 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(18): Kohana_ORM->save()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('kayuga@ukr.net', '123')
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#11 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 15:38:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Register::$errors ~ APPPATH/classes/Controller/Login.php [ 54 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php:54
2014-07-14 15:38:29 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/a3dfoto/3...', 54, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php:54
2014-07-14 15:40:31 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/regform.php [ 8 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/regform.php:8
2014-07-14 15:40:31 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/regform.php(8): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/a3dfoto/3...', 8, Array)
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
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/regform.php:8
2014-07-14 15:50:06 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'a.kovalenko@ukr.net' for key 'uniq_email' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('a.kovalenko@ukr.net', 'a.kovalenko@ukr.net', '') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 15:50:06 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(20): Kohana_ORM->save()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('a.kovalenko@ukr...', '')
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#11 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 22:41:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'EMAIL' not found ~ APPPATH/classes/Model/Useful.php [ 7 ] in file:line
2014-07-14 22:41:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:41:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 7 ] in file:line
2014-07-14 22:41:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:44:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 7 ] in file:line
2014-07-14 22:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:49:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/Email.php [ 34 ] in file:line
2014-07-14 22:49:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 23:04:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/Email.php [ 34 ] in file:line
2014-07-14 23:04:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 23:11:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 10 ] in file:line
2014-07-14 23:11:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 23:12:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/Email.php [ 34 ] in file:line
2014-07-14 23:12:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 23:13:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/Email.php [ 34 ] in file:line
2014-07-14 23:13:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 23:24:21 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`a3dfoto_db`.`roles_users`, CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE) [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 23:24:21 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(38): Kohana_ORM->save()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('a.kovalenko@ukr...', 'dsds')
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#11 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 23:24:53 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`a3dfoto_db`.`roles_users`, CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE) [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-14 23:24:53 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(38): Kohana_ORM->save()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('a.kovalenko@ukr...', 'sddds')
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#11 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251