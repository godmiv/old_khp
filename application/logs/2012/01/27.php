<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-27 00:02:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH\views\order\start.php [ 4 ]
2012-01-27 00:02:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH\views\order\start.php [ 4 ]
--
#0 D:\usr\www\khp\application\views\order\start.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\khp\...', 4, Array)
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
2012-01-27 00:09:55 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\order\start.php [ 5 ]
2012-01-27 00:09:55 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\order\start.php [ 5 ]
--
#0 D:\usr\www\khp\application\views\order\start.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 5, Array)
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
2012-01-27 00:11:25 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 5 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
2012-01-27 00:11:25 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 5 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
--
#0 D:\usr\www\khp\system\classes\kohana\form.php(93): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\usr\www\khp\...', 93, Array)
#1 D:\usr\www\khp\application\views\order\start.php(5): Kohana_Form::input('detalavto', '???????????? ??...', '')
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