<?php defined('SYSPATH') or die('No direct script access.');

class Controller_File extends Controller {

	public function action_form() {
		$data['test'] = 'Форма загрузки файлов';
		$this->response->body(View::factory('file/upload',$data));
	}

	public function action_upload()
	{
		
	}
}