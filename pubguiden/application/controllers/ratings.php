<?php

class Ratings_Controller extends Base_Controller {

 	public $restful = true; 

	public function get_index($id)
	{
		$pubs = Pub::where('id', '=', $id)->get();
		return View::make('ratings.index')
			->with('pubs', $pubs);
	}

	public function post_ratings(){
			$user_rating = array(
			   'pub_id' => Input::get('pub_id'),
			   'user_id' => Input::get('user_id'),
			   'service' => Input::get('service'),
			   'atmosphere' => Input::get('atmosphere'),
			   'food' => Input::get('food'),
			   'place' => Input::get('place'),
			   'assortments' => Input::get('assortments'),
			);

		$rating = new Rating($user_rating);
	    
	    $rating->save();
	    	return Redirect::back()
				->with('message', 'Betyg tillagt');
	}
}
