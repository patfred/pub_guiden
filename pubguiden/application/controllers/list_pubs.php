<?php

class List_Pubs_Controller extends Base_Controller {
	
	public $restful = true;

	public function get_top20()
	{		
		$pub_ratings = array();
		foreach (Pub::with('rating')->get() as $pub)
		{
			array_push( $pub_ratings, $this->avg($pub->rating, 'food'));
			
		}

		return View::make('list_pubs.top20')
				->with('pub_ratings', serialize($pub_ratings) );	
	}

	

	public function avg($ratings, $field)
	{
		$i = 0;
		$result = 0;
		foreach ($ratings as $rating)
		{
			switch ($field) {
				case 'food':
					$result += $rating->food;
					break;
				
				default:
					# code...
					break;
			}
			
			$i++;
		}
		$result /= $i;
		return $result;
	}

	public function get_nearestPubs()
	{		
		return View::make('list_pubs.nearestPubs')
				->with('pubs', Pub::all());	
	}
	public function get_categories() 
	{
		return View::make('list_pubs.categories');		
	}

	public function get_quiz() 
	{
		$pubs = Pub::where('quiz', '=', 1)->get();

		return View::make('list_pubs.quiz')
		->with('pubs', $pubs);
	}
	public function get_afterwork() 
	{
		$pubs = Pub::where('after_work', '=', 1)->get();

		return View::make('list_pubs.afterwork')
		->with('pubs', $pubs);
	}
}
