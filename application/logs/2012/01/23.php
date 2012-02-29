<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-23 07:09:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jgrid/test1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-23 07:09:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jgrid/test1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-23 07:11:31 --- ERROR: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\controller\jgrid.php [ 18 ]
2012-01-23 07:11:31 --- STRACE: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\controller\jgrid.php [ 18 ]
--
#0 D:\usr\www\khp\application\classes\controller\jgrid.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 18, Array)
#1 [internal function]: Controller_jgrid->action_test()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}