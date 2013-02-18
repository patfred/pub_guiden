<?php

class Rating extends Eloquent {

	public function pub()
     {
          return $this->belongs_to('Pub');
     }
	
	public function user()
     {
          return $this->belongs_to('User');
     }
}