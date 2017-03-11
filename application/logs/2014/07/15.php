<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-15 00:11:29 --- EMERGENCY: Swift_TransportException [ 0 ]: Connection could not be established with host smtp.ukr.net [В соединении отказано #111] ~ APPPATH/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php [ 259 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php:64
2014-07-15 00:11:29 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 /home/a3dfoto/3d-foto.in.ua/koh/modules/email/classes/Kohana/Email.php(405): Swift_Mailer->send(Object(Swift_Message), Array)
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Useful.php(11): Kohana_Email->send()
#5 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(44): Model_Useful->sendmail('a.kovalenko@ukr...', 'kayuga@ukr.net', '???????????????...', '?????? ????????...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('a.kovalenko@ukr...', 'dfwe')
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#13 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php:64
2014-07-15 00:12:06 --- EMERGENCY: Swift_TransportException [ 0 ]: Connection could not be established with host smtp.ukr.net [В соединении отказано #111] ~ APPPATH/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php [ 259 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php:64
2014-07-15 00:12:06 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 /home/a3dfoto/3d-foto.in.ua/koh/modules/email/classes/Kohana/Email.php(405): Swift_Mailer->send(Object(Swift_Message), Array)
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Useful.php(11): Kohana_Email->send()
#5 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(44): Model_Useful->sendmail('a.kovalenko@ukr...', 'kayuga@ukr.net', '???????????????...', '?????? ????????...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('a.kovalenko@ukr...', 'dfwe')
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#13 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php:64
2014-07-15 00:13:34 --- EMERGENCY: Swift_TransportException [ 0 ]: Connection could not be established with host smtp.ukr.net [В соединении отказано #111] ~ APPPATH/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php [ 259 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php:64
2014-07-15 00:13:34 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 /home/a3dfoto/3d-foto.in.ua/koh/modules/email/classes/Kohana/Email.php(405): Swift_Mailer->send(Object(Swift_Message), Array)
#4 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Useful.php(11): Kohana_Email->send()
#5 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Model/Register.php(44): Model_Useful->sendmail('a.kovalenko@ukr...', 'kayuga@ukr.net', '???????????????...', '?????? ????????...')
#6 /home/a3dfoto/3d-foto.in.ua/koh/application/classes/Controller/Login.php(51): Model_Register->reg('a.kovalenko@ukr...', 'fedf')
#7 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/a3dfoto/3d-foto.in.ua/koh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/a3dfoto/3d-foto.in.ua/koh/index.php(118): Kohana_Request->execute()
#13 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php:64
2014-07-15 08:40:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH/classes/Model/Register.php [ 43 ] in file:line
2014-07-15 08:40:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:59:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'email' at 'MODPATH/email' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /home/a3dfoto/3d-foto.in.ua/koh/application/bootstrap.php:134
2014-07-15 09:59:26 --- DEBUG: #0 /home/a3dfoto/3d-foto.in.ua/koh/application/bootstrap.php(134): Kohana_Core::modules(Array)
#1 /home/a3dfoto/3d-foto.in.ua/koh/index.php(102): require('/home/a3dfoto/3...')
#2 {main} in /home/a3dfoto/3d-foto.in.ua/koh/application/bootstrap.php:134