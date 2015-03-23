<?php

class Author extends Eloquent {
	// MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
	protected $fillable = array('published_name', 'p_name', 'first_name', 'middle_name', 'last_name');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function publisher () {
		return $this->belongsTo('Publisher');
	}

	// params: relatated_table, pivot_table, key1, key2
	public function books () {
		return $this->belongsToMany('Book', 'written_by', 'book_id', 'author_id');
	}
}