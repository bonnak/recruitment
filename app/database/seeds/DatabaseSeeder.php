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
		$this->call('UserTableSeeder');
		$this->call('CVTableSeeder');
// 		$this->call('WorkExperienceTableSeeder');
// 		$this->call('CandidateEducationTableSeeder');
// 		$this->call('CandidateLanguageAndSkillTableSeeder');
	}

}
