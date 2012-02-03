<?php
Class Model_helper extends Model
{
	public function instrIncr($string) //890-8371-9999x-001
	{
		$str = substr($string,0,13); //890-8371-9999
		$int = str_replace('-', '', $str); //89083719999
		$int++; //89083720000
		$str = substr($int,0,3).'-'.substr($int,3,4).'-'.substr($int,7,4); //890-8372-0000
		return $str.substr($string,13); //890-8372-0000x-001
	}
	
	public function instrCod()
	{
		$codificator = array(
			'mm'		=>array('name'=>'ММ',			'kods'=>'',		'kode'=>'',	'sokr'=>'ММ'),
			'elektrod'	=>array('name'=>'Электрод',		'kods'=>'7680',	'kode'=>'7857',	'sokr'=>'Э'),
			'shablon'	=>array('name'=>'Шаблон',		'kods'=>'8370',	'kode'=>'9999',	'sokr'=>'Ш'),
			'kalibr'	=>array('name'=>'Калибр',		'kods'=>'8130',	'kode'=>'8369',	'sokr'=>'Ка'),
			'rezec'		=>array('name'=>'Резец',		'kods'=>'2199',	'kode'=>'2298',	'sokr'=>'Р'),
			'freza'		=>array('name'=>'Фреза',		'kods'=>'2299',	'kode'=>'2299',	'sokr'=>'Ф'),
			'kopir'		=>array('name'=>'Копир-модель',	'kods'=>'7054',	'kode'=>'7098',	'sokr'=>'КпМ'),
			'prisp'		=>array('name'=>'Приспособление','kods'=>'7099','kode'=>'7308',	'sokr'=>'П'),
			'zenker'	=>array('name'=>'Зенкер',		'kods'=>'2339',	'kode'=>'2398',	'sokr'=>'З'),
			'razvertka'	=>array('name'=>'Развёртка',	'kods'=>'2399',	'kode'=>'2798',	'sokr'=>'Рз'),
			'opravka'	=>array('name'=>'Оправка',		'kods'=>'6299',	'kode'=>'7053',	'sokr'=>'О'),
			'rolik'		=>array('name'=>'Ролик',		'kods'=>'7990',	'kode'=>'8129',	'sokr'=>'Рол'),
			'sverlo'	=>array('name'=>'Сверло',		'kods'=>'2300',	'kode'=>'2338',	'sokr'=>'С'),
			'konduktor'	=>array('name'=>'Кондуктор',	'kods'=>'7309',	'kode'=>'7679',	'sokr'=>'К'),
			'pritir'	=>array('name'=>'Притир',		'kods'=>'2799',	'kode'=>'6298',	'sokr'=>'Пт'),
			'davilnik'	=>array('name'=>'Давильник',	'kods'=>'1479',	'kode'=>'1498',	'sokr'=>'Д'),
			'pressforma'=>array('name'=>'Прессформа',	'kods'=>'1499',	'kode'=>'1548',	'sokr'=>'Пф'),
			'eho'		=>array('name'=>'ЭХО',			'kods'=>'0793',	'kode'=>'0798',	'sokr'=>'ЭХО'),
			'prosechka'	=>array('name'=>'Просечка',		'kods'=>'1549',	'kode'=>'2198',	'sokr'=>'Пр'),
			'tara'		=>array('name'=>'Тара',			'kods'=>'1039',	'kode'=>'1478',	'sokr'=>'Т'),
			'kleymo'	=>array('name'=>'Клеймо',		'kods'=>'7858',	'kode'=>'7989',	'sokr'=>'Кл'),
			'raznoe'	=>array('name'=>'Разное (терм)','kods'=>'0799',	'kode'=>'1038',	'sokr'=>'Ра')
		);
		//return $this->sortByOneKey($codificator, 'kods');
		return $codificator;
	}
	
	function sortByOneKey(array $array, $key, $asc = true) {
		$result = array();

		$values = array();
		foreach ($array as $id => $value) {
			$values[$id] = isset($value[$key]) ? $value[$key] : '';
		}

		if ($asc) {
			asort($values);
		}
		else {
			arsort($values);
		}
         
		foreach ($values as $key => $value) {
			$result[$key] = $array[$key];
		}
		return $result;
	}
}
