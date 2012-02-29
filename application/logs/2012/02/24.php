<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-24 00:35:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-24 00:35:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-24 01:06:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
2012-02-24 01:06:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\ajax.php [ 21 ]
--
#0 D:\usr\www\khp\application\classes\controller\ajax.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\khp\...', 21, Array)
#1 [internal function]: Controller_ajax->action_nextnumber()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-24 02:53:00 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::submit(), called in D:\usr\www\khp\application\views\order\start.php on line 83 and defined ~ SYSPATH\classes\kohana\form.php [ 354 ]
2012-02-24 02:53:00 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::submit(), called in D:\usr\www\khp\application\views\order\start.php on line 83 and defined ~ SYSPATH\classes\kohana\form.php [ 354 ]
--
#0 D:\usr\www\khp\system\classes\kohana\form.php(354): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\usr\www\khp\...', 354, Array)
#1 D:\usr\www\khp\application\views\order\start.php(83): Kohana_Form::submit('add')
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
2012-02-24 03:19:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: dbdate ~ APPPATH\views\order\start.php [ 89 ]
2012-02-24 03:19:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: dbdate ~ APPPATH\views\order\start.php [ 89 ]
--
#0 D:\usr\www\khp\application\views\order\start.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\khp\...', 89, Array)
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
2012-02-24 03:20:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: columns ~ APPPATH\views\order\start.php [ 28 ]
2012-02-24 03:20:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: columns ~ APPPATH\views\order\start.php [ 28 ]
--
#0 D:\usr\www\khp\application\views\order\start.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\khp\...', 28, Array)
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
2012-02-24 03:21:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: dbdate ~ APPPATH\classes\controller\order.php [ 36 ]
2012-02-24 03:21:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: dbdate ~ APPPATH\classes\controller\order.php [ 36 ]
--
#0 D:\usr\www\khp\application\classes\controller\order.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\khp\...', 36, Array)
#1 [internal function]: Controller_Order->action_add()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Order))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-24 03:21:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: dbdate ~ APPPATH\classes\controller\order.php [ 36 ]
2012-02-24 03:21:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: dbdate ~ APPPATH\classes\controller\order.php [ 36 ]
--
#0 D:\usr\www\khp\application\classes\controller\order.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\khp\...', 36, Array)
#1 [internal function]: Controller_Order->action_add()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Order))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-24 03:30:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: dbdate ~ APPPATH\classes\controller\order.php [ 36 ]
2012-02-24 03:30:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: dbdate ~ APPPATH\classes\controller\order.php [ 36 ]
--
#0 D:\usr\www\khp\application\classes\controller\order.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\khp\...', 36, Array)
#1 [internal function]: Controller_Order->action_add()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Order))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-24 03:30:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: dbdate ~ APPPATH\classes\controller\order.php [ 36 ]
2012-02-24 03:30:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: dbdate ~ APPPATH\classes\controller\order.php [ 36 ]
--
#0 D:\usr\www\khp\application\classes\controller\order.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\khp\...', 36, Array)
#1 [internal function]: Controller_Order->action_add()
#2 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Order))
#3 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-24 03:30:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tpl\default.php [ 20 ]
2012-02-24 03:30:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tpl\default.php [ 20 ]
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
2012-02-24 04:45:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tpl\default.php [ 20 ]
2012-02-24 04:45:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tpl\default.php [ 20 ]
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