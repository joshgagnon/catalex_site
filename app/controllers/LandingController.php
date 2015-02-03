<?php

class LandingController extends BaseController {

	public function __construct()
	{
		$activeURI = Route::current()->getUri();
		if($activeURI !== '/') $activeURI = '/' . $activeURI;
		View::share('location', $activeURI);
	}

	public function index()
	{
		$blogs = Blog::orderBy('id', 'DESC')->get();
		return View::make('landing', compact('blogs'));
	}

	public function lawBrowser()
	{
		return View::make('law-browser');
	}

	public function signup()
	{
		return View::make('signup');
	}

	public function aboutUs()
	{
		return View::make('about-us');
	}

}
