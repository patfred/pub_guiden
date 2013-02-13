<?php

class Results_Controller extends Base_Controller {
	public $restful = true;

	public function get_top20()
	{
		$pubs = Pub::all();		
		return View::make('results.top20')
				->with('pubs', $pubs);	
	}
}