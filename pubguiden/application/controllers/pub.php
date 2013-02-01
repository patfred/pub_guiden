<?php

class Pub_Controller extends Base_Controller {

	
	public function action_index()
	{
		$pubs = Pub::all();		
		return View::make('pubs.index')
				->with('pubs', $pubs);
	}

}


