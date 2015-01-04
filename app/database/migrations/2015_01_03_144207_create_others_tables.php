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
	}

}