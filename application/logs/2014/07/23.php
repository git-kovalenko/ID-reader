<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-23 08:57:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_Usernew class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php:603
2014-07-23 08:57:43 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role')
#1 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(31): Kohana_ORM->__get('role')
#2 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(50): Model_Register->reg('kayuga@ukr.net', '123')
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#9 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php:603
2014-07-23 09:14:45 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`a3dfoto_db`.`roles_users`, CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE) [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('1', '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-23 09:14:45 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(39): Kohana_ORM->save()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(50): Model_Register->reg('a.kovalenko@ukr...', '123')
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#11 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-23 10:55:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'id' in 'where clause' [ UPDATE `roles_users` SET `role_id` = 1 WHERE `id` = 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-23 10:55:50 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `roles_u...', false, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#3 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(42): Kohana_ORM->save()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(50): Model_Register->reg('a.kovalenko@ukr...', '123')
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#11 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-23 11:36:23 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '3-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('3', 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-23 11:36:23 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(44): Kohana_ORM->save()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(50): Model_Register->reg('kayuga@ukr.net', '123')
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#11 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/Query.php:251
2014-07-23 11:40:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/basic.php [ 45 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php:45
2014-07-23 11:40:59 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 45, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#10 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php:45
2014-07-23 11:42:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Main.php [ 21 ] in file:line
2014-07-23 11:42:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 11:44:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Main.php [ 17 ] in file:line
2014-07-23 11:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 11:48:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH/classes/Controller/Main.php [ 11 ] in file:line
2014-07-23 11:48:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 11:48:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/Controller/Main.php [ 14 ] in file:line
2014-07-23 11:48:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 14:02:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/Controller/Main.php [ 19 ] in file:line
2014-07-23 14:02:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 14:02:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH/views/customer.php [ 44 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:02:49 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 44, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(26): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:09:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: clientm ~ APPPATH/views/customer.php [ 44 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:09:40 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 44, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(26): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:11:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH/views/customer.php [ 44 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:11:11 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 44, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(26): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:11:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH/views/customer.php [ 44 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:11:20 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 44, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(26): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:19:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH/views/customer.php [ 44 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:19:33 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 44, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(26): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:23:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH/views/basic.php [ 27 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php:27
2014-07-23 14:23:23 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 27, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#10 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php:27
2014-07-23 14:25:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH/views/customer.php [ 44 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:25:39 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 44, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(26): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:26:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH/views/customer.php [ 44 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:26:27 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/a3dfoto/3...', 44, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/views/basic.php(26): Kohana_View->__toString()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(61): include('/home/a3dfoto/3...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/a3dfoto/3...', Array)
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#14 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/views/customer.php:44
2014-07-23 14:50:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Main.php [ 44 ] in file:line
2014-07-23 14:50:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 14:50:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Main.php [ 44 ] in file:line
2014-07-23 14:50:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 14:50:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Main.php [ 44 ] in file:line
2014-07-23 14:50:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 14:54:11 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Main.php [ 19 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-23 14:54:11 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(19): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/a3dfoto/3...', 19, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:19
2014-07-23 14:54:42 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant email - assumed 'email' ~ APPPATH/classes/Controller/Main.php [ 28 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:28
2014-07-23 14:54:42 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(28): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/a3dfoto/3...', 28, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:28
2014-07-23 14:54:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Main.php [ 28 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:28
2014-07-23 14:54:56 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(28): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/a3dfoto/3...', 28, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:28
2014-07-23 14:55:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/Controller/Main.php [ 28 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:28
2014-07-23 14:55:04 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(28): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/a3dfoto/3...', 28, Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#7 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php:28
2014-07-23 15:08:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php:603
2014-07-23 15:08:25 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role')
#1 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(14): Kohana_ORM->__get('role')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#8 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php:603
2014-07-23 15:13:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The customer property does not exist in the Model_Acceptedmail class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php:603
2014-07-23 15:13:26 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('customer')
#1 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Main.php(24): Kohana_ORM->__get('customer')
#2 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#8 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php:603