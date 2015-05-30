<?php

class Gender extends Eloquent 
{
	protected $table = 'constant_gender';

	public static function getgender(){
		return Gender::select(['id', 'sex'])->get();
	}
}