<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-15 05:47:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'numstart' at row 1 [ INSERT INTO `codifier_instr` (`name`, `numstart`, `numend`, `sokr`) VALUES ('ММ', '', '', 'ММ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-15 05:47:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'numstart' at row 1 [ INSERT INTO `codifier_instr` (`name`, `numstart`, `numend`, `sokr`) VALUES ('ММ', '', '', 'ММ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\usr\www\khp\application\classes\model\helper.php(69): Kohana_Database_Query->execute()
#2 D:\usr\www\khp\application\views\order\start.php(65): Model_helper->instrCodToDB()
#3 D:\usr\www\khp\system\classes\kohana\view.php(61): include('D:\usr\www\khp\...')
#4 D:\usr\www\khp\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\khp\...', Array)
#5 D:\usr\www\khp\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\usr\www\khp\application\views\tpl\default.php(20): Kohana_View->__toString()
#7 D:\usr\www\khp\system\classes\kohana\view.php(61): include('D:\usr\www\khp\...')
#8 D:\usr\www\khp\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\khp\...', Array)
#9 D:\usr\www\khp\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Order))
#12 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#15 {main}
2012-02-15 05:52:01 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'numstart' at row 1 [ INSERT INTO `codifier_instr` (`name`, `numstart`, `numend`, `sokr`) VALUES ('ММ', '', '', 'ММ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-15 05:52:01 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'numstart' at row 1 [ INSERT INTO `codifier_instr` (`name`, `numstart`, `numend`, `sokr`) VALUES ('ММ', '', '', 'ММ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\usr\www\khp\application\classes\model\helper.php(70): Kohana_Database_Query->execute()
#2 D:\usr\www\khp\application\views\order\start.php(65): Model_helper->instrCodToDB()
#3 D:\usr\www\khp\system\classes\kohana\view.php(61): include('D:\usr\www\khp\...')
#4 D:\usr\www\khp\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\khp\...', Array)
#5 D:\usr\www\khp\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\usr\www\khp\application\views\tpl\default.php(20): Kohana_View->__toString()
#7 D:\usr\www\khp\system\classes\kohana\view.php(61): include('D:\usr\www\khp\...')
#8 D:\usr\www\khp\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\khp\...', Array)
#9 D:\usr\www\khp\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Order))
#12 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#15 {main}