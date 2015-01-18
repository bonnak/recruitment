<?php
class UserTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		
		/*****  Users table *****/
		DB::table ( 'users' )->truncate ();
		
		// Admin backend user.
		User::create ( [ 
			'username' => 'admin',
			'password'	=> Hash::make('12345678'),
			'activated'	=> 1,
			'role'	=> 0, // Admin
		] );
		
		// Employee login user.
		User::create ( [ 
			'username' => 'employee1',
			'password'	=> Hash::make('12345678'),
			'email'		=> 'employee1@mail.com',
			'activated'	=> 1,
			'user_type'	=> 2,
			'agree_term'	=> 1,
		] );
		
		// Employer login user
		User::create ( [ 
			'username' => 'employer1',
			'password'	=> Hash::make('12345678'),
			'email'		=> 'employer1@mail.com',
			'activated'	=> 1,
			'user_type'	=> 1,
			'agree_term'	=> 1,
		] );
		
		
		/***** Candidate table *****/
		DB::table ( 'candidates' )->truncate ();
		
		Candidate::create([
			'id'				=> 2,
			'surname'			=> 'Cole',
			'name'				=> 'Neang',
			'sex'				=> 'M',
			'date_of_birth'		=> '1986-11-27',
			'marital_id'		=> 1,
			'nationality_id'	=> 'KHM',
			'phone_number'		=> '012000888',
			'email'				=> 'employee1@mail.com',
			'city_province_id'	=> 1,
			'address'			=> '#59, st456, Tuol Tumpoung, Chamkar Morn',
		]);
	}
}