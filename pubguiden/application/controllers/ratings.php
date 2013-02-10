<?php

class Ratings_Controller extends Base_Controller {
	public function action_index()
	{
		return View::make('ratings.index');
	}
}
