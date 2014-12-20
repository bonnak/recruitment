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
		Schema::create ( 'industries', function ($table) {
			$table->increments ( 'id' );
			$table->string ( 'name', 500 );
			$table->timestamps ();
		} );
		
		Schema::create ( 'functions', function ($table) {
			$table->increments ( 'id' );
			$table->string ( 'name', 500 );
			$table->timestamps ();
		} );
		
		Schema::create ( 'locations', function ($table) {
			$table->increments ( 'id' );
			$table->string ( 'name', 500 );
			$table->string ( 'type', 3 )->nullable ();
			$table->timestamps ();
		} );
		
		Schema::create ( 'salaries', function ($table) {
			$table->increments ( 'id' );
			$table->string ( 'range', 500 );
			$table->timestamps ();
		} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop ( 'industries' );
		
		Schema::drop ( 'functions' );
		
		Schema::drop ( 'locations' );
		
		Schema::drop ( 'salaries' );
	}
}
