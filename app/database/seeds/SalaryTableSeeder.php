<?php
class SalaryTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'salaries' )->truncate ();
		
		Salary::create([
			'min'	=> 4000
		]);
		Salary::create([
			'min'	=> 2000,
			'max'	=> 4000
		]);
		Salary::create([
			'min'	=> 1000,
			'max'	=> 2000
		]);
		Salary::create([
			'min'	=> 500,
			'max'	=> 1000
		]);
		Salary::create([
			'min'	=> 300,
			'max'	=> 500
		]);
		Salary::create([
			'max'	=> 300
		]);
	}
}