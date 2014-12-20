<?php
class LocationTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'locations' )->truncate ();
		
		Location::create([
			'name'	=> 'Phnom Penh',
			'type'	=> '200'
		]);
		Location::create([
			'name'	=> 'Siem Reap',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Preah Sihanouk',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Banlung',
			'type'	=> '010'
		]);
		Location::create([
			'name'	=> 'Banteay Meanchey',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Battambang',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Bavet',
			'type'	=> '020'
		]);
		Location::create([
			'name'	=> 'Kampong Cham',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Kampong Chhnang',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Kampong Speu',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Kampong Thom',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Kampot',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Kandal',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Kep',
			'type'	=> '020'
		]);
		Location::create([
			'name'	=> 'Koh Kong',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Takhmao',
			'type'	=> '020'
		]);
		Location::create([
			'name'	=> 'Kratie',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Mondulkiri',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Oddor Meanchey',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Koh Kong',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Pailin',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Poipet',
			'type'	=> '020'
		]);
		Location::create([
			'name'	=> 'Preah Vihear',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Prey Veng',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Pursat',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Rattanakiri',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Sre Ambel',
			'type'	=> '010'
		]);
		Location::create([
			'name'	=> 'Svay Rieng',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Takeo',
			'type'	=> '100'
		]);
		Location::create([
			'name'	=> 'Tabung Khum',
			'type'	=> '010'
		]);
	}
}