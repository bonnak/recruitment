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
		return \CandidateEducation::getEducation($this->id);
	}
	
	public function skills()
	{
		return \CandidateSkill::getSkill($this->id);
	}
	
	public function languages()
	{
		return \CandidateLanguage::getLanguage($this->id);
	}
}
