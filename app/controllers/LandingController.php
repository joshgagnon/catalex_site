<?php

class LandingController extends BaseController {


	public function show()
	{
		$blogs = Blog::all();
		return View::make('landing', compact('blogs'));
	}

}
