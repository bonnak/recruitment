<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
class CreateJobSeekerTable extends Migration {
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		if (! Schema::hasTable ( 'candidates' )) {
			Schema::create ( 'candidates', function ($table) {
				$table->integer ( 'id' );
				$table->string ( 'surname' );
				$table->string ( 'name' );
				$table->char ( 'sex', 1 );
				$table->date ( 'date_of_birth' );
				$table->string ( 'marital_id', 3 );
				$table->char ( 'nationality_id', 3 );
				$table->string ( 'phone_number', 20 );
				$table->string ( 'email' );
				$table->integer ( 'residence_id' );
				$table->text ( 'address' )->nullable ();
				$table->timestamps ();
				
				$table->primary ( 'id' );
			} );
		}
		
		if (! Schema::hasTable ( 'cv' )) {
			Schema::create ( 'cv', function ($table) {
				$table->increments ( 'id' );
				$table->integer('candidate_id');
				$table->string('title');
				$table->tinyInteger('searchable')->default(1);
				$table->integer ( 'desired_industry' )->nullable ();
				$table->integer ( 'desired_function' )->nullable ();
				$table->integer ( 'desired_location' )->nullable ();
				$table->integer ( 'desired_salary' )->nullable ();
				$table->integer ( 'desired_position' )->nullable ();
				$table->integer ( 'job_term' )->nullable ();
				$table->datetime ( 'available_date' )->nullable ();
				$table->timestamps ();
			} );
		}		
		
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists ( 'candidates' );
		Schema::dropIfExists ( 'cv' );
	}
}
