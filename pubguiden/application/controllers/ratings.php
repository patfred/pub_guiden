<?php

class Ratings_Controller extends Base_Controller {


	public function action_index($id)
	{
		$pubs = Pub::where('id', '=', $id)->get();
		return View::make('ratings.index')
			->with('pubs', $pubs);
		
	}
}
