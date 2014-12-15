<?php

class IndustryController extends BaseController
{
	public function index()
	{
		return Industry::get();
	}
	
	public function destroy($id)
	{
		return Industry::destroy($id);
	}
}