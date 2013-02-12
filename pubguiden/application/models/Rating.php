<?php

class Rating extends Eloquent {

	public function pub()
     {
          return $this->belongs_to('Pub');
          return $this->belongs_to('User');
     }
	
}