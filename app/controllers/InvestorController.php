<?php

class InvestorController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('auth', array('only'=>array('show')));
	}
	public function show()
	{
		return View::make('investor');
	}

}
