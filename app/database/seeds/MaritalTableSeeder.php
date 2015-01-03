<?php
class MaritalTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'marital' )->truncate ();
		
		DB::table ( 'marital' )->insert([
			['id' => 1, 'status' => 'Single'],
			['id' => 2, 'status' => 'Married'],
			['id' => 3, 'status' => 'Divorced'],
		]);
	}
}