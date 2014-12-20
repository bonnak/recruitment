<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDesireTable extends Migration {
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		if (! Schema::hasTable ( 'industries' )) {
			Schema::create ( 'industries', function ($table) {
				$table->increments ( 'id' );
				$table->string ( 'name', 500 );
				$table->timestamps ();
			} );
		}
		
		if (! Schema::hasTable ( 'functions' )) {
			Schema::create ( 'functions', function ($table) {
				$table->increments ( 'id' );
				$table->string ( 'name', 500 );
				$table->timestamps ();
			} );
		}
		
		if (! Schema::hasTable ( 'locations' )) {
			Schema::create ( 'locations', function ($table) {
				$table->increments ( 'id' );
				$table->string ( 'name', 500 );
				$table->string ( 'type', 3 )->nullable ();
				$table->timestamps ();
			} );
		}
		
		if (! Schema::hasTable ( 'salaries' )) {
			Schema::create ( 'salaries', function ($table) {
				$table->increments ( 'id' );
				$table->integer ( 'min');
				$table->integer ( 'max')->nullable();
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
		Schema::dropIfExists ( 'industries' );
		Schema::dropIfExists ( 'functions' );
		Schema::dropIfExists ( 'locations' );
		Schema::dropIfExists ( 'salaries' );
	}
}
