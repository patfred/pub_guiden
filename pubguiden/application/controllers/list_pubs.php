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
}