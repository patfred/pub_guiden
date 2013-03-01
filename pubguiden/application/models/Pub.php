<?php

class Pub extends Eloquent {
	// public static $table = 'pubs'; kanske inte behövs
	public static $rules = array(
         'name' => array('required', 'min:2'),
         'description' => array('required', 'min:2'),
         'quiz' => array('required'),
         'after_work' => array('required'),
         'lowest_price' => array('required', 'numeric'),
         'address' => array('required', 'min:2')
     );

	public static function validate($data){
		return Validator::make($data, static::$rules);
	}
	public function rating()
	{
		return $this->has_many('Rating');
	}

	public function comment()
	{
		return $this->has_many('Comment');
	}
}
class Pub_with_rating {
	var $name;
	var $id;
	var $rating;
	var $service_rating;
	var $atmosphere_rating;
	var $food_rating;
	var $place_rating;
	var $assortments_rating;
	function Pub_with_rating($name, $id, $rating, $service_rating, $atmosphere_rating, $food_rating, $place_rating, $assortments_rating)
    {
	    $this->name = $name;
		$this->id = $id;
		$this->rating = $rating;
		$this->service_rating= $service_rating;
		$this->atmosphere_rating= $atmosphere_rating;
		$this->food_rating = $food_rating;
		$this->place_rating = $place_rating;
		$this->assortments_rating = $assortments_rating;
    }
}

	
