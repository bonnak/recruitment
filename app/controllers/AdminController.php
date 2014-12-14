<?php

class AdminController extends BaseController
{
	
	public function index()
	{
		return  View::make('admin.dashboard');
	}
	
	public function openCV()
	{
		return View::make('admin.cv');
	}
	
	public function openCVCreate()
	{
		return View::make('admin.cv_create');
	}
}