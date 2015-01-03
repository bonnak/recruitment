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
						(SELECT status FROM marital WHERE id = c.marital_status LIMIT 1) marital_status,
						nationality,
						phone_number,
						residence,
						address"
					))
					->where('id', '=', $id)
					->first();
		
		return $profile;
	}
}