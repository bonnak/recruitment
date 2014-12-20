<?php

class MainController extends BaseController 
{
	public function index()
	{
		$industries = Industry::get();
		$functions = Func::get();
		
		return View::make('main')->with([
				'industries' 	=> $industries,
				'functions'		=> $functions
		]);
	}

}
