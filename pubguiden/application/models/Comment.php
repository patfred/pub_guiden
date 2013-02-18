<?php

class Comment extends Eloquent {

	public function user()
     {
          return $this->belongs_to('User');
     }

	public function pub()
     {
          return $this->belongs_to('Pub');
     }

}