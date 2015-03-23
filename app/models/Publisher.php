<?php

class Publisher extends Eloquent {
	// MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
	protected $fillable = array('name', 'address');
	
	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function authors () {
		return $this->hasMany('Author');
	}

	public function books () {
		return $this->hasMany('Book');
	}
}