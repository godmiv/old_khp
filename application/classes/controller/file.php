<?php defined('SYSPATH') or die('No direct script access.');

class Controller_File extends Controller {

	public function action_form() {
		$data['test'] = 'Форма загрузки файлов';
		$this->response->body(View::factory('file/upload',$data));
	}

	public function action_upload()
	{
		echo '<pre>';
		print_r($_POST);
		print_r($_FILES);
		echo date('Y/m/d');
		echo '</pre>';
		$pathname = 'upload/';
		$sess = Session::instance()->as_array();
		if(!isset ($sess['user'])){
			die('Пользователь не залогинен, нужно отсекать это раньше, а не во время записи файла.');
		} else {
			$pathname .= date('Y/m/d'). '/' . Arr::get($_POST, 'selectedrow') . '/';
			$uploadfile = $pathname . basename($_FILES['userfile']['name']);
			echo $pathname;
			if(!is_dir($pathname)) mkdir($pathname,0,true);
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
				echo "Файл корректен и был успешно загружен.\n";
			} else {
				echo "Файл не сохранен, чтото пошло не так... \n";
			}
		}

	}
}