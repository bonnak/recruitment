<?php

class EmployerController extends BaseController 
{
	public function index()
	{
		return \View::make('employer.employer');
	}
}