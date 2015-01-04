<?php

class CandidateController extends BaseController 
{
	protected $candidate_id;
	protected $industries;
	protected $functions;
	protected $locations;
	protected $salaries;
	protected $rules;

	public function __construct() {
		$this->candidate_id = Auth::user()->id;
		$this->industries = Industry::get ();
		$this->functions = Func::get ();
		$this->locations = Location::get ();
		$this->salaries = Salary::get ();	
		
		$this->rules = array(
			'surname'					=> 'required',
			'name'						=> 'required',
			'sex'						=> 'required',
			'date_of_birth'				=> 'required',
			'marital_status'			=> 'required',
			'nationality'				=> 'required',
			'phone_number'				=> 'required',
			'residence'					=> 'required',
			'address'					=> 'required',
			'desired_industry'			=> 'required',
			'desired_function'			=> 'required',
			'desired_location'			=> 'required',
			'desired_salary'			=> 'required',
		);
	}

	public function index() {
		return View::make ( 'candidate' );
	}

	public function getProfile()
	{
		if(!$candidate = Candidate::getProfile($this->candidate_id))
		{
			$candidate = [
				'surname' 			=> '',
				'name' 				=> '',
				'sex' 				=> 'Unknown',
				'date_of_birth' 	=> '',
				'marital_id' 		=> 'Unknown',
				'nationality_id'	=> '',
				'nationality' 		=> '',
				'phone_number' 		=> '',
				'residence_id'		=> '',
				'residence' 		=> '',
				'address' 			=> '',
				'is_new_candidate'		=> true
			];
			
			$candidate = json_decode(json_encode($candidate));
		}
		
		return View::make ( 'candidate.profile' )->with('candidate', $candidate);
	}
	
	public function postProfile()
	{
		$validator = Validator::make ( Input::all (), [
			'surname'					=> 'required',
			'name'						=> 'required',
			'sex'						=> 'required',
			'date_of_birth'				=> 'required',
			'marital_status'			=> 'required',
			'nationality'				=> 'required',
			'phone_number'				=> 'required',
			'residence'					=> 'required',
			'address'					=> 'required',			
		],
		[
			'required' => 'Field required.'
		]);
		
		if ($validator->fails ()) {
			return Redirect::back()->withErrors($validator)
									->withInput();
		} else {		
			
			if(!$candidate = Candidate::find($this->candidate_id))
			{
				$candidate = new Candidate ();
			}		
					
			$candidate->id = $this->candidate_id;
			$candidate->surname = htmlentities ( Input::get ( 'surname' ) );
			$candidate->name = htmlentities ( Input::get ( 'name' ) );
			$candidate->sex = htmlentities ( Input::get ( 'sex' ) );
			$candidate->date_of_birth = date ( 'Y-m-d', strtotime ( htmlentities ( Input::get ( 'date_of_birth' ) ) ) );
			$candidate->marital_id = htmlentities ( Input::get ( 'marital_status' ) );
			$candidate->nationality_id = htmlentities ( Input::get ( 'nationality' ) );
			$candidate->phone_number = htmlentities ( Input::get ( 'phone_number' ) );
			$candidate->residence_id = htmlentities ( Input::get ( 'residence' ) );
			$candidate->address = htmlentities ( Input::get ( 'address' ) );
			$candidate->email = Auth::user()->email;
			
			if ($candidate->save ()) {
				return Redirect::back()->with('profile' , 'Profile saved successfully.');
			}
		}
	}

	public function getCVCreate() {
		return View::make ( 'candidate-create' )->with ( [ 
				'industries' => $this->industries,
				'functions' => $this->functions,
				'locations' => $this->locations,
				'salaries' => $this->salaries
		] );
	}

	public function postCVCreate() {
		$validator = Validator::make ( Input::all (), $this->rules );
		
		if ($validator->fails ()) {
			echo '<pre>', print_r ( $validator ), '</pre>';
			// return Redirect::back()->withErrors($validator);
		} else {
			
			$candidate = new Candidate ();
			
			$candidate->id = Auth::user ()->id;
			$candidate->surname = htmlentities ( Input::get ( 'surname' ) );
			$candidate->name = htmlentities ( Input::get ( 'name' ) );
			$candidate->sex = htmlentities ( Input::get ( 'sex' ) );
			$candidate->date_of_birth = date ( 'Y-m-d', strtotime ( htmlentities ( Input::get ( 'date_of_birth' ) ) ) );
			$candidate->marital_status = htmlentities ( Input::get ( 'marital-status' ) );
			$candidate->nationality = htmlentities ( Input::get ( 'nationality' ) );
			$candidate->phone_number = htmlentities ( Input::get ( 'phone_number' ) );
			$candidate->email = htmlentities ( Input::get ( 'email' ) );
			$candidate->residence = htmlentities ( Input::get ( 'residence' ) );
			$candidate->address = htmlentities ( Input::get ( 'address' ) );
			$candidate->desired_industry = htmlentities ( Input::get ( 'desired_industry' ) );
			$candidate->desired_function = htmlentities ( Input::get ( 'desired_function' ) );
			$candidate->desired_location = htmlentities ( Input::get ( 'desired_location' ) );
			$candidate->desired_salary = htmlentities ( Input::get ( 'desired_salary' ) );
			$candidate->desired_position = htmlentities ( Input::get ( 'desired_position' ) );
			$candidate->available_date = date ( 'Y-m-d', strtotime ( htmlentities ( Input::get ( 'available_date' ) ) ) );
			
			if ($candidate->save ()) {
				return 'Sucessfull create CV.';
			}
		}
	}
}