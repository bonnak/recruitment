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
										to_date"						
									))
									->where('cv_id', '=', $this->id)
									->get();
	}
	
	public function education()
	{
		return \CandidateEducation::select(DB::raw(
										"id,
										institute,
										major,
										(SELECT description FROM degree WHERE id = candidate_education.degree_id LIMIT 1) degree,
										(SELECT description FROM sch_situation WHERE id = candidate_education.situation_id LIMIT 1) situation,
										degree_id,
										situation_id,
										graduation_date"
									))
									->where('cv_id', '=', $this->id)
									->get();
	}
	
	public function skills()
	{
		return \CandidateSkill::select(DB::raw(
								"id,
								name,
								level_id,
								(SELECT description FROM levels WHERE id = candidate_skills.level_id LIMIT 1) level,
								y_experience"
							))
							->where('cv_id', '=', $this->id)
							->get();
	}
	
	public function languages()
	{
		return \CandidateLanguage::select(DB::raw(
										"id,
										language,
										(SELECT description FROM levels WHERE id = candidate_languages.speaking_id LIMIT 1) speaking,
										(SELECT description FROM levels WHERE id = candidate_languages.writing_id LIMIT 1) writing,
										(SELECT description FROM levels WHERE id = candidate_languages.reading_id LIMIT 1) reading,
										speaking_id,
										writing_id,
										reading_id"
								))
								->where('cv_id', '=', $this->id)
								->get();
	}
}
