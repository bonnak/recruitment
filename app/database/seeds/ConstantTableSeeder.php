<?php
class ConstantTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// Seed table Marital.
		DB::table ( 'marital' )->truncate ();		
		DB::table ( 'marital' )->insert([
			['id' => 'S', 'status' => 'Single', 'status_kh'	=>	'នៅលីវ'],
			['id' => 'M', 'status' => 'Married', 'status_kh'	=>	'រៀបការ'],
			['id' => 'D', 'status' => 'Divorced', 'status_kh'	=>	'លែងលះ'],
		]);
	}
}