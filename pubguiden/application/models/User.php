<?php

class User extends Eloquent {

	public function comment()
	{
		return $this->has_many('Comment');
		return $this->has_many('Rating');
	}
	
}