<?php

class Constants extends Eloquent 
{
	public static function getMaritalStatuses()
	{
		return \DB::table('marital')
					->select('id')
					->orderBy('id', 'desc')
					->get();
	}
	
	public static function getGenders()
	{
		return \DB::table('gender')
					->select('id')
					->orderBy('id', 'desc')
					->get();
	}
	
	public static function getJobTerm()
	{
		return  \DB::table('job_term')
					->select('*')
					->get();
	}
	
	public static function getDegrees()
	{
		return \DB::table('degree')
					->select('*')
					->get();
	}
	
	public static function getSchoolingSituations()
	{
		return \DB::table('sch_situation')
					->select('*')
					->get();
	}
	
	public static function getLevels()
	{
		return \DB::table('levels')
					->select('*')
					->get();
	}
}