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

	
