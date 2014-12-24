<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

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
	protected $fillable = ['user_name','password','email','user_type','activated','created_at','updated_at'];

	public static $rules = array(
		'user_name'		=> 'required|alpha|min:4',
		'password'		=> 'required|alpha_num|between:4,12|confirmed',
		'email'			=> 'required|email'
	);

}
