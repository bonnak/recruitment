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
				$table->integer('id');
				$table->string('institute');
				$table->string('major');
				$table->string('degree');
				$table->string('situation');
				$table->integer('graduation_year');
				$table->integer('graduation_month');
				$table->timestamps();
			});
		}
		
		if (! Schema::hasTable ( 'candidate_experiences' )){
			Schema::create('candidate_experiences', function($table){
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
		}
		
		if (! Schema::hasTable ( 'candidate_languages' )){
			Schema::create('candidate_languages', function($table){
				$table->integer('id');
				$table->string('language');
				$table->string('conversation');
				$table->string('writing');
				$table->string('reading');
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
			} );
		}
		
		if (! Schema::hasTable ( 'candidate_skills' )) {
			Schema::create ( 'candidate_skill', function ($table) {
				$table->integer ( 'candidate_id' );
				$table->string ( 'name' );
				$table->integer ( 'level' );
			} );
		}
		
		if (! Schema::hasTable ( 'candidate_apply_list' )) {
			Schema::create ( 'candidate_apply_list', function ($table) {
				$table->integer ( 'candidate_id' );
				$table->integer ( 'job_id' );
				$table->datetime ( 'apply_date' );
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
