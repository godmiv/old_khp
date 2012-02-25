<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-21 07:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/css/ui.jqgrid.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 07:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/css/ui.jqgrid.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 07:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/js/jquery.jqGrid.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 07:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/js/jquery.jqGrid.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 07:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/js/grid.locale-ru.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 07:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/css/ui-lightness/jquery-ui-1.8.16.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 07:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/js/grid.locale-ru.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 07:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/css/ui-lightness/jquery-ui-1.8.16.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 07:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/css/ui-lightness/jquery-ui-1.8.16.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 07:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/js/jquery.jqGrid.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 07:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 07:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/css/ui.jqgrid.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 07:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/js/jquery.jqGrid.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 07:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/css/ui-lightness/jquery-ui-1.8.16.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 07:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/css/ui.jqgrid.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 07:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/js/grid.locale-ru.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 07:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/js/grid.locale-ru.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 07:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khp/assets/js/jquery-1.6.2.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 07:31:22 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-01-21 07:31:22 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT products...', false, Array)
#2 D:\usr\www\khp\application\classes\controller\jgrid.php(35): Kohana_Database_Query->execute()
#3 [internal function]: Controller_jgrid->action_test()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-21 07:31:23 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-01-21 07:31:23 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT products...', false, Array)
#2 D:\usr\www\khp\application\classes\controller\jgrid.php(35): Kohana_Database_Query->execute()
#3 [internal function]: Controller_jgrid->action_test()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-21 07:31:29 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-01-21 07:31:29 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT products...', false, Array)
#2 D:\usr\www\khp\application\classes\controller\jgrid.php(35): Kohana_Database_Query->execute()
#3 [internal function]: Controller_jgrid->action_test()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-21 07:32:41 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-01-21 07:32:41 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT products...', false, Array)
#2 D:\usr\www\khp\application\classes\controller\jgrid.php(35): Kohana_Database_Query->execute()
#3 [internal function]: Controller_jgrid->action_test()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-21 07:34:05 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-01-21 07:34:05 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT products...', false, Array)
#2 D:\usr\www\khp\application\classes\controller\jgrid.php(35): Kohana_Database_Query->execute()
#3 [internal function]: Controller_jgrid->action_test()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-21 07:37:02 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-01-21 07:37:02 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT products...', false, Array)
#2 D:\usr\www\khp\application\classes\controller\jgrid.php(35): Kohana_Database_Query->execute()
#3 [internal function]: Controller_jgrid->action_test()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-21 07:37:04 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-01-21 07:37:04 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT products...', false, Array)
#2 D:\usr\www\khp\application\classes\controller\jgrid.php(35): Kohana_Database_Query->execute()
#3 [internal function]: Controller_jgrid->action_test()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-21 07:37:34 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-01-21 07:37:34 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT products...', false, Array)
#2 D:\usr\www\khp\application\classes\controller\jgrid.php(35): Kohana_Database_Query->execute()
#3 [internal function]: Controller_jgrid->action_test()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-21 07:53:48 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-01-21 07:53:48 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT products...', false, Array)
#2 D:\usr\www\khp\application\classes\controller\welcome.php(11): Kohana_Database_Query->execute()
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-21 07:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jgrid/test1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-21 07:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jgrid/test1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-21 08:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 08:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 08:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-21 08:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-21 08:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jgrid/test1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-21 08:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jgrid/test1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#3 {main}