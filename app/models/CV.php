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
					available_datetime,					
					salary_range"
				))
				->where('id','=', $cv_id)
				->first();		
		return $cv;
	}
	public static function get_cv_search($keyword){
		
		return  \DB::table('cv')
         
			->Where('title', 'LIKE', '%'. $keyword. '%')
			->orWhere('available_datetime', 'LIKE', '%'. $keyword. '%')			
			->paginate(2);
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
		$exp_functions = \CandidateExpFunction::getExpFunctions($this->id);
		$exp_industries = \CandidateExpIndustry::getExpIndustries($this->id);
		$exp_locations = \CandidateExpLocation::getExpLocations($this->id);
		$exp_job_terms = \CandidateExpJobTerm::getExpJobTerms($this->id);
		
		return [
			'functions'		=> json_decode(json_encode($exp_functions), true),
			'industries'	=> json_decode(json_encode($exp_industries), true),
			'locations'		=> json_decode(json_encode($exp_locations), true),
			'job_terms'		=> json_decode(json_encode($exp_job_terms), true)
		];
	}
}
