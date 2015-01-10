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
			'speaking_id'			=> 3,
			'writing_id'			=> 2,
			'reading_id'			=> 3			
		]);
		
		DB::table ( 'candidate_languages' )->insert([
			'cv_id'				=> 1,
			'language'			=> 'Korean',
			'speaking_id'			=> 2,
			'writing_id'			=> 1,
			'reading_id'			=> 3			
		]);
		
		DB::table ( 'candidate_languages' )->insert([
			'cv_id'				=> 1,
			'language'			=> 'French',
			'speaking_id'			=> 1,
			'writing_id'			=> 3,
			'reading_id'			=> 2
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