<?php

// route to show the login form
Route::get('login', array('uses' => 'SessionsController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'SessionsController@doLogin'));

// route to process logout
Route::get('logout', array('uses' => 'SessionsController@doLogout'));

// route to show reg form
Route::get('sign-up', array('uses' => 'RegistrationController@showRegistration'));

// route to process the reg form
Route::post('sign-up', array('uses' => 'RegistrationController@doRegistration'));

// profiles resource
Route::resource('profiles', 'ProfilesController');

Route::group(array("before" => "auth"), function () {
	Route::get('/', array('uses' => 'HomeController@showWelcome'));
});
