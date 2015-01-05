<?php
class WorkExperienceTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// Seed table Marital.
		DB::table ( 'candidate_experiences' )->truncate ();	
			
		DB::table ( 'candidate_experiences' )->insert([
			'cv_id' => 1 ,
			'company_name'=> 'Camintel' ,
			'industry'=> 1 ,
			'function'=> 3 ,
			'location'=> 5 ,
			'job_title'=> 'Technichian' ,
			'from_year'=> 1990 ,
			'from_month'=> 2 ,
			'to_year'=> 2000 ,
			'to_month'=> 1 ,
			'period'=> 10 ,
			'job_description'=> 'Solar installation' ,
			'leaving_reason'=> 'Seek new experience' ,
		]);
		
		DB::table ( 'candidate_experiences' )->insert([
		'cv_id' => 1 ,
		'company_name'=> 'Metfone' ,
		'industry'=> 3 ,
		'function'=> 1 ,
		'location'=> 1 ,
		'job_title'=> 'BCCS' ,
		'from_year'=> 1990 ,
		'from_month'=> 2 ,
		'to_year'=> 2000 ,
		'to_month'=> 1 ,
		'period'=> 10 ,
		'job_description'=> 'Customer care' ,
		'leaving_reason'=> 'Seek new experience' ,
		]);
	}
}