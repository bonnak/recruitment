<?php
class JobSeekerTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'candidates' )->truncate ();
		
		Candidate::create([
			'id'				=> 2,
			'surname'			=> 'Cole',
			'name'				=> 'Neang',
			'sex'				=> 'M',
			'date_of_birth'		=> '1986-11-27',
			'marital_status'	=> 1,
			'nationality'		=> 1,
			'phone_number'		=> '012000888',
			'email'				=> 'candidate1@gmail.com',
			'residence'			=> 1,
			'address'			=> '#59, st456, Tuol Tumpoung, Chamkar Morn',
			'desired_industry'	=> 1,
			'desired_function'	=> 1,
			'desired_location'	=> 1,
			'desired_salary'	=> 1,
			'desired_position'	=> 1,
			'current_job_title'	=> 'Web Developer',
			'available_date'	=> '2014-01-01'
		]);
	}
}