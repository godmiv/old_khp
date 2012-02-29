<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-23 06:50:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: base_url ~ APPPATH\views\tpl\default.php [ 6 ]
2011-12-23 06:50:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: base_url ~ APPPATH\views\tpl\default.php [ 6 ]
--
#0 D:\usr\www\khp\application\views\tpl\default.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\khp\...', 6, Array)
#1 D:\usr\www\khp\system\classes\kohana\view.php(61): include('D:\usr\www\khp\...')
#2 D:\usr\www\khp\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\khp\...', Array)
#3 D:\usr\www\khp\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-23 06:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-23 06:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-23 06:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-23 06:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL khp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-23 07:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.16.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-23 07:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.16.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-23 07:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery-1.6.2.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-23 07:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery-1.6.2.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-23 07:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery-1.6.2.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-23 07:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery-1.6.2.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#1 {main}