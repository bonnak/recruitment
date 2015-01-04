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
			'marital_id'	=> 'S',
			'nationality_id'		=> 1,
			'phone_number'		=> '012000888',
			'email'				=> 'employee1@mail.com',
			'residence_id'			=> 1,
			'address'			=> '#59, st456, Tuol Tumpoung, Chamkar Morn',
		]);
	}
}