<?php

class Admins_Controller extends Base_Controller {

 	public $restful = true;

	public function get_index()
	{	
		return View::make('admins.index');
	}

	public function get_crud()
	{	
		return View::make('admins.crud')
			->with('title', 'add new pub');
	}
}
