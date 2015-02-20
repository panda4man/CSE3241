<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 *	Attributes you can mass assign
	 *	@var array
	 */
	protected $fillable = array('email', 'password', 'name', 'username');

	//Hash passwords before saving
	public function setPasswordAttribute($pass) {

		$this->attributes['password'] = Hash::make($pass);

	}

}
