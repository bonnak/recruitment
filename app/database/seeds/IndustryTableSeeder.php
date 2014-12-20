<?php
class IndustryTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'industries' )->truncate ();
		
		Industry::create ( [ 
				'name' => 'Advertising / Media / Publishing' 
		] );		
		Industry::create ( [ 
				'name' => 'Architecture / Construction' 
		] );		
		Industry::create ( [ 
				'name' => 'Banking / Financial' 
		] );		
		Industry::create ( [ 
				'name' => 'Clothing / Garment' 
		] );		
		Industry::create ( [ 
				'name' => 'Cosmetics / Beauty' 
		] );		
		Industry::create ( [ 
				'name' => 'Education' 
		] );		
		Industry::create ( [ 
				'name' => 'Information Technology' 
		] );		
		Industry::create ( [ 
				'name' => 'Insurance' 
		] );		
		Industry::create ( [ 
				'name' => 'Energy / Oil / Gasoline' 
		] );		
		Industry::create ( [ 
				'name' => 'Entertainment' 
		] );		
		Industry::create ( [ 
				'name' => 'Food &amp; Beverages' 
		] );		
		Industry::create ( [ 
				'name' => 'Freight / Shipping / Delivery' 
		] );		
		Industry::create ( [ 
				'name' => 'General Business Services' 
		] );		
		Industry::create ( [ 
				'name' => 'Hospital / Pharmacy' 
		] );		
		Industry::create ( [ 
				'name' => 'Industrial Machinery' 
		] );		
		Industry::create ( [ 
				'name' => 'Hotel / Accommodation' 
		] );		
		Industry::create ( [ 
				'name' => 'Human Resources / Consultant' 
		] );		
		Industry::create ( [ 
				'name' => 'Manufacturing' 
		] );		
		Industry::create ( [ 
				'name' => 'NGO / Social Services' 
		] );		
		Industry::create ( [ 
				'name' => 'Other' 
		] );		
		Industry::create ( [ 
				'name' => 'Property Management' 
		] );		
		Industry::create ( [ 
				'name' => 'Real Estate' 
		] );		
		Industry::create ( [ 
				'name' => 'Recruiting Services' 
		] );		
		Industry::create ( [ 
				'name' => 'Sports &amp; Recreation' 
		] );		
		Industry::create ( [ 
				'name' => 'Telecommunication' 
		] );		
		Industry::create ( [ 
				'name' => 'Tourism' 
		] );		
		Industry::create ( [ 
				'name' => 'Trading' 
		] );		
		Industry::create ( [ 
				'name' => 'Wholesale / Retail' 
		] );	
	}
}
