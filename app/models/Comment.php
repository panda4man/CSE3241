<?php

class Comment extends Eloquent {
	// MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
	protected $fillable = array('book_id', 'user_id', 'utc_time', 'rating', 'text');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// params: relatated_table, pivot_table, key1, key2
	public function customer() {
		return $this->belongsTo('User');
	}

	public function book() {
		return $this->belongsTo('Book');
	}
}