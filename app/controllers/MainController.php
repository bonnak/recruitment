<?php

class MainController extends BaseController 
{
	public function index()
	{		
		$industries = Industry::get();
		$functions = Func::get();
		$locations = Location::get();
		$salaries = Salary::get();
		
		if(!Auth::guest() && Auth::user()->role === null)
		{
			switch (Auth::user()->user_type)
			{
				case 1: // Employer
					break;
				case 2: // Employee
					$menu = [
						'Dashboard'				=>	'#',
						'CV and Cover Letters'	=>	[
							'Create a CV'			=>	'#',
							'My CV'					=>	'#',
							'Create a Cover Letter'	=>	'#',
							'My Cover Letter'		=>	'#',
						],
						'Jobs'	=>	[
							'Recommended Jobs'		=> '#',
							'Job Alert'				=> '#',
							'Saved Jobs'			=> '#',
							'Application History'	=> '#'
						],
						'Career Guide'	=>	[
							'Post Jobs'						=>	'#',
							'CV Search'						=>	'#',
							'Purchase Service Packages'		=>	'#',
							'Manage Jobs'					=>	'#'
						],
						'Feature'	=>	[
							'Companies' => '#',
							'Agencies' => '#'
						],
						'Account Setting'	=>	[
							'My Profile'		=>	'#',
							'Change Email'		=>	'#',
							'Change Password'	=>	'#',
							'Logout'			=>	URL::route('user.logout')
						]
					];
					break;
			}			
		}
		else
		{		

			$menu = [
				'Browse Jobs' 	=>	[
					'Categories'	=>	'#',
					'Industries'	=>	'#',
					'Locations'		=>	'#',
					'Salary'		=>	'#'
				],
				'Career Guide'	=>	[
					'Post Jobs'						=>	'#',
					'CV Search'						=>	'#',
					'Purchase Service Packages'		=>	'#',
					'Manage Jobs'					=>	'#'
				],
				'Feature'	=>	[
					'Companies' => '#',
					'Agencies' => '#'
				]
			];					
		}
		
		return View::make('main')->with([
				'industries' 	=> $industries,
				'functions'		=> $functions,
				'locations'		=> $locations,
				'salaries'		=> $salaries,
				'main_menu'			=> $menu
		]);
	}
	
	public function openMemberHome()
	{
			switch (Auth::user()->user_type)
			{
				case 1: // Employer
					return View::make('employer');
					break;
				case 2: // Employee
					return View::make('candidate');
					break;
			}
	}
	
	public function getCVCreate()
	{
		return View::make('candidate');
	}

}
