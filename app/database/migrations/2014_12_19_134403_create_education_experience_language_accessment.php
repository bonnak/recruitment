<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateEducationExperienceLanguageAccessment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('education', function($table){
			$table->integer('id');
			$table->string('institute');
			$table->string('major');
			$table->string('degree');
			$table->string('situation');
			$table->integer('graduation_year');
			$table->integer('graduation_month');
			$table->timestamps();
		});
		
		Schema::create('experience', function($table){
			$table->integer('id');
			$table->string('company_name');
			$table->string('industry');
			$table->string('function');
			$table->string('location');
			$table->string('job_title');
			$table->integer('last_salary');
			$table->integer('from_year');
			$table->integer('from_month');
			$table->integer('to_year');
			$table->integer('to_month');
			$table->integer('period');
			$table->string('type');
			$table->text('job_description');
			$table->text('leaving_reason');
			$table->timestamps();
		});
		
		Schema::create('language', function($table){
			$table->integer('id');
			$table->string('language');
			$table->string('conversation');
			$table->string('writing');
			$table->string('reading');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('education');
		Schema::dropIfExists('experience');
		Schema::dropIfExists('language');
	}

}
