<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-27 03:11:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-27 03:11:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 03:15:34 --- ERROR: ErrorException [ 1 ]: Call to undefined function print_t() ~ APPPATH\classes\controller\order.php [ 45 ]
2012-02-27 03:15:34 --- STRACE: ErrorException [ 1 ]: Call to undefined function print_t() ~ APPPATH\classes\controller\order.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-27 03:15:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tpl\default.php [ 20 ]
2012-02-27 03:15:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tpl\default.php [ 20 ]
--
#0 D:\usr\www\khp\application\views\tpl\default.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\khp\...', 20, Array)
#1 D:\usr\www\khp\system\classes\kohana\view.php(61): include('D:\usr\www\khp\...')
#2 D:\usr\www\khp\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\khp\...', Array)
#3 D:\usr\www\khp\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Order))
#6 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#9 {main}
2012-02-27 03:20:28 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-27 03:20:28 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 03:20:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-27 03:20:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 03:57:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT left( kodinstr, 13) as kodinstr, name FROM `orders` where MID(kodinstr,5,4) BETWEEN "7680" and "7857" ORDER by left( kodinstr, 13) DESC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-27 03:57:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT left( kodinstr, 13) as kodinstr, name FROM `orders` where MID(kodinstr,5,4) BETWEEN "7680" and "7857" ORDER by left( kodinstr, 13) DESC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT left( ko...', false, Array)
#1 D:\usr\www\khp\application\classes\controller\ajax.php(16): Kohana_Database_Query->execute()
#2 [internal function]: Controller_ajax->action_nextnumber()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-27 03:57:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT left( kodinstr, 13) as kodinstr, name FROM `orders` where MID(kodinstr,5,4) BETWEEN "0" and "0" ORDER by left( kodinstr, 13) DESC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-27 03:57:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT left( kodinstr, 13) as kodinstr, name FROM `orders` where MID(kodinstr,5,4) BETWEEN "0" and "0" ORDER by left( kodinstr, 13) DESC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT left( ko...', false, Array)
#1 D:\usr\www\khp\application\classes\controller\ajax.php(16): Kohana_Database_Query->execute()
#2 [internal function]: Controller_ajax->action_nextnumber()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-27 03:57:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT left( kodinstr, 13) as kodinstr, name FROM `orders` where MID(kodinstr,5,4) BETWEEN "7680" and "7857" ORDER by left( kodinstr, 13) DESC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-27 03:57:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ SELECT left( kodinstr, 13) as kodinstr, name FROM `orders` where MID(kodinstr,5,4) BETWEEN "7680" and "7857" ORDER by left( kodinstr, 13) DESC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT left( ko...', false, Array)
#1 D:\usr\www\khp\application\classes\controller\ajax.php(16): Kohana_Database_Query->execute()
#2 [internal function]: Controller_ajax->action_nextnumber()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-27 03:58:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-27 03:58:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 03:59:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-27 03:59:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 04:00:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-27 04:00:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 04:03:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-27 04:03:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 04:05:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-27 04:05:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 06:33:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-27 06:33:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}