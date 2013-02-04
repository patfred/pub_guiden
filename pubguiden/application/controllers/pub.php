<?php

class Pub_Controller extends Base_Controller {

<<<<<<< HEAD

}
=======
	
	public function action_index()
	{
		$pubs = Pub::all();		
		return View::make('pubs.index')
				->with('pubs', $pubs);
	}

}


>>>>>>> de1b1932ed4a70a5c6a7bd256322ab89056275e1
