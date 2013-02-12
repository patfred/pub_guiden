<?php

class Pub extends Eloquent {
	// public static $table = 'pubs'; kanske inte behövs

	public function rating()
	{
		return $this->has_many('Rating');
		return $this->has_many('Comment');
	}

}

	
