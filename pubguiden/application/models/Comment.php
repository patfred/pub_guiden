<?php

class Comment extends Eloquent {

	public function user()
     {
          return $this->belongs_to('User');
          return $this->belongs_to('Pub');
     }
	
}