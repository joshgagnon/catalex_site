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

Route::get('/', 'LandingController@index');
Route::get('law-browser', 'LandingController@lawBrowser');
Route::get('signup', 'LandingController@signup');
Route::get('news', 'LandingController@news');

Route::get('investor', 'InvestorController@show');

Route::controller('sessions', 'SessionsController');

Route::resource('users', 'UsersController');

Route::get('files/{fileName}', array('before' => 'auth', 'uses' => 'ReadFileController@read'));

Route::resource('blogs', 'BlogsController');
