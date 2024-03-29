<?php

class Cart extends Eloquent {
	protected $fillable = Array();

	public function user () {
		return $this->belongsTo('User');
	}

	public function books () {
		return $this->belongsToMany('Book', 'contains', 'book_id', 'cart_id');
	}
}