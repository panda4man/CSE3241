<?php

Route::any('/', array('uses' => 'HomeController@showWelcome'));

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

Route::group(array("before" => "auth"), function () {
	// profiles resource
	Route::resource('profiles', 'ProfilesController');

	// books resource
	Route::resource('books', 'BooksController');

	// comments resource
	Route::resource('comments', 'CommentsController');

	// route to show admin page
Route::get('admin', array('as' => 'admin.index', 'uses' => 'AdminController@showAdmin'));
});

App::missing(function($exception){
	return Response::view('errors.missing', array(), 404);
});
