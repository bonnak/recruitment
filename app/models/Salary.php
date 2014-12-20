<?php

class Salary extends Eloquent 
{
	protected $table = 'salaries';
	protected $fillable = ['min', 'max', 'created_at', 'updated_at'];
}