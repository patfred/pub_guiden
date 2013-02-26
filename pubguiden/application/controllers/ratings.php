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

	$uid = Input::get('user_id');
	$pubid = Input::get('pub_id');
	$existing_rows = Rating::where_user_id_and_pub_id($uid, $pubid);
	$count_existing_rows = $existing_rows->count();

	//If row exist with this user_id and pub_id update rating columns 	 
		if($count_existing_rows > 0) {
			$id = $existing_rows->first();
			   $id->service = Input::get('service');
			   $id->atmosphere = Input::get('atmosphere');
			   $id->food = Input::get('food');
			   $id->place = Input::get('place');
			   $id->assortments = Input::get('assortments');
			$id->save();   
			return Redirect::back()
				->with('message', 'Betyg uppdaterat');
		} else {
		//If new rating save	 	
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
}
