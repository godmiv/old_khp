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
		$query = 'SELECT products.*, products_types.name as type FROM products LEFT JOIN products_types ON products.type_id=products_types.id where products.parrent_id= '.$parrent_id.' ORDER BY '.$sidx.' '.$sord.' LIMIT '.$start.','.$limit;
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
			$s .= "<cell>". $row['id']."</cell>";
			$s .= "<cell>". $row['parrent_id']."</cell>";
			$s .= "<cell>". $row['type_id']."</cell>";
			$s .= "<cell>". $row['name']."</cell>";
			$s .= "<cell>". $row['code']."</cell>";
			$s .= "<cell>". $row['type']."</cell>";
			$s .= "</row>";
		}
		$s .= "</rows>";
		$this->response->body($s);
	}

	public function action_index()
	{
		//$query = 'SHOW TABLES';
		$query = 'SELECT products.*, products_types.name as type FROM products LEFT JOIN products_types ON products.type_id=products_types.id where products.parrent_id=0';
		$data['test'] = DB::query(Database::SELECT,$query)->execute()->as_array();
		$data['test']->count();
		$this->template->content = View::factory('welcome',$data);
	}

} // End Welcome