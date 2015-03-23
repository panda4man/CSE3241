<?php

class BaseController extends Controller {

	public function __construct () {
		$user = Auth::user();
		if($user){
			View::share('user', $user);
		}
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
