<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-22 05:46:24 --- ERROR: Database_Exception [ 1066 ]: Not unique table/alias: 'products_types' [ SELECT * FROM products, products_types LEFT JOIN products_types ON products.type_id=products_types.id ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-22 05:46:24 --- STRACE: Database_Exception [ 1066 ]: Not unique table/alias: 'products_types' [ SELECT * FROM products, products_types LEFT JOIN products_types ON products.type_id=products_types.id ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\khp\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM p...', false, Array)
#1 D:\usr\www\khp\application\classes\controller\welcome.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Welcome->action_index()
#3 D:\usr\www\khp\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\usr\www\khp\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\khp\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\khp\index.php(109): Kohana_Request->execute()
#7 {main}