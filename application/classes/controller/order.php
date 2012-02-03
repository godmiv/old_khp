<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Order extends Controller_Template {

	public $template = 'tpl/default';

	public function action_start() {

		$data['title'] = 'Открытие заказа';

		$data['form_osn'] = array(
			'detalavto'	=>array('name'=>'detalavto','value'=>'','attr'=>array('desc'=>'Деталь автомобиля')),
			'nazvdet'	=>array('name'=>'nazvdet',	'value'=>'','attr'=>array('desc'=>'Название детали')),
			'nosnas'	=>array('name'=>'nosnas',	'value'=>'','attr'=>array('desc'=>'Шифр оснастки')),
			'nizv'		=>array('name'=>'nizv',		'value'=>'','attr'=>array('desc'=>'Извещение оснастки')),
			);

		$data['form_ins'] = array(
			'kodinstr'	=>array('name'=>'kodinstr',	'value'=>'','attr'=>array('desc'=>'Код инструмента')),
			'nizvins'	=>array('name'=>'nizvins',	'value'=>'','attr'=>array('desc'=>'Извещение инструмента')),
			);

		$data['form_all'] = array(
			'osin'=>array(
				'name'=>'osin',
				'options'=>array(
					//NULL=>'','O'=>'Оснастка','E'=>'Электрод','S'=>'Шаблон','K'=>'Копир'
					'O'=>'Оснастка','E'=>'Электрод','S'=>'Шаблон','K'=>'Копир'
					),
				'attr'=>array(
					'desc'=>'Тип изделия',
					'selected'=>'O',
					'id'=>'osin',
					)
				)
			);
		$query = 'SELECT * FROM orders LIMIT 1';
		$result = DB::query(Database::SELECT,$query)->execute()->as_array();
		$data['columns'] = array_keys($result[0]);
		$this->template->content = View::factory('order/start',$data);
	}
}