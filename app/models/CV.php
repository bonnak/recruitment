<?php

class CV extends Eloquent 
{
	protected $table = 'cv';
	
	public static function getCVList($candidate_id)
	{
		$cv_list = DB::table('cv')
					->select(
						'id',
						'title',
						'searchable',
						'updated_at'
					)
					->where('candidate_id', '=', $candidate_id)
					->get();
		
		return $cv_list;
	}
	
	public static function getCVDetail($cv_id)
	{
		$cv = DB::table('cv')
				->select(DB::raw(
					"id,
					title,
					searchable,
					desired_industry,
					desired_function,
					desired_location,
					desired_salary"
				))
				->where('id', '=', $cv_id)
				->first();
		
		return $cv;
	}
}
