<?php

class LandingController extends BaseController {


	public function show()
	{
		$blogs = Blog::orderBy('id', 'DESC')->get();
		return View::make('landing', compact('blogs'));
	}

}
