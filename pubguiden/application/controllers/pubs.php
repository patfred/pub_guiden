<?php

class Pubs_Controller extends Base_Controller {
	public $restful = true;
	// public function get_index(){
	// 	return Viev::make('pubs.index');
	// }
	public function get_index($id){

		$pub = Pub::find($id);
		return View::make('pubs.index')
			->with('title', 'Detta är en pub')
			->with('pub', $pub);
	}
}
