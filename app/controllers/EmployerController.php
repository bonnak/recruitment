<?php

class EmployerController extends BaseController 
{
	public function index()
	{
		// Return back homepage if user is not an employer.
		if(Auth::user ()->user_type !== 1)
			return \Redirect::intended('/');
		
		// Open default page of employer.
		return \View::make('employer.employer');
	}
	
	public function getJobPost($emp_id)
	{
		// Return back homepage if user is not an employer.
		if(Auth::user ()->user_type !== 1)
			return \Redirect::intended('/');
		
		// Open job-post page.
		return \View::make('employer.job-post')->with('emp_id', $emp_id);
	}
	
	public function getJobList($emp_id)
	{
		// Return back homepage if user is not an employer.
		if(Auth::user ()->user_type !== 1)
			return \Redirect::intended('/');
		
		// Get employer's posted-jobs.
		$jobs = \Job::where('employer_id' , '=', $emp_id)->get();
		
		// Open job list page.
		return \View::make('employer.job-list')->with('jobs', $jobs);
	}
}