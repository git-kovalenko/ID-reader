<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-06 13:04:18 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Session.php:125
2014-08-06 13:04:18 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Common.php(7): Kohana_Session::instance()
#3 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(69): Common->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#9 {main} in /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Session.php:125
2014-08-06 13:04:41 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'a3dfoto_db.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/MySQL.php:359
2014-08-06 13:04:41 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/a3dfoto/3d-foto.in.ua/koh/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#7 /home/a3dfoto/3d-foto.in.ua/koh/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('a.kovalenko@ukr...', '123', false)
#8 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(18): Kohana_Auth->login('a.kovalenko@ukr...', '123')
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#15 {main} in /home/a3dfoto/3d-foto.in.ua/koh/modules/database/classes/Kohana/Database/MySQL.php:359
2014-08-06 14:15:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_SWITCH ~ APPPATH/classes/Model/Register.php [ 34 ] in file:line
2014-08-06 14:15:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line