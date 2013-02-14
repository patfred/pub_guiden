<?php

class Search_Controller extends Base_Controller {
	
	public $restful = true;

	public function get_index() {
		return View::make('search.index')
			->with('title', 'Title');
	}

	public function post_search(){
		
		$search_string = Input::get('search_string');

		return View::make('search.index')
			->with('title', 'Sökresultat')
			->with('notification', 'du har gjort en sökning');
	}

	public function get_result($search_string){

	}
}