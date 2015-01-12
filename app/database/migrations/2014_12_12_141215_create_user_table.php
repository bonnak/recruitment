<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
class CreateUserTable extends Migration {
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		if (!Schema::hasTable ( 'users' )) {
			Schema::create ( 'users', function ($table) {
				$table->increments ( 'id' );
				$table->string ( 'user_name' );
				$table->string ( 'password' )->nullable ();
				$table->string ( 'email' );
				$table->tinyInteger ( 'activated' )->default ( 0 );
				$table->integer ( 'role' )->nullable ();
				$table->integer ( 'user_type' )->nullable ();
				$table->integer ( 'term_condition' )->nullable ();
				$table->string ( 'remember_token' )->nullable ();
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
		Schema::dropIfExists ( 'users' );
	}
}
