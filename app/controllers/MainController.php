<?php

class MainController extends BaseController 
{
	public function index()
	{		
		$industries = Industry::get();
		$functions = Func::get();
		$locations = Location::get();
		$salaries = Salary::get();
		
		if(!Auth::guest())
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
		else
		{			
			return View::make('main')->with([
				'industries' 	=> $industries,
				'functions'		=> $functions,
				'locations'		=> $locations,
				'salaries'		=> $salaries
			]);
		}
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
