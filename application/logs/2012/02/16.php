<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-16 03:22:36 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\order\start.php [ 18 ]
2012-02-16 03:22:36 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\order\start.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\usr\www\khp\...', 18, Array)
#1 D:\usr\www\khp\application\views\order\start.php(18): implode('","', Array)
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
2012-02-16 03:23:03 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\order\start.php [ 18 ]
2012-02-16 03:23:03 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\order\start.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\usr\www\khp\...', 18, Array)
#1 D:\usr\www\khp\application\views\order\start.php(18): implode('","', Array)
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