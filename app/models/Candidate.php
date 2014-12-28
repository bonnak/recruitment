<?php

class Candidate extends Eloquent 
{
	protected $table = 'candidates';
	//protected $fillable = ['name', 'created_at', 'updated_at'];
	
	public static $rules = array(
		'surname'		=> 'required',
		'name'		=> 'required',
		'sex'			=> 'required',
		'date_of_birth'			=> 'required',
		'marital_status'			=> 'required',
		'nationality'			=> 'required',
		'phone_number'			=> 'required',
		'residence'			=> 'required',
		'address'			=> 'required',
		'desired_industry'			=> 'required',
		'desired_function'			=> 'required',
		'desired_location'			=> 'required',
		'desired_salary'			=> 'required',
	);
}