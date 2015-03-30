<?php

class CandidateExpFunction extends Eloquent 
{
	protected $table = 'can_exp_functions';
	
	/***
	 * Get functions relate to a cv id.
	 */
	public static function getExpFunctions($cv_id)
	{
		// Get this table name.
		$tbl_this = with(new static)->getTable();
		
		return CandidateExpFunction::select(DB::raw(
										"cv_id,
										function_id,
										(SELECT name FROM constant_functions WHERE id = {$tbl_this}.function_id LIMIT 1) function_name
										"
									))
									->where('cv_id', '=', $cv_id)
									->get();
	}
	
	/***
	 * Get as single function object detail.
	 */
	public function getExpFunction($cv_id, $id)
	{	
		return CandidateExpFunction::select(DB::raw(
											"cv_id,
											function_id,
											(SELECT name FROM constant_functions WHERE id = {$this->table}.function_id LIMIT 1) function_name
											"
									))
									->where('cv_id', '=', $cv_id)
									->whereAnd('function_id', '=', $this->function_id)
									->first();
	}
}