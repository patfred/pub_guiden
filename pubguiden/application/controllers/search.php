<?php

class Search_Controller extends Base_Controller {
	
	public $restful = true;

	public function post_index(){
		if(Input::get('search_string') != '') {
			$search_string = Input::get('search_string');
			$results = Pub::where('name', 'LIKE', '%'.$search_string.'%')->get();
			if($results) {
				return View::make('search.index')
					->with('title', 'Sökresultat')
					->with('search_string', $search_string)
					->with('results', $results);
			}
			else {
				return View::make('search/ooops');
			}
		}		
		else {
			return View::make('search/ooops');			
		}
	}	
}