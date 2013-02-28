<?php

class List_Pubs_Controller extends Base_Controller {
	
	public $restful = true;

	public function get_top20()
	{		
		$pub_ratings = array();
		foreach (Pub::with('rating')->get() as $pub)
		{
			array_push( $pub_ratings, $this->avg($pub->rating, 'food'));
			/*$food_rating = $pub->rating->avg('food');
			/*$assortments_rating = $pub->rating->avg( 'assortments' );
			$place_rating = $pub->rating->avg( 'place' );
			$service_rating = $pub->rating->avg( 'service' );
			$atmosphere_rating = $pub->rating->avg( 'atmosphere' );
			$total_rating = round( ($service_rating + $atmosphere_rating + $food_rating + $place_rating + $assortments_rating)/5, 1);
		
			$pub_with_rating = new Pub_with_rating($pub->name, $pub->id, $total_rating, $service_rating, $atmosphere_rating, $food_rating, $place_rating, $assortments_rating);
			array_push( $pub_ratings, $pub_with_rating);*/
		}

		return View::make('list_pubs.top20')
				->with('pub_ratings', serialize($pub_ratings) );	
	}

	public function get_nearestPubs()
	{		
		return View::make('list_pubs.nearestPubs')
				->with('pubs', Pub::all());	
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
	public function get_categories() 
	{
		return View::make('list_pubs.categories');		
	}

	public function get_top_list_service()
	{   
		$rate_category = 'service';
		$category = 'service';
		$pubs = Pub::all();
		foreach ($pubs as $pub){
		$pub_rating = Rating::where_pub_id($pub->id)->avg('service');
		}
		//$top_rates = Pub::join('ratings', 'pub_id', '=', 'pubs.id')->order_by('service', 'desc')->get(array('pubs.name'));
		return View::make('list_pubs.top_list')
		//->with('pub_rating', $pub_rating)
		->with('pubs', $pubs)
		->with('rate_category', $rate_category)
		->with('pub_rating', $pub_rating)
		->with('category', $category);
	}

	public function get_top_list_atmosphere()
	{   
		$rate_category = 'atmosphere';
		$category = 'atmosfär';
		$pubs = Pub::all();
		return View::make('list_pubs.top_list')
		->with('pubs', $pubs)
		->with('rate_category', $rate_category)
		->with('category', $category);
	}

	public function get_top_list_food()
	{   
		$category = 'mat';
		$top_rates = Pub::join('ratings', 'pubs.id', '=', 'pub_id')->order_by('food', 'desc')->get(array('pubs.name'));

		return View::make('list_pubs.top_list')
		->with('top_rates', $top_rates)
		->with('category', $category);
	}

		public function get_top_list_place()
	{   
		$category = 'lokal';
		$top_rates = Pub::join('ratings', 'pubs.id', '=', 'pub_id')->order_by('place', 'desc')->get(array('pubs.name', ));

		return View::make('list_pubs.top_list')
		->with('top_rates', $top_rates)
		->with('category', $category);
	}

		public function get_top_list_assortments()
	{   
		$category = 'utbud';
		$top_rates = Pub::join('ratings', 'pubs.id', '=', 'pub_id')->order_by('assortments', 'desc')->get(array('pubs.name'));

		return View::make('list_pubs.top_list')
		->with('top_rates', $top_rates)
		->with('category', $category);
	}
}
