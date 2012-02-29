<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-02 04:56:46 --- ERROR: ErrorException [ 2 ]: array_multisort() [function.array-multisort]: Argument #1 is expected to be an array or a sort flag ~ APPPATH\views\order\start.php [ 73 ]
2012-02-02 04:56:46 --- STRACE: ErrorException [ 2 ]: array_multisort() [function.array-multisort]: Argument #1 is expected to be an array or a sort flag ~ APPPATH\views\order\start.php [ 73 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_multisort...', 'D:\usr\www\khp\...', 73, Array)
#1 D:\usr\www\khp\application\views\order\start.php(73): array_multisort('kod', 3, Array)
#2 D:\usr\www\khp\system\classes\kohana\view.php(61): include('D:\usr\www\khp\...')
#3 D:\usr\www\khp\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\khp\...', Array)
#4 D:\usr\www\khp\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\usr\www\khp\application\views\tpl\default.php(20): Kohana_View->__toString()
#6 D:\usr\www\khp\system\classes\kohana\view.php(61): include('D:\usr\www\khp\...')
#7 D:\usr\www\khp\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\khp\...', Array)
#8 D:\usr\www\khp\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Order))
#11 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#14 {main}
2012-02-02 05:00:27 --- ERROR: ErrorException [ 1 ]: Call to undefined function asortt() ~ APPPATH\views\order\start.php [ 73 ]
2012-02-02 05:00:27 --- STRACE: ErrorException [ 1 ]: Call to undefined function asortt() ~ APPPATH\views\order\start.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-02 05:00:37 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\views\order\start.php [ 73 ]
2012-02-02 05:00:37 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\views\order\start.php [ 73 ]
--
#0 D:\usr\www\khp\application\views\order\start.php(73): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\usr\www\khp\...', 73, Array)
#1 D:\usr\www\khp\system\classes\kohana\view.php(61): include('D:\usr\www\khp\...')
#2 D:\usr\www\khp\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\khp\...', Array)
#3 D:\usr\www\khp\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\khp\application\views\tpl\default.php(20): Kohana_View->__toString()
#5 D:\usr\www\khp\system\classes\kohana\view.php(61): include('D:\usr\www\khp\...')
#6 D:\usr\www\khp\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\khp\...', Array)
#7 D:\usr\www\khp\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Order))
#10 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#13 {main}
2012-02-02 05:55:08 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\views\order\start.php [ 73 ]
2012-02-02 05:55:08 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\views\order\start.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}