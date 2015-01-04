<?php
class CVTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'cv' )->truncate ();
		
		CV::create ( [ 
			'candidate_id'		=> 2,
			'title'				=> 'CV 1',
			'searchable'		=> 1,
			'desired_industry' => 3, 
			'desired_function' => 5, 
			'desired_location' => 3, 
			'desired_salary' => 3, 
			'desired_position' => 9,  
			'available_date' => date('Y-m-d',strtotime('12/20/2014'))
		] );	
		
		CV::create ( [ 
			'candidate_id'		=> 2,
			'title'				=> 'CV 2',
			'searchable'		=> 0,
			'desired_industry' => 2, 
			'desired_function' => 5, 
			'desired_location' => 3, 
			'desired_salary' => 3, 
			'desired_position' => 9, 
			'available_date' => date('Y-m-d',strtotime('12/20/2014')),
		] );
		
		CV::create ( [ 
			'candidate_id'		=> 2,
			'title'				=> 'CV 3',
			'searchable'		=> 1,
			'desired_industry' => 3, 
			'desired_function' => 5, 
			'desired_location' => 3, 
			'desired_salary' => 3, 
			'desired_position' => 9, 
			'available_date' => date('Y-m-d',strtotime('12/20/2014')),
		] );	
	}
}
