<?php defined('SYSPATH') or die('No direct script access.');

class Controller_jgrid extends Controller {

	public function action_test()
	{
		if($this->request->param('id') == '') $parrent_id = 0;
		else $parrent_id = $this->request->param('id');
		$this->auto_render = false;
		
		// to the url parameter are added 4 parameters as described in colModel
		// we should get these parameters to construct the needed query
		// Since we specify in the options of the grid that we will use a GET method 
		// we should use the appropriate command to obtain the parameters. 
		// In our case this is $_GET. If we specify that we want to use post 
		// we should use $_POST. Maybe the better way is to use $_REQUEST, which
		// contain both the GET and POST variables. For more information refer to php documentation.
		// Get the requested page. By default grid sets this to 1. 
		$page = $_POST['page'];

		// get how many rows we want to have into the grid - rowNum parameter in the grid 
		$limit = $_POST['rows'];

		// get index row - i.e. user click to sort. At first time sortname parameter -
		// after that the index from colModel 
		$sidx = $_POST['sidx'];

		// sorting order - at first time sortorder 
		$sord = $_POST['sord'];

		// if we not pass at first time index use the first column for the index or what you want
		if(!$sidx) $sidx =1;
 
		// calculate the number of rows for the query. We need this for paging the result 
		$query = 'SELECT products.*, products_types.name as type FROM products LEFT JOIN products_types ON products.type_id=products_types.id where products.parrent_id='.$parrent_id;
		$count = DB::query(Database::SELECT,$query)->execute()->count();

		// calculate the total pages for the query 
		if( $count > 0 && $limit > 0) { 
			$total_pages = ceil($count/$limit); 
		} else { 
			$total_pages = 0; 
		} 

		// if for some reasons the requested page is greater than the total 
		// set the requested page to total page 
		if ($page > $total_pages) $page=$total_pages;

		// calculate the starting position of the rows 
		$start = $limit*$page - $limit;

		// if for some reasons start position is negative set it to 0 
		// typical case is that the user type 0 for the requested page 
		if($start <0) $start = 0; 
		$query = 'SELECT
			products.id as id,
			products.name as name,
			products.code as code,
			products_types.name as type
			FROM products 
			LEFT JOIN products_types 
			ON products.type_id=products_types.id 
			WHERE products.parrent_id= '.$parrent_id.' ORDER BY '.$sidx.' '.$sord.' LIMIT '.$start.','.$limit;
		$result = DB::query(Database::SELECT,$query)->execute()->as_array();

		// we should set the appropriate header information. Do not forget this.
		$this->response->headers['Content-type'] = 'text/xml;charset=utf-8';//("Content-type: text/xml;charset=utf-8");

		$s = "<?xml version='1.0' encoding='utf-8'?>";
		$s .=  "<rows>";
		$s .= "<page>".$page."</page>";
		$s .= "<total>".$total_pages."</total>";
		$s .= "<records>".$count."</records>";
 
		// be sure to put text data in CDATA
		foreach($result as $row){
			$s .= "<row id='". $row['id']."'>";
			$s .= "<cell></cell>"; //это для пустой колонки Actions - если не передать пустое значение -в jqgrid колонки сдвигаются, получается каша
			$s .= "<cell><![CDATA[". $row['id']."]]></cell>";
			//$s .= "<cell><![CDATA[". $row['parrent_id']."]]></cell>";
			//$s .= "<cell><![CDATA[". $row['type_id']."]]></cell>";
			$s .= "<cell><![CDATA[". $row['name']."]]></cell>";
			$s .= "<cell><![CDATA[". $row['code']."]]></cell>";
			$s .= "<cell><![CDATA[". $row['type']."]]></cell>";
			$s .= "</row>";
		}
		$s .= "</rows>";
		$this->response->body($s);
	}
	public function action_save()
	{
		$post = arr::extract($_POST, array('id','name','code','type'));
		$query = DB::update('products')->set(array('name' => $post['name'], 'code'=>$post['code']))->where('id', '=', $post['id']);
		$query->execute();
	}
	public function action_add()
	{
		
	}
	public function action_del()
	{
		
	}
	public function action_order()
	{
		$this->auto_render = false;
		$page = $_POST['page'];
		$limit = $_POST['rows'];
		$sidx = $_POST['sidx'];
		$sord = $_POST['sord'];
		if(!$sidx) $sidx =1;
 
		// calculate the number of rows for the query. We need this for paging the result 
		$query = 'SELECT * FROM orders';
		$count = DB::query(Database::SELECT,$query)->execute()->count();

		// calculate the total pages for the query 
		if( $count > 0 && $limit > 0) { 
			$total_pages = ceil($count/$limit); 
		} else { 
			$total_pages = 0; 
		} 

		// if for some reasons the requested page is greater than the total 
		// set the requested page to total page 
		if ($page > $total_pages) $page=$total_pages;

		// calculate the starting position of the rows 
		$start = $limit*$page - $limit;

		// if for some reasons start position is negative set it to 0 
		// typical case is that the user type 0 for the requested page 
		if($start <0) $start = 0; 
		$query = 'SELECT * FROM orders ORDER BY '.$sidx.' '.$sord.' LIMIT '.$start.','.$limit;
		$result = DB::query(Database::SELECT,$query)->execute()->as_array();

		// we should set the appropriate header information. Do not forget this.
		$this->response->headers['Content-type'] = 'text/xml;charset=utf-8';//("Content-type: text/xml;charset=utf-8");

		$s = "<?xml version='1.0' encoding='utf-8'?>";
		$s .= "<rows>";
		$s .= "<page>".$page."</page>";
		$s .= "<total>".$total_pages."</total>";
		$s .= "<records>".$count."</records>";
 
		$fields = array_keys($result[0]);
		//print_r($fields);
		// be sure to put text data in CDATA
		foreach($result as $row){
			$s .= "<row id='". $row['id']."'>";
			//$s .= "<cell></cell>"; //это для пустой колонки Actions - если не передать пустое значение -в jqgrid колонки сдвигаются, получается каша

			foreach($fields as $key=>$val) {
				$s .= "<cell><![CDATA[". $row[$val]."]]></cell>";
			}

			$s .= "</row>";
		}
		$s .= "</rows>";
		$this->response->body($s);
	}
}