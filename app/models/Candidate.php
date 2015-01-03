<?php

class Candidate extends Eloquent 
{
	protected $table = 'candidates';
	
	public static function getProfile($id)
	{
		$locale = App::getLocale();
		
		if ($locale === 'en')
		{
			$profile = DB::table('candidates AS c')
					->select(DB::raw(
						"surname,
						name,
						(SELECT sex FROM gender WHERE id = c.sex LIMIT 1)sex,
						date_of_birth,
						(SELECT status FROM marital WHERE id = c.marital_status LIMIT 1) marital_status,
						(SELECT nationality FROM countries WHERE id = c.nationality LIMIT 1) nationality,
						phone_number,
						(SELECT name FROM locations WHERE id = c.residence LIMIT 1) residence,
						address"
					))
					->where('id', '=', $id)
					->first();
		}
		else
		{
			$profile = DB::table('candidates AS c')
				->select(DB::raw(
						"surname,
						name,
						(SELECT sex_{$locale} FROM gender WHERE id = c.sex LIMIT 1) sex,
						date_of_birth,
						(SELECT status_{$locale} FROM marital WHERE id = c.marital_status LIMIT 1) marital_status,
						(SELECT nationality FROM countries WHERE id = c.nationality LIMIT 1) nationality,
						phone_number,
						(SELECT name FROM locations WHERE id = c.residence LIMIT 1) residence,
						address"
				))
				->where('id', '=', $id)
				->first();
		}
		
		return $profile;
	}
}