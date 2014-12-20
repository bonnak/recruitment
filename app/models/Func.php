<?php

class Func extends Eloquent 
{
	protected $table = 'functions';
	protected $fillable = ['name', 'created_at', 'updated_at'];
}