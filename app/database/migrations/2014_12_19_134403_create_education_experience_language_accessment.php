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
		if (! Schema::hasTable ( 'candidate_education' )){
			Schema::create('candidate_education', function($table){
				$table->increments('id');
				$table->integer('cv_id');
				$table->string('institute');
				$table->string('major');
				$table->integer('degree_id');
				$table->integer('situation_id');
				$table->date('graduation_date')->nullable();
				$table->timestamps();
			});
		}
		
		if (! Schema::hasTable ( 'candidate_experiences' )){
			Schema::create('candidate_experiences', function($table){
				$table->increments('id');
				$table->integer('cv_id');
				$table->string('company_name')->nullable();
				$table->integer('industry_id')->nullable();
				$table->integer('function_id')->nullable();
				$table->integer('location_id')->nullable();
				$table->string('job_title')->nullable();
				$table->integer('last_salary')->nullable();
				$table->date('from_date')->nullable();
				$table->date('to_date')->nullable();
				$table->integer('period')->nullable();
				$table->string('type')->nullable();
				$table->text('job_description')->nullable();
				$table->text('leaving_reason')->nullable();
				$table->timestamps();
			});
		}
		
		if (! Schema::hasTable ( 'candidate_languages' )){
			Schema::create('candidate_languages', function($table){
				$table->increments('id');
				$table->integer('cv_id');
				$table->string('language');
				$table->tinyInteger('speaking');
				$table->tinyInteger('writing');
				$table->tinyInteger('reading');
				$table->timestamps();
			});
		}
		
		if (! Schema::hasTable ( 'candidate_accessment_scores' )) {
			Schema::create ( 'candidate_accessment_scores', function ($table) {
				$table->integer ( 'candidate_id' );
				$table->integer ( 'experience' )->nullable();
				$table->integer ( 'attitude' )->nullable();
				$table->integer ( 'appearance' )->nullable();
				$table->integer ( 'language' )->nullable();
				$table->integer ( 'skill' )->nullable();
				$table->integer ( 'reason_introduce' )->nullable();
				$table->integer ( 'memo' )->nullable();
				$table->timestamps();
			} );
		}
		
		if (! Schema::hasTable ( 'candidate_skills' )) {
			Schema::create ( 'candidate_skills', function ($table) {
				$table->increments('id');
				$table->integer('cv_id');
				$table->string ( 'name' );
				$table->integer ( 'level' );
				$table->integer ( 'y_experience' )->nullable();
				$table->timestamps();
			} );
		}
		
		if (! Schema::hasTable ( 'candidate_apply_list' )) {
			Schema::create ( 'candidate_apply_list', function ($table) {
				$table->integer ( 'candidate_id' );
				$table->integer ( 'job_id' );
				$table->datetime ( 'apply_date' );
				$table->timestamps();
			} );
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('candidate_education');
		Schema::dropIfExists('candidate_experiences');
		Schema::dropIfExists('candidate_languages');
		Schema::dropIfExists ( 'candidate_accessment_scores' );
		Schema::dropIfExists ( 'candidate_skills' );
		Schema::dropIfExists ( 'candidate_apply_list' );
	}

}
