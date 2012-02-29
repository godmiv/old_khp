<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-28 23:53:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-28 23:53:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}