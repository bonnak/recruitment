<?php
use Symfony\Component\Security\Core\User\User;
class MainController extends BaseController {
	protected $industries;
	protected $functions;
	protected $locations;
	protected $salaries;
	protected $menu;
	public function __construct() {
		$this->industries = Industry::get ();
		$this->functions = Func::get ();
		$this->locations = Location::get ();
		$this->salaries = Salary::get ();
		
		if (! Auth::guest () && Auth::user ()->role === null) {
			switch (Auth::user ()->user_type) {
				case 1 : // Employer
					break;
				case 2 : // Employee
					$this->menu = [ 
							'Dashboard' => '#',
							'CV and Cover Letters' => [ 
									'Create a CV' => URL::route ( 'candidate.cv.create' ),
									'My CV' => '#',
									'Create a Cover Letter' => '#',
									'My Cover Letter' => '#' 
							],
							'Jobs' => [ 
									'Recommended Jobs' => '#',
									'Job Alert' => '#',
									'Saved Jobs' => '#',
									'Application History' => '#' 
							],
							'Career Guide' => [ 
									'Post Jobs' => '#',
									'CV Search' => '#',
									'Purchase Service Packages' => '#',
									'Manage Jobs' => '#' 
							],
							'Feature' => [ 
									'Companies' => '#',
									'Agencies' => '#' 
							],
							'Account Setting' => [ 
									'My Profile' => '#',
									'Change Email' => '#',
									'Change Password' => '#',
									'Logout' => URL::route ( 'user.logout' ) 
							] 
					];
					break;
			}
		} else {
			
			$this->menu = [ 
					'Browse Jobs' => [ 
							'Categories' => '#',
							'Industries' => '#',
							'Locations' => '#',
							'Salary' => '#' 
					],
					'Career Guide' => [ 
							'Post Jobs' => '#',
							'CV Search' => '#',
							'Purchase Service Packages' => '#',
							'Manage Jobs' => '#' 
					],
					'Feature' => [ 
							'Companies' => '#',
							'Agencies' => '#' 
					] 
			];
		}
	}
	public function index() {
		return View::make ( 'main' )->with ( [ 
				'industries' => $this->industries,
				'functions' => $this->functions,
				'locations' => $this->locations,
				'salaries' => $this->salaries,
				'main_menu' => $this->menu 
		] );
	}
	public function openMemberHome() {
		switch (Auth::user ()->user_type) {
			case 1 : // Employer
				return View::make ( 'employer' );
				break;
			case 2 : // Employee
				return View::make ( 'candidate' );
				break;
		}
	}
	public function getCVCreate() {
		return View::make ( 'candidate-create' )->with ( [ 
				'industries' => $this->industries,
				'functions' => $this->functions,
				'locations' => $this->locations,
				'salaries' => $this->salaries,
				'main_menu' => $this->menu 
		] );
	}
	public function postCVCreate() {
		$validator = Validator::make ( Input::all (), Candidate::$rules );
		
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
