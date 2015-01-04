<?php

class Func extends Eloquent 
{
	protected $table = 'functions';
	protected $fillable = ['name', 'created_at', 'updated_at'];
	
	public static function getFunctions()
	{
		return DB::table('functions')->select(['id', 'name'])
									->get();
	}
}