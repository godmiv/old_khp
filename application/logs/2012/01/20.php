<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-20 00:24:31 --- ERROR: ErrorException [ 8 ]: Undefined index: parrent_id ~ APPPATH\classes\controller\jgrid.php [ 79 ]
2012-01-20 00:24:31 --- STRACE: ErrorException [ 8 ]: Undefined index: parrent_id ~ APPPATH\classes\controller\jgrid.php [ 79 ]
--
#0 D:\usr\www\khp\application\classes\controller\jgrid.php(79): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 79, Array)
#1 [internal function]: Controller_jgrid->action_test()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 00:24:35 --- ERROR: ErrorException [ 8 ]: Undefined index: parrent_id ~ APPPATH\classes\controller\jgrid.php [ 79 ]
2012-01-20 00:24:35 --- STRACE: ErrorException [ 8 ]: Undefined index: parrent_id ~ APPPATH\classes\controller\jgrid.php [ 79 ]
--
#0 D:\usr\www\khp\application\classes\controller\jgrid.php(79): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 79, Array)
#1 [internal function]: Controller_jgrid->action_test()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 03:32:32 --- ERROR: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\controller\jgrid.php [ 18 ]
2012-01-20 03:32:32 --- STRACE: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\controller\jgrid.php [ 18 ]
--
#0 D:\usr\www\khp\application\classes\controller\jgrid.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 18, Array)
#1 [internal function]: Controller_jgrid->action_test()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 04:14:29 --- ERROR: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\controller\jgrid.php [ 18 ]
2012-01-20 04:14:29 --- STRACE: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\controller\jgrid.php [ 18 ]
--
#0 D:\usr\www\khp\application\classes\controller\jgrid.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 18, Array)
#1 [internal function]: Controller_jgrid->action_test()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 04:19:33 --- ERROR: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\controller\jgrid.php [ 18 ]
2012-01-20 04:19:33 --- STRACE: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\controller\jgrid.php [ 18 ]
--
#0 D:\usr\www\khp\application\classes\controller\jgrid.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 18, Array)
#1 [internal function]: Controller_jgrid->action_test()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 04:24:40 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in D:\usr\www\khp\application\classes\controller\jgrid.php on line 91 and defined ~ SYSPATH\classes\kohana\arr.php [ 275 ]
2012-01-20 04:24:40 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in D:\usr\www\khp\application\classes\controller\jgrid.php on line 91 and defined ~ SYSPATH\classes\kohana\arr.php [ 275 ]
--
#0 D:\usr\www\khp\system\classes\kohana\arr.php(275): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\usr\www\khp\...', 275, Array)
#1 D:\usr\www\khp\application\classes\controller\jgrid.php(91): Kohana_Arr::get(Array)
#2 [internal function]: Controller_jgrid->action_save()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_jgrid))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}