<?php

class CandidateEducation extends Eloquent 
{
	protected $table = 'can_educations';
	
	public static function getEducation($cv_id)
	{
		$tbl_this = with(new static)->getTable();
		$tbl_degree = (new \Degree)->getTable();
		$tbl_sch_situation = (new \SchoolSituation)->getTable();
		
		return CandidateEducation::select(DB::raw(
									"id,
									institute,
									major,
									(SELECT description FROM {$tbl_degree} WHERE id = {$tbl_this}.degree_id LIMIT 1) degree,
									(SELECT description FROM {$tbl_sch_situation} WHERE id = {$tbl_this}.situation_id LIMIT 1) situation,
									degree_id,
									situation_id,
									from_year,
									grad_year"
								))
								->where('cv_id', '=', $cv_id)
								->get();
	}
}