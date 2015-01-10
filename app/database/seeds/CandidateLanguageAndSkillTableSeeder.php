<?php
class CandidateLanguageAndSkillTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		
		// Seeding table candidate language.
		DB::table ( 'candidate_languages' )->truncate ();	
			
		DB::table ( 'candidate_languages' )->insert([
			'cv_id'				=> 1,
			'language'			=> 'English',
			'speaking'			=> 3,
			'writing'			=> 2,
			'reading'			=> 3			
		]);
		
		DB::table ( 'candidate_languages' )->insert([
			'cv_id'				=> 1,
			'language'			=> 'Korean',
			'speaking'			=> 2,
			'writing'			=> 1,
			'reading'			=> 3			
		]);
		
		DB::table ( 'candidate_languages' )->insert([
			'cv_id'				=> 1,
			'language'			=> 'French',
			'speaking'			=> 1,
			'writing'			=> 3,
			'reading'			=> 2
		]);
		
		// Seeding table candidate skill.
		DB::table ( 'candidate_skills' )->truncate ();
			
		DB::table ( 'candidate_skills' )->insert([
			'cv_id'				=> 1,
			'name'				=> 'C#',
			'level_id'			=> 4,
			'y_experience'		=> 2
		]);
		
		DB::table ( 'candidate_skills' )->insert([
			'cv_id'				=> 1,
			'name'				=> 'Java',
			'level_id'			=> 4,
			'y_experience'		=> 1
		]);
		
		DB::table ( 'candidate_skills' )->insert([
			'cv_id'				=> 1,
			'name'				=> 'PHP',
			'level_id'			=> 5,
			'y_experience'		=> 3
		]);
		
	}
}