<?php

/*
|--------------------------------------------------------------------------
| Default User Model
|--------------------------------------------------------------------------
*/

class User extends Eloquent {
	
	public function comment()
	{
		return $this->has_many('Comment');
	}	

	public function rating()
	{
		return $this->has_many('Rating');
	}
	
}
