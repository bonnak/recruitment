<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateOthersTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('marital', function ($table){
			$table->string('id', 2);
			$table->string('status');
			$table->string('status_kh');
			
			$table->primary('id');
		});
		
		Schema::create('gender', function($table){
			$table->char('id', 1);
			$table->string('sex');
			
			$table->primary('id');
		});
		
		Schema::create('job_term', function ($table){
			$table->tinyInteger('id');
			$table->string('term');
			
			$table->primary('id');
		});
		
		Schema::create('degree', function ($table){
			$table->tinyInteger('id');
			$table->string('description');
			
			$table->primary('id');
		});
		
		Schema::create('sch_situation', function ($table){
			$table->tinyInteger('id');
			$table->string('description');
				
			$table->primary('id');
		});
		
		Schema::create('levels', function ($table){
			$table->tinyInteger('id');
			$table->string('description');
			
			$table->primary('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('marital');
		Schema::drop('gender');
		Schema::drop('job_term');
		Schema::drop('degree');
		Schema::drop('sch_situation');
		Schema::drop('levels');
	}

}
