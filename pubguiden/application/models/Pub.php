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
	var $ratings_service;
	var $ratings_atmosphere;
	var $ratings_food;
	var $rating_place;
	var $rating_assortments;
	function Pub_with_rating($name, $id, $rating, $ratings_service,$ratings_atmosphere,$ratings_food,$rating_place,$rating_assortments)
    {
	    $this->name = $name;
		$this->id = $id;
		$this->rating = $rating;
		$this->ratings_service = $ratings_service;
		$this->ratings_atmosphere = $ratings_atmosphere;
		$this->ratings_food = $ratings_food;
		$this->rating_place = $rating_place;
		$this->rating_assortments = $rating_assortments;
    }
}

	
