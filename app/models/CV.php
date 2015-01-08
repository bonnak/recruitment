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
		$cv = CV::select(DB::raw(
					"id,
					title,
					searchable,
					desired_industry,
					desired_function,
					desired_location,
					desired_salary,
					job_term"
				))
				->where('id', '=', $cv_id)
				->first();
		
		return $cv;
	}
	


	public function workExperience()
	{
		//return $this->hasMany('CandidateExperience', 'cv_id', 'id')->get();
		return \CandidateExperience::select(DB::raw(
										"id,
										company_name,
										(SELECT name FROM industries WHERE id = candidate_experiences.industry_id LIMIT 1) industry,
										(SELECT name FROM functions WHERE id = candidate_experiences.function_id LIMIT 1) function,
										(SELECT name FROM locations WHERE id = candidate_experiences.location_id LIMIT 1) location,
										industry_id,
										function_id,
										location_id,
										job_title,
										from_date,
										to_date,
										to_date"						
									))
									->where('cv_id', '=', $this->id)
									->get();
	}
}
