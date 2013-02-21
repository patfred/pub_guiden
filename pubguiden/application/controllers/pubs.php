<?php

class Pubs_Controller extends Base_Controller {
	public $restful = true;

	public function get_index($id){

		$pub = Pub::find($id);

		$comments = Comment::where_pub_id($pub->id)->order_by('created_at', 'desc')->get();

		return View::make('pubs.index')
			->with('title', 'Detta är en pub')
			->with('pub', $pub)
			->with('comments', $comments);
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