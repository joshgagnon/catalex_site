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

	public function news()
	{
		$news = Blog::orderBy('id', 'DESC')->get();
		// Split news titles on hypen
		foreach($news as &$entry) {
			$t = explode(' - ', $entry->title);
			$entry->title = $t[0];
			$entry->source = $t[1] ?: '';
		}
		return View::make('news', compact('news'));
	}

}
