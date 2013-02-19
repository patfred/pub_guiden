<?php

class Admins_Controller extends Base_Controller {

 	public $restful = true;

	public function get_index()
	{	
		return View::make('admins.index');
	}

	public function get_create()
	{	
		return View::make('admins.create')
			->with('title', 'add new pub');
	}

	public function post_create()
	{	
		Pub::create(array(
			'name'=>Input::get('name'),
			'description'=>Input::get('description'),
			'quiz'=>Input::get('quiz'),
			'after_work'=>Input::get('after_work'),
			'lowest_price'=>Input::get('lowest_price'),
			'address'=>Input::get('address')
		));
		return Redirect::to_route('admins')
			->with('message', 'Pub tillagd');
	}

	public function get_update()
	{	
		return View::make('admins.update')
			->with('title', 'Redigera en pub');
	}
}
