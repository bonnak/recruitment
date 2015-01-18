<?php

class Candidate extends Eloquent 
{
	protected $table = 'candidates';
	
	public static function getProfile($id)
	{	
		$tbl_country = (new \Country)->getTable();
		$tbl_location = (new \Location)->getTable();
		
		$profile = DB::table('candidates AS c')
				->select(DB::raw(
					"surname,
					name,
					sex,
					date_of_birth,
					marital_id,
					nationality_id,
					(SELECT nationality FROM {$tbl_country} WHERE id = c.nationality_id LIMIT 1) nationality,
					phone_number,
					city_province_id,
					(SELECT name FROM {$tbl_location} WHERE id = c.city_province_id LIMIT 1) city_province,
					address"
				))
				->where('id', '=', $id)
				->first();
		
		return $profile;
	}
}