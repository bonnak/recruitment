<?php
class FunctionTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'functions' )->truncate ();
		
		Func::create ( [ 
			'name' => 'Accounting / Financial' 
		] );
		Func::create ( [
			'name' => 'Administrative'
		] );
		Func::create ( [
			'name' => 'Advertising / Media'
		] );
		Func::create ( [
			'name' => 'Architecture'
		] );
		Func::create ( [
			'name' => 'Arts / Creative Design'
		] );
		Func::create ( [
			'name' => 'Assistant / Secretary'
		] );
		Func::create ( [
			'name' => 'Audit / Taxation'
		] );
		Func::create ( [
			'name' => 'Automotive / Vehicle'
		] );
		Func::create ( [
			'name' => 'Banking / Insurance'
		] );
		Func::create ( [
			'name' => 'Catering / Fast food restaurant'
		] );
		Func::create ( [
			'name' => 'Consultancy'
		] );
		Func::create ( [
			'name' => 'Construction / Engineering'
		] );
		Func::create ( [
			'name' => 'Cosmetic Services'
		] );
		Func::create ( [
			'name' => 'Customer Service'
		] );
		Func::create ( [
			'name' => 'Education / Teaching'
		] );
		Func::create ( [
			'name' => 'Electronic / Electrical / Equipment'
		] );
		Func::create ( [
			'name' => 'Food &amp; Beverages'
		] );
		Func::create ( [
			'name' => 'Freight / Shipping / Delivery'
		] );
		Func::create ( [
			'name' => 'General Business Services'
		] );
		Func::create ( [
			'name' => 'Human Resources / Consultant'
		] );
		Func::create ( [
			'name' => 'IT'
		] );
		Func::create ( [
			'name' => 'Lawyer / Legal Services'
		] );
		Func::create ( [
			'name' => 'Management'
		] );
		Func::create ( [
			'name' => 'Manufacturing'
		] );
		Func::create ( [
			'name' => 'Marketing'
		] );
		Func::create ( [
			'name' => 'Medical / Health / Nursing'
		] );
		Func::create ( [
			'name' => 'Merchandising / Purchasing'
		] );
		Func::create ( [
			'name' => 'Operation'
		] );
		Func::create ( [
			'name' => 'Project Management'
		] );
		Func::create ( [
			'name' => 'Property / Real Estate'
		] );
		Func::create ( [
			'name' => 'Quality Control'
		] );
		Func::create ( [
			'name' => 'Restaurant / Hotel / Casino'
		] );
		Func::create ( [
			'name' => 'Sale'
		] );
		Func::create ( [
			'name' => 'Security guard / Driver'
		] );
		Func::create ( [
			'name' => 'Technician'
		] );
		Func::create ( [
			'name' => 'Telecommunication'
		] );
		Func::create ( [
			'name' => 'Tourism / Guide'
		] );
		Func::create ( [
			'name' => 'Trading / Import-Export'
		] );
		Func::create ( [
			'name' => 'Translation / Interpretation'
		] );
		Func::create ( [
			'name' => 'Travel Agent / Ticket Sales'
		] );
		Func::create ( [
			'name' => 'Other'
		] );
	}
}