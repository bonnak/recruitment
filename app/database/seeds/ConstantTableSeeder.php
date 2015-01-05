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
		
		
		// Seed table Gender
		DB::table ( 'gender' )->truncate ();
		DB::table ( 'gender' )->insert([
			['id' => 'M', 'sex' => 'Male'],
			['id' => 'F', 'sex' => 'Female'],
		]);
		
		// Seed table Job Term.
		DB::table('job_term')->truncate();
		DB::table('job_term')->insert([
			['id' => 1, 'term' => 'Full Time'],
			['id' => 2, 'term' => 'Part Time'],
			['id' => 3, 'term' => 'Internship'],
		]);
	}
}