<?php defined('SYSPATH') or die('No direct script access.');

class Controller_File extends Controller {

	public function action_upload()
	{
		if (Fileupload::exists())
		{
			$pathinfo 	= pathinfo(Fileupload::name());
			$filename 	= $pathinfo['filename'];
			$ext 		= $pathinfo['extension'];
			
			//$saveName 	= md5($filename.Fileupload::size().$_GET['customer']).'.'.$ext;
			$saveName 	= md5($filename.Fileupload::size()).'.'.$ext;
						
			if (Fileupload::save($saveName))
			{
				//$storage = ORM::factory('storage');
				//$storage->filename = $saveName;
				//$storage->save();
			}
		}
	}
}