<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-15 03:55:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-15 03:55:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-15 03:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-15 03:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-15 03:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-15 03:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-15 03:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-15 03:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-15 04:46:25 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-15 04:46:25 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\www\khp\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 D:\usr\www\khp\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 D:\usr\www\khp\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-15 07:54:12 --- ERROR: Database_Exception [ 0 ]: could not find driver ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2011-12-15 07:54:12 --- STRACE: Database_Exception [ 0 ]: could not find driver ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SHOW TABLES', false, Array)
#2 D:\usr\www\khp\application\classes\controller\welcome.php(10): Kohana_Database_Query->execute()
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}