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
			['id' => 1, 'status' => 'Single', 'status_kh'	=>	'នៅលីវ'],
			['id' => 2, 'status' => 'Married', 'status_kh'	=>	'រៀបការ'],
			['id' => 3, 'status' => 'Divorced', 'status_kh'	=>	'លែងលះ'],
		]);
		
		// Seed table Gender.
		DB::table ( 'gender' )->truncate ();
		DB::table ( 'gender' )->insert([
			['id' => 'M', 'sex' => 'Male', 'sex_kh' => 'ប្រុស'],
			['id' => 'F', 'sex' => 'Female', 'sex_kh' => 'ស្រី'],
		]);
	}
}