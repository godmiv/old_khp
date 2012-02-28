<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-25 02:41:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tpl\default.php [ 20 ]
2012-02-25 02:41:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tpl\default.php [ 20 ]
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
2012-02-25 03:11:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tpl\default.php [ 20 ]
2012-02-25 03:11:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tpl\default.php [ 20 ]
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