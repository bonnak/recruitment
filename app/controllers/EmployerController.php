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
	
	public function getJobPost()
	{
		// Return back homepage if user is not an employer.
		if(Auth::user ()->user_type !== 1)
			return \Redirect::intended('/');
		
		// Open job-post page.
		return \View::make('employer.job-post');
	}
}