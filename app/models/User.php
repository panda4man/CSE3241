<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;
	use HasRole;
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
	protected $fillable = array('email', 'password', 'name', 'username', 'address');

	/**
	 * Table name
	 * @var $table
	 */
	protected $table = 'users';

	/**
	 * Model rules
	 * @var array
	 */
	public static $rules = array(
			'email' => 'required|unique:users,email', // make sure the email is an actual email
			'password' => 'required|alpha_num|min:8', // password can only be alphanumeric and has to be greater than 3 characters
			'password_confirmation' => 'required|same:password',
			'name' => 'required|min:5|max:32',
			'username' => 'required|unique:users|min:5|max:32',
	);

	/**
	 * Relations
	 * @return relation
	 */
	public function comments () {
		return $this->hasMany('Comment');
	}

	public function carts () {
		return $this->hasMany('Cart');
	}

	//Hash passwords before saving
	public function setPasswordAttribute($pass) {
		$this->attributes['password'] = Hash::make($pass);
	}

	//Return admin status
	public function hasAdminCredentials() {
		if (!$this->adminStatus) {
			if (DB::table('admin_users')->where('admin_id', '=', $this->id)->get()) {
				$this->adminStatus = true;
			} else {
				$this->adminStatus = false;
			}
		}
		return($this->adminStatus);
	}
}	