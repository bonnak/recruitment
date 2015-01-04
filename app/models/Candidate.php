<?php

class Candidate extends Eloquent 
{
	protected $table = 'candidates';
	
	public static function getProfile($id)
	{	
		$profile = DB::table('candidates AS c')
				->select(DB::raw(
					"surname,
					name,
					sex,
					date_of_birth,
					marital_id,
					nationality_id,
					(SELECT nationality FROM countries WHERE id = c.nationality_id LIMIT 1) nationality,
					phone_number,
					residence_id,
					(SELECT name FROM locations WHERE id = c.residence_id LIMIT 1) residence,
					address"
				))
				->where('id', '=', $id)
				->first();
		
		return $profile;
	}
}