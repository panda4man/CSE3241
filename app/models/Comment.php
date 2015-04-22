<?php

class Comment extends Eloquent {
	// MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
	protected $fillable = array('book_id', 'user_id', 'title', 'rating', 'text');

	/**
	 * Model rules
	 * @var array
	 */
	public static $rules = array(
			'title' => 'required|max:20',
			'rating' => 'between:1,5',
			'text' => 'required'
	);

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// params: relatated_table, pivot_table, key1, key2
	public function user() {
		return $this->belongsTo('User');
	}

	public function book() {
		return $this->belongsTo('Book');
	}
}