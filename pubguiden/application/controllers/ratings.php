<?php

class Ratings_Controller extends Base_Controller {


	public function action_index($id)
	{
		$this->filter('before', 'auth');
		$pubs = Pub::where('id', '=', $id)->get();
		return View::make('ratings.index')
		->with('pubs', $pubs);
		
	}
}
