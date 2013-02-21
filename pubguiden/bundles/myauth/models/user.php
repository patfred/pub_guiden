<?php

/*
|--------------------------------------------------------------------------
| Default User Model
|--------------------------------------------------------------------------
*/

class User extends Eloquent {
	
	public function comments()
	{
		return $this->has_many('Comment');
	}	

	public function ratings()
	{
		return $this->has_many('Rating');
	}
	
}
