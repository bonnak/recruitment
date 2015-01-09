<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
	
		$this->call('ConstantTableSeeder');
		$this->call('CountryTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('FunctionTableSeeder');
		$this->call('IndustryTableSeeder');
		$this->call('LocationTableSeeder');
		$this->call('SalaryTableSeeder');
		$this->call('CVTableSeeder');
		$this->call('JobSeekerTableSeeder');
		$this->call('WorkExperienceTableSeeder');
		$this->call('CandidateEducationTableSeeder');
	}

}
