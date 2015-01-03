<?php

class Industry extends Eloquent 
{
	protected $table = 'industries';
	protected $fillable = ['name', 'created_at', 'updated_at'];
	
	public static function getIndustries()
	{
		return DB::table('industries')->select(['id', 'name'])
									  ->get();
	}
}
