<?php
class CountryTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'countries' )->truncate ();
		
		Country::create ([
			'country_name'	=> 'Cambodia',
			'nationality'	=> 'Cambodian'
		]);

		Country::create ([
			'country_name'	=> 'Thailand',
			'nationality'	=> 'Thai'
		]);
		
		Country::create ([
			'country_name'	=> 'Vietname',
			'nationality'	=> 'Vietnamese'
		]);
		
		Country::create ([
			'country_name'	=> 'Singapore',
			'nationality'	=> 'Singaporean'
		]);
		
		Country::create ([
			'country_name'	=> 'Malaysia',
			'nationality'	=> 'Malaysian'
		]);
		
		Country::create ([
			'country_name'	=> 'Indonesia',
			'nationality'	=> 'Indonesian'
		]);
		
		Country::create ([
			'country_name'	=> 'Loas',
			'nationality'	=> 'Loa'
		]);
		
		Country::create ([
			'country_name'	=> 'Philippines',
			'nationality'	=> 'Philippine'
		]);
		
		Country::create ([
			'country_name'	=> 'China',
			'nationality'	=> 'Chinese'
		]);
		
		Country::create ([
			'country_name'	=> 'Japan',
			'nationality'	=> 'Japanese'
		]);
		
		Country::create ([
			'country_name'	=> 'Korea',
			'nationality'	=> 'Korean'
		]);

	}
}