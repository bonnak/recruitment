<?php

use \Carbon\Carbon;

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
	//
	//show job view list
	//
	public function getJobList($emp_id)
	{
		// Return back homepage if user is not an employer.
		if(Auth::user ()->user_type !== 1)
			return \Redirect::intended('/');		
		// Get employer's posted-jobs.
		$jobs = \Job::where('employer_id' , '=', $emp_id)
					->orderBy('id','desc')->paginate(20);		
		// Open job list page.
		return \View::make('employer.job-list')->with('jobs', $jobs);
	}
	//**
	//Get Job for Post
	//
	public function postJobPost($emp_id)
	{
		// // Get all the input data.
		// $title = htmlentities(\Input::get('input-job-title'));
		// $job_description = htmlentities(\Input::get('input-job-description'));
		// $salary_range = htmlentities(\Input::get('input-salary-range'));
		// $gender = htmlentities(\Input::get('input-gender'));
		// $hiring = htmlentities(\Input::get('input-hiring'));
		// $qualification_id = htmlentities(\Input::get('input-qualification'));
		// $min_year_exp = htmlentities(\Input::get('input-min-year-exp'));
		// $age_range = htmlentities(\Input::get('input-age-range'));
		// $function_id = htmlentities(\Input::get('input-function'));
		// $industry_id  = htmlentities(\Input::get('input-industry'));
		// $closing_date = htmlentities(\Input::get('input-closing-date'));
		// Validate required fields.
		$validator = \Validator::make(Input::all(), [
				'input-job-title' => 'required',
				'input-job-description' => 'required',
				'input-closing-date'=>'required'
		],
		[
			'required' => 'Field is reqired.'
		]);
		
		// Return back if validation fail.
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
			//------------------------------------------------
		$job = new \Job;
		$job->employer_id 		= $emp_id;
		$job->title 			= \Input::get('input-job-title');
		$job->job_description 	= \Input::get('input-job-description');
		$job->salary_range 		= \Input::get('input-salary-range');
		$job->gender 			= \Input::get('input-gender');
		$job->hiring 			= \Input::get('input-hiring');
		$job->qualification_id 	= \Input::get('input-qualification');
		$job->min_year_exp 		= \Input::get('input-min-year-exp');
		$job->age_range 		= \Input::get('input-age-range');
		$job->function_id 		= \Input::get('input-function');
		$job->industry_id 		= \Input::get('input-industry');
		$job->closing_date 		= \Input::get('input-closing-date');
		$job->published_date 	= date("Y-m-d");
		$job->status 			= isset($_GET['publish']) ? 1 : 0;

		if($job ->save()){
			return Redirect::route('employer.job-post', Auth::user()->id)
							->with("message","Job has inserted Success!");
		}
		//-----------------------------		
		
		// // Store a new job post to the database.		
		// $job = new \Job;		
		// $job->employer_id = $emp_id;
		// $job->title = $title; 
		// $job->job_description = $job_description;
		// $job->salary_range = !empty($salary_range) ? $salary_range : null;
		// $job->gender = !empty($gender) ? $gender : null;
		// $job->hiring = !empty($hiring) ? $hiring : null;
		// $job->qualification_id = !empty($qualification_id) ? $qualification_id : null;
		// $job->min_year_exp = !empty($min_year_exp) ? $min_year_exp : null;
		// $job->age_range = !empty($age_range) ? $age_range : null;
		// $job->function_id = !empty($function_id) ? $function_id : null;
		// $job->industry_id = !empty($industry_id) ? $industry_id : null;
		// $job->status = Input::get('public_check') == null ? 1 : 0;
		// $job->published_date = date("Y-m-d");
		// $job->closing_date = !empty($closing_date) ? $closing_date : null;
		// //if $job equal true it will save
		// if($job->save())
		// {
		// 	return Redirect::route('employer.job-post', Auth::user()->id)
		// 					->with("message","Job has inserted Success!");;
		// }
	}
	//**
	//Get Job for Delete .
	//**
	public function DeleteJobPost(){
		//get id for delete one job
		if(isset($_GET['id'])){
			$job = Job::where('id','=', $_GET['id'])->delete();
			return Redirect::route('employer.job-list', Auth::user()->id)
							->with("message","Job has deleted Success!");
		}
		// get for delete multiple job
		if(Input::get('chk-delete-jobs')){
			$chk_delete_post = Input::get('chk_delete_post');
			$chk = \Job::whereIn('id', $chk_delete_post)->delete();
			return Redirect::route('employer.job-list', Auth::user()->id)
							->with("message","Job has deleted Success!");
		}
	}
	//**
	// Get Job for Edit post
	//
	public function  getJobEdit($emp_id,$id){
		return View::make('employer.job-edit')
					->with("job_edit", Job::find($id));
	}
	//
	//	update job 
	//
	public function editJobEdit($emp_id){
		//get id from textbox for update job
		try{
			$edit_id_post = Input::get('id');

			$job = \Job::where('id','=', $edit_id_post)->first();		
			$job->employer_id = $emp_id;
			$job->title = \Input::get('input-job-title');
			$job->job_description = \Input::get('input-job-description');
			$job->salary_range = \Input::get('input-salary-range');
			$job->gender = \Input::get('input-gender');
			$job->hiring = \Input::get('input-hiring');
			$job->qualification_id = \Input::get('input-qualification');
			$job->min_year_exp = \Input::get('input-min-year-exp');
			$job->age_range = \Input::get('input-age-range');
			$job->function_id = \Input::get('input-function');
			$job->industry_id = \Input::get('input-industry');		
			$job->closing_date = \Input::get('input-closing-date');
			$job->status 			= isset($_GET['publish']) ? 1 : 0;
			
			if($job == true)
			{	$job->save();
				return Redirect::route('employer.job-list', Auth::user()->id)
					->with("message","Job has updated Success!");
			}else{
				return Redirect::route('employer.job-list', Auth::user()->id)
						->withErrors("message",$job);	
			}
		}catch(Exception $e){
				return Redirect::route('employer.job-list', Auth::user()->id)
						->withErrors("message",$e);	
		}
	}
	//**
	// show job detail 
	//
	public function viewJob($emp_id,$id){
		return View::make('employer.job-list-show')
					->with('show_job', Job::find($id));	
	}
	//**
	// download file 
	//

}
