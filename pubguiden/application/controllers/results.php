<?php

class Results_Controller extends Base_Controller {
	public $restful = true;

	public function get_top20()
	{
		$pubs = Pub::all();		
		return View::make('results.top20')
				->with('pubs', $pubs);	
	}

<<<<<<< HEAD
	public function get_top_häst()
	{
		//Do stuff
	}

=======
	public function get_nearestPubs()
	{
		$pubs = Pub::all();						
		return View::make('results.nearestPubs')
			->with('pubs', $pubs);	
	}
	
>>>>>>> 5042a412817c2f8cd1ace07a61964881b86fce27
}
