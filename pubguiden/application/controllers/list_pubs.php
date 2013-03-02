<?php

class List_Pubs_Controller extends Base_Controller {
	
	public $restful = true;

	public function get_top20()
	{		
		$pub_ratings = array();
		foreach (Pub::with('rating')->get() as $pub)
		{
			$food_rating = $this->avg($pub->rating, 'food');
			$assortments_rating = $this->avg($pub->rating, 'assortments');
			$place_rating = $this->avg($pub->rating, 'place');
			$service_rating = $this->avg($pub->rating, 'service');
			$atmosphere_rating = $this->avg($pub->rating, 'atmosphere');

			$total_rating = round( ($service_rating + $atmosphere_rating + $food_rating + $place_rating + $assortments_rating)/5, 1);
		
			$pub_with_rating = array("name" => $pub->name, "id" => $pub->id, "rating" => $total_rating, "service" => $service_rating, "atmosphere" => $atmosphere_rating, "food" => $food_rating, "place" => $place_rating, "assortments" => $assortments_rating);
			array_push( $pub_ratings, $pub_with_rating);
		}
		return View::make('list_pubs.top20')
				->with('pub_ratings', $pub_ratings);
	}

	public function get_top_list_atmosphere()
	{   
		$pub_ratings = array();
		foreach (Pub::with('rating')->get() as $pub){
			$atmosphere_rating = $this->avg($pub->rating, 'atmosphere');
			$pub_with_rating = array("name" => $pub->name, "id" => $pub->id, "atmosphere" => $atmosphere_rating);
			array_push( $pub_ratings, $pub_with_rating);
		}
		return View::make('list_pubs.atmosphere')
				->with('pub_ratings', $pub_ratings);
	}

	public function get_top_list_food()
	{   
		$pub_ratings = array();
		foreach (Pub::with('rating')->get() as $pub){
			$food_rating = $this->avg($pub->rating, 'food');
			$pub_with_rating = array("name" => $pub->name, "id" => $pub->id, "food" => $food_rating);
			array_push( $pub_ratings, $pub_with_rating);
		}
		return View::make('list_pubs.food')
				->with('pub_ratings', $pub_ratings);
	}

	public function get_top_list_service()
	{   
		$pub_ratings = array();
		foreach (Pub::with('rating')->get() as $pub){
			$service_rating = $this->avg($pub->rating, 'service');
			$pub_with_rating = array("name" => $pub->name, "id" => $pub->id, "service" => $service_rating);
			array_push( $pub_ratings, $pub_with_rating);
		}
		return View::make('list_pubs.service')
				->with('pub_ratings', $pub_ratings);
	}

	public function get_top_list_place()
	{   
		$pub_ratings = array();
		foreach (Pub::with('rating')->get() as $pub){
			$place_rating = $this->avg($pub->rating, 'place');
			$pub_with_rating = array("name" => $pub->name, "id" => $pub->id, "place" => $place_rating);
			array_push( $pub_ratings, $pub_with_rating);
		}
		return View::make('list_pubs.place')
				->with('pub_ratings', $pub_ratings);
	}	

	public function get_top_list_assortments()
	{   
		$pub_ratings = array();
		foreach (Pub::with('rating')->get() as $pub){
			$assortments_rating = $this->avg($pub->rating, 'assortments');
			$pub_with_rating = array("name" => $pub->name, "id" => $pub->id, "assortments" => $assortments_rating);
			array_push( $pub_ratings, $pub_with_rating);
		}
		return View::make('list_pubs.assortments')
				->with('pub_ratings', $pub_ratings);
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
				case 'assortments':
					$result += $rating->assortments;
					break;
				case 'place':
					$result += $rating->place;
					break;
				case 'service':
					$result += $rating->service;
					break;
				case 'atmosphere':
					$result += $rating->atmosphere;
					break;				
				
				default:
					$result += 1;
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
