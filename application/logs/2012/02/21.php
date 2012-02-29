<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-21 00:04:44 --- ERROR: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 7680 AND 7857 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-21 00:04:44 --- STRACE: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 7680 AND 7857 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT max ( SU...', false, Array)
#1 D:\usr\www\khp\application\classes\controller\ajax.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_ajax->action_nextnumber()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-21 00:17:54 --- ERROR: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 7680 AND 7857 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-21 00:17:54 --- STRACE: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 7680 AND 7857 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT max ( SU...', false, Array)
#1 D:\usr\www\khp\application\classes\controller\ajax.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_ajax->action_nextnumber()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-21 00:18:07 --- ERROR: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 8370 AND 9999 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-21 00:18:07 --- STRACE: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 8370 AND 9999 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT max ( SU...', false, Array)
#1 D:\usr\www\khp\application\classes\controller\ajax.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_ajax->action_nextnumber()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-21 00:22:15 --- ERROR: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 2199 AND 2298 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-21 00:22:15 --- STRACE: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 2199 AND 2298 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT max ( SU...', false, Array)
#1 D:\usr\www\khp\application\classes\controller\ajax.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_ajax->action_nextnumber()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-21 00:22:18 --- ERROR: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 7680 AND 7857 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-21 00:22:18 --- STRACE: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 7680 AND 7857 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT max ( SU...', false, Array)
#1 D:\usr\www\khp\application\classes\controller\ajax.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_ajax->action_nextnumber()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-21 00:26:37 --- ERROR: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 8130 AND 8369 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-21 00:26:37 --- STRACE: Database_Exception [ 1305 ]: FUNCTION khp.max does not exist [ SELECT max ( SUBSTRING_INDEX(kodinstr, "-", 3) ) as kodinstr FROM orders WHERE MID(kodinstr,5,4) BETWEEN 8130 AND 8369 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT max ( SU...', false, Array)
#1 D:\usr\www\khp\application\classes\controller\ajax.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_ajax->action_nextnumber()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ajax))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}