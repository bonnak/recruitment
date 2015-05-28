<?php

class AppliedJobList extends Eloquent 
{
	protected $table = 'applied_job_list';

	public static function getapplyList($filter)
	{		
		
		$this_table_nme = with(new static)->getTable();

		return  DB::table("{$this_table_nme} as app")
					->join('jobs', 'app.job_id', '=', 'jobs.id')
					->join('cv', 'app.cv_id', '=', 'cv.id')
					->select(DB::raw(
						"
						app.id,
						jobs.title job_title,
						(SELECT surname FROM candidates WHERE id = cv.candidate_id LIMIT 1) candidate_name,
						app.created_at applied_date,
						app.status
						"
						))
					->Orwhere('app.status', 'LIKE', '%'. $filter. '%')
					->paginate(3);
					
	}
	
}