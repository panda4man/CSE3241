<?php

class RegistrationController extends BaseController {
	public function showRegistration() {
		Return View::make('registration.create');
	}

	public function doRegistration() {
		// validate the info, create rules for the inputs

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), User::$rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('sign-up')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {
			$user = User::create(Input::all());

			if ($user->save()) {
				// create our user data for the authentication
				$userdata = array(
					'email' => Input::get('email'),
					'password' => Input::get('password'),
				);

				// attempt to do the login
				if (Auth::attempt($userdata)) {
					$logged_user = Auth::user();
					// validation successful!
					// redirect them to the secure section or whatever
					// return Redirect::to('secure');
					// for now we'll just echo success (even though echoing in a controller is bad)
					return Redirect::to('books');

				} else {

					// validation not successful, send back to form
					return Redirect::to('sign-up')->with('error', 'Reg failed buddy.');

				}
			}
		}
	}
}
