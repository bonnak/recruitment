<?php

class Location extends Eloquent 
{
	protected $table = 'constant_locations';
	protected $fillable = ['name', 'type', 'created_at', 'updated_at'];
	
	public static function getProvinces_Cities()
	{
		return DB::table('locations')->select(['id', 'name'])
									->where('type', '=', '100')
									->orWhere('type', '=', '200')
									->get();
	}
}
