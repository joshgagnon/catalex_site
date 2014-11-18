<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	 protected $fillable = array('username', 'password');
	 public static $rules = array(
	    'username' => 'required',
	    'password' => 'required'
  	);
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	public function setPasswordAttribute($pass){

		$this->attributes['password'] = Hash::make($pass);
		if($this->role != 'admin')
		{
			$this->plaintext_pw = $pass;
		}

	}

	public function isAdmin()
	{
		return $this->role == 'admin';
	}

	public function history()
	{
		return $this->hasMany('UserHistory', 'user_id', 'id');
	}
}
