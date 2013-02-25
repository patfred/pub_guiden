<?php

class Search_Controller extends Base_Controller {
	
	public $restful = true;

	public function post_index(){
		$search_string = Input::get('search_string');
		if ($search_string == 'quiz') {			
			$results = Pub::where('quiz', '=', 1)->get();			
		}
		else if ($search_string == 'after work') {
			$results = 	Pub::where('after_work', '=', 1)->get();	
		}
		else {
			$results = Pub::where('name', 'LIKE', '%'.$search_string.'%')->or_where('description', 'LIKE', '%'.$search_string.'%')->get();
		}
		return View::make('search.index')
		->with('title', 'Sökresultat')
		->with('search_string', $search_string)
		->with('results', $results);
	}
}