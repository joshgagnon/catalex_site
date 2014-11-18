<?php

class UserHistory extends \Eloquent {
	protected $fillable = array('user_id');
	public function user()
	{
		return $this->belongsTo('User', 'id', 'user_id');
	}
}