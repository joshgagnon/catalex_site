<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('landing');
});


Route::get('investor', 'InvestorController@show');
Route::controller('users', 'UsersController');


Route::get('files/{name}', function($name)
{
	if (Auth::check())
	{
	    $path = public_path('test.txt');
	    $file = File::put($path, 'contents');
	    return Response::download($path);
	}
	App::abort(403, 'Unauthorized action.');
});


