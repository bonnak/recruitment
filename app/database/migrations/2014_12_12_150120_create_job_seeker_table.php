<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_seekers', function($table){
			$table->integer('id');
			$table->string('surname');
			$table->string('name');
			$table->char('sex', 1);
			$table->date('date_of_birth');
			$table->string('place_of_birth', 500);
			$table->tinyInteger('marital_status');
			$table->text('address');
			$table->char('nationality', 3);
			$table->string('phone_number', 20);
			$table->integer('desired_industry');
			$table->integer('desired_function');
			$table->integer('desired_location');
			$table->integer('desired_salary');
			$table->integer('desired_position');
			$table->string('current_job_title');
			$table->datetime('available_date');
			
			$table->primary('id');
		});
		
		Schema::create('job_seekers_internal', function($table){
				$table->integer('id');
				$table->string('surname');
				$table->string('name');
				$table->char('sex', 1);
				$table->date('date_of_birth');
				$table->string('place_of_birth', 500);
				$table->tinyInteger('marital_status');
				$table->text('address');
				$table->char('nationality', 3);
				$table->string('phone_number', 20);
				$table->integer('desired_industry');
				$table->integer('desired_function');
				$table->integer('desired_location');
				$table->integer('desired_salary');
				$table->integer('desired_position');
				$table->string('current_job_title');
				$table->datetime('available_date');
					
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
		Schema::drop('job_seekers');
		Schema::drop('job_seekers_internal');
	}

}
