<?php
class UserTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'users' )->truncate ();
		
		User::create ( [ 
			'user_name' => 'admin',
			'password'	=> Hash::make('12345678'),
			'activated'	=> 1,
			'role'	=> 0, // Admin
		] );
		User::create ( [ 
			'user_name' => 'employee1',
			'password'	=> Hash::make('12345678'),
			'email'		=> 'employee1@mail.com',
			'activated'	=> 1,
			'user_type'	=> 2, // Job seeker
		] );
		User::create ( [ 
			'user_name' => 'employer1',
			'password'	=> Hash::make('12345678'),
			'email'		=> 'employer1@mail.com',
			'activated'	=> 1,
			'user_type'	=> 1, // Employer
		] );
	}
}