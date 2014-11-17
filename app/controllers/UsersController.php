<?php
 
class UsersController extends BaseController {
 	protected $layout = "layouts.master";

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}
	public function getLogin() {
 		$this->layout->content = View::make('users.login');
	}

	public function postSignin() {
	    if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
	    	return Redirect::to('investor');
		} else {
		    return Redirect::to('users/login')
		        ->with('message', 'Your username/password combination was incorrect')
		        ->withInput();
		}
}

public function getLogout() {
    Auth::logout();
    return Redirect::to('/');
}
}
?>