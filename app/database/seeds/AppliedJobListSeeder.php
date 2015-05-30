<?php
class AppliedJobListSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		/**
		 * *** Candidate table ****
		 */
		DB::table ( 'applied_job_list' )->truncate ();
		
		AppliedJobList::create ( [ 
				'job_id' => 1,
				'cv_id'  => 1,
				'status' => 1
		] );
		AppliedJobList::create ( [ 
				'job_id' => 2,
				'cv_id'  => 2,
				'status' => 1
		] );
		AppliedJobList::create ( [ 
				'job_id' => 3,
				'cv_id'  => 3,
				'status' => 0
		] );
	}
}