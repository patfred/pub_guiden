<?php

class Pubs_Controller extends Base_Controller {
	public $restful = true;

	public function get_index($id){

		$pub = Pub::find($id);

		$comments = Comment::where_pub_id($pub->id)->order_by('created_at', 'desc')->get();

		$ratings_service = round(Rating::where_pub_id($pub->id)->avg('service'), 1);
		$ratings_atmosphere = round(Rating::where_pub_id($pub->id)->avg('atmosphere'), 1);
		$ratings_food = round(Rating::where_pub_id($pub->id)->avg('food'), 1);
		$ratings_place = round(Rating::where_pub_id($pub->id)->avg('place'), 1);
		$ratings_assortments = round(Rating::where_pub_id($pub->id)->avg('assortments'), 1);
		
		$total_rating = round(($ratings_service + $ratings_atmosphere + $ratings_food + $ratings_place + $ratings_assortments)/5, 1);

		return View::make('pubs.index')
			->with('title', 'Detta är en pub')
			->with('pub', $pub)
			->with('comments', $comments)
			->with('ratings', $total_rating) 
			->with('service', $ratings_service)
			->with('atmosphere', $ratings_atmosphere)
			->with('food', $ratings_food)
			->with('place', $ratings_place)
			->with('assortments', $ratings_assortments);	
	}

	public static $rules = array(
        'comment' => 'required|min:10|max:300'
    );

	public function post_comment(){
		$validation = Validator::make( Input::all(), static::$rules );

		if ($validation->fails()){
			return Redirect::back()->with('message', 'Något gick fel, försök igen!');
		}

		$user_comment =array(
				'pub_id' => Input::get('pub_id'), 
				'user_id' => Input::get('user_id'), 
				'comment' => e(Input::get('comment')
		));

		$comment = new Comment($user_comment);
	    $comment->save();
	    	return Redirect::back()
				->with('message', 'Kommentar tillagd');
	}		
}