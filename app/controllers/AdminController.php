<?php

class AdminController extends \BaseController {

	public function showAdmin() {
		// just redirect to the admin page for now
		// we've already done authorization to even show this link,
		// but let's double check our authorization before redirecting here too
		return View::make('admin.index');
	}

}