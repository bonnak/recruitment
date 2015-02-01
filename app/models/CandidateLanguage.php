<?php

class CandidateLanguage extends Eloquent 
{
	protected $table = 'can_languages';
	
	public static function getLanguages($cv_id)
	{
		$tbl_this = with(new static)->getTable();
		$tbl_proficiency = (new \Proficiency)->getTable();
		
		return CandidateLanguage::select(DB::raw(
										"id,
										language,
										proficiency_id,
										(SELECT proficiency FROM {$tbl_proficiency} WHERE id = {$tbl_this}.proficiency_id LIMIT 1) proficiency"
								))
								->where('cv_id', '=', $cv_id)
								->get();
	}
}