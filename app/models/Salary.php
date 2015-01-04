<?php

class Salary extends Eloquent 
{
	protected $table = 'salaries';
	protected $fillable = ['min', 'max', 'created_at', 'updated_at'];
	
	public static function getSalaries()
	{
		return DB::table('salaries')
					->select(DB::raw(
						"id,
						(CASE WHEN min is null THEN 'Below' ELSE min END) min,
						(CASE WHEN max is null THEN 'Up' ELSE max END) max"
					))
					->get();
	}
}