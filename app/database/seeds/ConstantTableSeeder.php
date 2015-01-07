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
		
		// Seed table Degree.
		DB::table('degree')->truncate();
		DB::table('degree')->insert([
			['id' => 1, 'description' => 'Bachelor'],
			['id' => 2, 'description' => 'Master'],
			['id' => 3, 'description' => 'PhD'],
		]);
		
		// Seed table Schooling Situation.
		DB::table('sch_situation')->truncate();
		DB::table('sch_situation')->insert([
			['id' => 1, 'description' => 'Studying'],
			['id' => 3, 'description' => 'Finished'],
			['id' => 4, 'description' => 'Leave'],
		]);
		
		// Seed table Level.
		DB::table('levels')->truncate();
		DB::table('levels')->insert([
		['id' => 1, 'description' => 'Poor'],
		['id' => 3, 'description' => 'Fair'],
		['id' => 4, 'description' => 'Good'],
		['id' => 5, 'description' => 'Very Good'],
		['id' => 6, 'description' => 'Excellent'],
		]);
	}
}