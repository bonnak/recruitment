<?php

class Industry extends Eloquent 
{
	protected $table = 'constant_industries';
	protected $fillable = ['name', 'created_at', 'updated_at'];
	
	public static function getIndustries()
	{
		return DB::table('constant_industries')->select(['id', 'name'])
									  ->get();
	}
}
