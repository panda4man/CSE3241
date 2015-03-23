<?php

class ProfilesController extends \BaseController {


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);

		return View::make('profile.show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		if(is_null($user)){
			return Redirect::to('/books');
		}
		return View::make('profile.edit', compact('user'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$validation = Validator::make($input, User::$rules);
		if($validation->passes()){
			$user = User::find($id);
			$user->update($input);
			return Redirect::route('profiles.show', $id);
		} 
		return Redirect::route('profiles.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::find($id)->delete();
        return Redirect::to('login')->with('message', 'Successfully deleted profile.');
	}


}
