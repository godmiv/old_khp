<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-30 00:57:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: form_mm ~ APPPATH\views\order\start.php [ 7 ]
2012-01-30 00:57:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: form_mm ~ APPPATH\views\order\start.php [ 7 ]
--
#0 D:\usr\www\khp\application\views\order\start.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\khp\...', 7, Array)
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
2012-01-30 03:55:55 --- ERROR: ErrorException [ 8 ]: Undefined index: attr ~ APPPATH\views\order\start.php [ 10 ]
2012-01-30 03:55:55 --- STRACE: ErrorException [ 8 ]: Undefined index: attr ~ APPPATH\views\order\start.php [ 10 ]
--
#0 D:\usr\www\khp\application\views\order\start.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 10, Array)
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
2012-01-30 03:56:53 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
2012-01-30 03:56:53 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
--
#0 D:\usr\www\khp\system\classes\kohana\form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\usr\www\khp\...', 252, Array)
#1 D:\usr\www\khp\application\views\order\start.php(11): Kohana_Form::select('osin', '', Array)
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
2012-01-30 03:58:23 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
2012-01-30 03:58:23 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
--
#0 D:\usr\www\khp\system\classes\kohana\form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\usr\www\khp\...', 252, Array)
#1 D:\usr\www\khp\application\views\order\start.php(11): Kohana_Form::select('osin', '???????????????...', Array)
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
2012-01-30 03:58:27 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
2012-01-30 03:58:27 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
--
#0 D:\usr\www\khp\system\classes\kohana\form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\usr\www\khp\...', 252, Array)
#1 D:\usr\www\khp\application\views\order\start.php(11): Kohana_Form::select('osin', '???????????????...', Array)
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
2012-01-30 03:58:51 --- ERROR: ErrorException [ 4 ]: parse error, expecting `')'' ~ APPPATH\classes\controller\order.php [ 25 ]
2012-01-30 03:58:51 --- STRACE: ErrorException [ 4 ]: parse error, expecting `')'' ~ APPPATH\classes\controller\order.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-30 03:59:38 --- ERROR: ErrorException [ 4 ]: parse error, expecting `')'' ~ APPPATH\classes\controller\order.php [ 25 ]
2012-01-30 03:59:38 --- STRACE: ErrorException [ 4 ]: parse error, expecting `')'' ~ APPPATH\classes\controller\order.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-30 04:02:52 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
2012-01-30 04:02:52 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
--
#0 D:\usr\www\khp\system\classes\kohana\form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\usr\www\khp\...', 252, Array)
#1 D:\usr\www\khp\application\views\order\start.php(11): Kohana_Form::select('osin', '???????????????...', Array)
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
2012-01-30 04:11:15 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
2012-01-30 04:11:15 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
--
#0 D:\usr\www\khp\system\classes\kohana\form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\usr\www\khp\...', 252, Array)
#1 D:\usr\www\khp\application\views\order\start.php(11): Kohana_Form::select('osin', '1', Array)
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
2012-01-30 04:11:52 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, integer given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
2012-01-30 04:11:52 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, integer given, called in D:\usr\www\khp\application\views\order\start.php on line 11 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
--
#0 D:\usr\www\khp\system\classes\kohana\form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\usr\www\khp\...', 252, Array)
#1 D:\usr\www\khp\application\views\order\start.php(11): Kohana_Form::select('osin', 1, Array)
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
2012-01-30 07:45:27 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\order\start.php [ 30 ]
2012-01-30 07:45:27 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\order\start.php [ 30 ]
--
#0 D:\usr\www\khp\application\views\order\start.php(30): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 30, Array)
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
2012-01-30 07:46:57 --- ERROR: ErrorException [ 4096 ]: Argument 4 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 15 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
2012-01-30 07:46:57 --- STRACE: ErrorException [ 4096 ]: Argument 4 passed to Kohana_Form::select() must be an array, string given, called in D:\usr\www\khp\application\views\order\start.php on line 15 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
--
#0 D:\usr\www\khp\system\classes\kohana\form.php(252): Kohana_Core::error_handler(4096, 'Argument 4 pass...', 'D:\usr\www\khp\...', 252, Array)
#1 D:\usr\www\khp\application\views\order\start.php(15): Kohana_Form::select('osin', Array, NULL, 'osin')
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
2012-01-30 07:50:38 --- ERROR: ErrorException [ 8 ]: Undefined index: desc ~ APPPATH\views\order\start.php [ 15 ]
2012-01-30 07:50:38 --- STRACE: ErrorException [ 8 ]: Undefined index: desc ~ APPPATH\views\order\start.php [ 15 ]
--
#0 D:\usr\www\khp\application\views\order\start.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 15, Array)
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
2012-01-30 07:51:09 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\views\order\start.php [ 15 ]
2012-01-30 07:51:09 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\views\order\start.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-30 07:51:51 --- ERROR: ErrorException [ 8 ]: Undefined index: desc ~ APPPATH\views\order\start.php [ 15 ]
2012-01-30 07:51:51 --- STRACE: ErrorException [ 8 ]: Undefined index: desc ~ APPPATH\views\order\start.php [ 15 ]
--
#0 D:\usr\www\khp\application\views\order\start.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\khp\...', 15, Array)
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