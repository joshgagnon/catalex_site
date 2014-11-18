<?php


Event::listen('auth.login', function($user) {
	$history = UserHistory::create(array('user_id'=>$user->id));
    $history->save();
});