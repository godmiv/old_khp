<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Order extends Controller_Template {

	public $template = 'tpl/default';

	public function action_start(){

		$data['title'] = 'Открытие заказа';

		$data['form_osn'] = array(
			'detalavto'	=>array('name'=>'detalavto','value'=>'','attr'=>array('desc'=>'Деталь автомобиля', 'id'=>'detalavto')),
			'nazvdet'	=>array('name'=>'nazvdet',	'value'=>'','attr'=>array('desc'=>'Название детали', 'id'=>'nazvdet')),
			'nosnas'	=>array('name'=>'nosnas',	'value'=>'','attr'=>array('desc'=>'Шифр оснастки', 'id'=>'nosnas')),
			'nizv'		=>array('name'=>'nizv',		'value'=>'','attr'=>array('desc'=>'Извещение оснастки', 'id'=>'nizv')),
			);

		$data['form_ins'] = array(
			'kodinstr'	=>array('name'=>'kodinstr',	'value'=>'','attr'=>array('desc'=>'Код инструмента', 'id'=>'kodinstr', 'readonly'=>'readonly')),
			'nizvins'	=>array('name'=>'nizvins',	'value'=>'','attr'=>array('desc'=>'Извещение инструмента', 'id'=>'nizvins')),
			);

		/*
		 * Колонки, отображаемые в таблице.
		 */
		$columns=array(
			'id'=>array('ID','30'),
			'number'=>array('№ заказа','70'),
			'status'=>array('Статус','70'),
			'detalavto'=>array('Деталь автомобиля','150'),
			'nazvdet'=>array('Название детали','150'),
			'nosnas'=>array('Шифр оснастки','250'),
			'nizv'=>array('Изв. оснастки','100'),
			'kodinstr'=>array('Шифр инструмента','250'),
			'nizins'=>array('Изв. истр.','100'),
			'date_start'=>array('Дата выдачи заказа','100'),
			'date_end'=>array('Дата сдачи заказа','100'),
		);

		$data['columns'] = $columns;
		foreach ($columns as $key=>$val){
			$data['colnames'][] = $val[0];
		}

		//$query = 'SELECT * FROM codifier_instr';
		$query = DB::select()->from('codifier_instr');
		$data['codifier_instr'] = $result = DB::query(Database::SELECT,$query)->execute()->as_array();

		if(isset($_POST['add'])){
			$post = Validation::factory($_POST);
			if($_POST['osin'] == 1){
				$post->rule('nosnas', 'not_empty');
				$post->rule('nosnas', 'Model_Helper::validateNosnas');
			} else {
				$post->rule('kodinstr', 'not_empty');
			}
			$post->rule('nazvdet', 'not_empty');
			if($post->check()){
				$query = DB::insert('orders', array('detalavto','nazvdet','nosnas','nizv','kodinstr','nizvins'))
						->values(array(
							Arr::get($_POST, 'detalavto'),
							Arr::get($_POST, 'nazvdet'),
							Arr::get($_POST, 'nosnas'),
							Arr::get($_POST, 'nizv'),
							Arr::get($_POST, 'kodinstr'),
							Arr::get($_POST, 'nizvins')
							));
				$query->execute();
				Request::current()->redirect('order/start');
			} else {
				$data['errors']=$post->errors('');
				//$this->template->content = 'Ошибка добавления записи в базу.';
			}
		}

		$this->template->content = View::factory('order/start',$data);
	}
	/*
	 * Этот метод вызывается стандартными кнопками jqgrid
	 * При нажатии кнопки jqgrid посылает $_POST['oper'] который может содержать del, edit или add
	 */
	public function action_edit(){
		$this->auto_render = false;

		if($_POST['oper'] == 'del'){
			$query = DB::delete('orders')->where('id', '=', $_POST['id']);
			$query->execute();
		}

		if($_POST['oper'] == 'edit'){
			//print_r($_POST);
			$id = Arr::get($_POST,'id');
			$nosnas = Arr::get($_POST,'nosnas');
			$kodinstr = Arr::get($_POST, 'kodinstr');

			//$query="SELECT * FROM orders WHERE ((nosnas='".$nosnas."' AND kodinstr ='') OR (kodinstr = '".$kodinstr."')) AND id <> '".$id."'";
			//$result = DB::query(Database::SELECT,$query)->execute()->as_array();
			$query = DB::select()->from('orders');
			$query->where_open()
				->where_open()
				->where('nosnas','=',$nosnas)
				->and_where('kodinstr', '=', '')
				->where_close()
				->where_open()
				->or_where('kodinstr', '=', $kodinstr)
				->where_close()
				->where_close()
				->and_where('id', '<>', $id);
			$result = $query->execute()->as_array();
			//print_r($query);
			if(empty ($result)){
				$query = DB::update('orders')
						->set(array('kodinstr' => Arr::get($_POST,'kodinstr'),
									'nosnas' => Arr::get($_POST,'nosnas'),
									'nazvdet' => Arr::get($_POST,'nazvdet'),
							))
						->where('id', '=', $id);
				$query->execute();
			}
		}
		$this->response->body($_POST['oper']);
	}

	public function action_jqgrid(){

		$this->auto_render = false;
		$page = $_POST['page'];
		$limit = $_POST['rows'];
		$sidx = $_POST['sidx'];
		$sord = $_POST['sord'];
		if(!$sidx) $sidx =1;
		// calculate the number of rows for the query. We need this for paging the result
		//$query = 'SELECT * FROM orders WHERE number IS NULL';
		$query = DB::select()->from('orders')->where('number', 'IS', NULL);
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
		//$query = 'SELECT * FROM orders WHERE number IS NULL ORDER BY '.$sidx.' '.$sord.' LIMIT '.$start.','.$limit;
		//$result = DB::query(Database::SELECT,$query)->execute()->as_array();
		$query = DB::select()->from('orders')->where('number','IS',NULL)->order_by($sidx, $sord)->limit($limit)->offset($start);
		$result =$query->execute()->as_array();

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

	public function action_orders(){

		$this->auto_render = false;
		$page = $_POST['page'];
		$limit = $_POST['rows'];
		$sidx = $_POST['sidx'];
		$sord = $_POST['sord'];
		if(!$sidx) $sidx =1;
		// calculate the number of rows for the query. We need this for paging the result
		//$query = 'SELECT * FROM orders WHERE number IS NOT NULL';
		//$count = DB::query(Database::SELECT,$query)->execute()->count();
		$query = DB::select()->from('orders')
				->where('number', 'IS NOT', NULL);
		$count = $query->execute()->count();
		
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
		//$query = 'SELECT * FROM orders WHERE number IS NOT NULL ORDER BY '.$sidx.' '.$sord.' LIMIT '.$start.','.$limit;
		//$result = DB::query(Database::SELECT,$query)->execute()->as_array();
		$query = DB::select()->from('orders')->where('number','IS NOT', NULL)->order_by($sidx,$sord)->limit($limit)->offset($start);
		$result = $query->execute()->as_array();
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

	public function action_addtoorder(){
		$this->auto_render = false;
		if(!empty($_POST)){
			$ids = explode(',', $_POST['ids']);
			$query = DB::select(array('max("number")', 'maxnum'))->from('orders');
			$result = $query->execute()->as_array();
			$nextnum = $result[0]['maxnum'] + 1;
			if(!empty($_POST['order'])) $nextnum = Arr::get ($_POST, 'order');
			$query = DB::update('orders')->set(array('number' => $nextnum))->where('id', 'IN', $ids);
			$query->execute();
			echo 'ok';
		} else {
			echo 'Не выбрана ни одна деталь';
		}
 	}
	public function action_delfromorder(){
		$this->auto_render = false;
		if(!empty($_POST)){
			$ids = explode(',', $_POST['ids']);
			$query = DB::update('orders')->set(array('number' => NULL))->where('id', 'IN', $ids);
			$query->execute();
			echo 'ok';
		} else {
			echo 'Не выбрана ни одна деталь';
		}
	}

}