<?php

class Blog extends \Eloquent {
	 protected $fillable = array('title', 'body');
	 public static $rules = array(
    'title' => 'required',
    'body' => 'required'
  );
}