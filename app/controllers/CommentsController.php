<?php

class CommentsController extends \BaseController {
	/**
	 * Store a newly created resource in storage.
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$validator = Validator::make($data, Comment::$rules);

		if($validator->passes()){
			$comment = Comment::create($data);
			if($comment->save()){
				return Redirect::back()->with('message', 'Comment saved successfully');
			} else {
				return Redirect::back()->with('message', 'An error occurred.');
			}
		} else {
			return Redirect::back()
			->withErrors($validator);
		}
	}
}