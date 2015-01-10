<?php
class CandidateEducationTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'candidate_education' )->truncate ();	
			
		DB::table ( 'candidate_education' )->insert([
			'cv_id'				=> 1,
			'institute'			=> 'Norton University',
			'major'				=> 'Computer Science',
			'degree_id'			=> 1,
			'situation_id'			=> 2,
			'graduation_date'	=> '2008-09-01'
		]);
		
		DB::table ( 'candidate_education' )->insert([
			'cv_id'				=> 1,
			'institute'			=> 'Norton University',
			'major'				=> 'MScIT',
			'degree_id'			=> 2,
			'situation_id'			=> 1,
		]);
	}
}