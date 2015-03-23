<?php

class Book extends Eloquent {
	// MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
	protected $fillable = array('category', 'name', 'year', 'title', 'format', 'language', 'edition', 'stock');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// params: relatated_table, pivot_table, key1, key2
	public function authors() {
		return $this->belongsToMany('Author', 'written_by', 'book_id', 'author_id');
	}

	public function comments() {
		return $this->hasMany('Comment');
	}

	public function carts () {
		return $this->belongsToMany('Cart', 'contains', 'book_id', 'cart_id');
	}
}