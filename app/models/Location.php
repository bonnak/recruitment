<?php

class Location extends Eloquent 
{
	protected $table = 'locations';
	protected $fillable = ['name', 'type', 'created_at', 'updated_at'];
}
