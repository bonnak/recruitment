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
					summary,
					reference,
					available_datetime"
				))
				->where('id', '=', $cv_id)
				->first();
		
		return $cv;
	}
	


	public function workExperience()
	{
		return \CandidateExperience::getExperience($this->id);
	}
	
	public function education()
	{
		return \CandidateEducation::getEducations($this->id);
	}
	
	public function skills()
	{
		return \CandidateSkill::getSkills($this->id);
	}
	
	public function languages()
	{
		return \CandidateLanguage::getLanguages($this->id);
	}
	
	public function expectation()
	{
		$exp_functions = \DB::table('can_exp_functions as cf')->select(DB::raw(
								"*, 
								(SELECT name FROM constant_functions WHERE id = cf.function_id LIMIT 1) function"
						))->where('cv_id', '=', $this->id)->get();
		$exp_industries = \DB::table('can_exp_industries as ci')->select(DB::raw(
								"*, 
								(SELECT name FROM constant_industries WHERE id = ci.industry_id LIMIT 1) industry"
						))->where('cv_id', '=', $this->id)->get();
		$exp_salaries = \DB::table('can_exp_salaries as cs')->select(DB::raw(
								"*,
								 CASE WHEN min is null THEN 'Below' ELSE min END min_salary, 
								 CASE WHEN max is null THEN 'Up' ELSE max END max_salary"
						))->where('cv_id', '=', $this->id)->first();
		$exp_locations = \DB::table('can_exp_locations as cl')->select(DB::raw(
								"location_id,
								(SELECT name FROM constant_locations WHERE id = cl.location_id LIMIT 1) location"
						))->where('cv_id', '=', $this->id)->get();
		$exp_job_terms = \DB::table('can_exp_job_terms as cjt')->select(DB::raw(
								"*,
								(SELECT term FROM constant_job_terms WHERE id = cjt.term_id LIMIT 1) term"
						))->where('cv_id', '=', $this->id)->get();
		
		return [
			'functions'		=> json_decode(json_encode($exp_functions), true),
			'industries'	=> json_decode(json_encode($exp_industries), true),
			'salary'		=> json_decode(json_encode($exp_salaries), true),
			'locations'		=> json_decode(json_encode($exp_locations), true),
			'job_terms'		=> json_decode(json_encode($exp_job_terms), true)
		];
	}
}
