<?php
class WorkExperienceTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'candidate_experiences' )->truncate ();	
			
		DB::table ( 'candidate_experiences' )->insert([
			'cv_id' => 1 ,
			'company_name'=> 'Camintel' ,
			'industry_id'=> 1 ,
			'function_id'=> 3 ,
			'location_id'=> 5 ,
			'job_title'=> 'Technician' ,
			'from_date'=> '1990-01-01' ,
			'to_date'=> '2000-01-01' ,
			'period'=> 10 ,
			'job_description'=> 'Solar installation' ,
			'leaving_reason'=> 'Seek new experience' ,
		]);
		
		DB::table ( 'candidate_experiences' )->insert([
			'cv_id' => 1 ,
			'company_name'=> 'Camintel' ,
			'industry_id'=> 1 ,
			'function_id'=> 3 ,
			'location_id'=> 5 ,
			'job_title'=> 'Designer' ,
			'from_date'=> '1990-01-01' ,
			'to_date'=> '2000-01-01' ,
			'period'=> 10 ,
			'job_description'=> 'Interior design' ,
			'leaving_reason'=> 'Seek new experience' ,
		]);
		
		DB::table ( 'candidate_experiences' )->insert([
			'cv_id' => 1 ,
			'company_name'=> 'Metfone' ,
			'industry_id'=> 3 ,
			'function_id'=> 1 ,
			'location_id'=> 1 ,
			'job_title'=> 'BCCS' ,
			'from_date'=> '1990-01-01' ,
			'to_date'=> '2000-01-01' ,
			'period'=> 10 ,
			'job_description'=> 'Customer care' ,
			'leaving_reason'=> 'Seek new experience' ,
		]);
	}
}