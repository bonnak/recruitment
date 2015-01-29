<?php

return [

	'months'	=> [
		['name' => 'January', 'num' => 1],
		['name' => 'February', 'num' => 2],
		['name' => 'March', 'num' => 3],
		['name' => 'April', 'num' => 4],
		['name' => 'May', 'num' => 5],
		['name' => 'June', 'num' => 6],
		['name' => 'July', 'num' => 7],
		['name' => 'August', 'num' => 8],
		['name' => 'Septemper', 'num' => 9],
		['name' => 'October', 'num' => 10],
		['name' => 'November', 'num' => 11],
		['name' => 'December', 'num' => 12],
	]
		
	,

	'default'	=> [
		'menu'	=> [
			'Browse Jobs' => [ 
					'Categories' => '#',
					'Industries' => '#',
					'Locations' => '#',
					'Salary' => '#' 
			],
			
			'Feature' => [ 
					'Companies' => '#',
					'Agencies' => '#' 
			] 
		],
	]

	,

	'candidate'		=>	[
		'menu'		=>	[
			'Dashboard' => '#',
			'CV and Cover Letters' => [ 
					'Create a CV' => URL::route ( 'candidate.cv.create' ),
					'My CV' => URL::route('candidate.cvs'),
					'Create a Cover Letter' => '#',
					'My Cover Letter' => '#' 
			],
			'Jobs' => [ 
					'Recommended Jobs' => '#',
					'Job Alert' => '#',
					'Saved Jobs' => '#',
					'Application History' => '#' 
			],
			'Career Guide' => [ 
					'How to write CV' => '#',
					'How to write Cover letter' => '#',
					'How to apply job' => '#' 
			],
			'Feature' => [ 
					'Companies' => '#',
					'Agencies' => '#' 
			],
			'Account Setting' => [ 
					'My Profile' => URL::route('candidate.cv.profile'),
					'Change Email' => '#',
					'Change Password' => '#',
					'Logout' => URL::route ( 'user.logout' ) 
			] 
		]
	]
	
	,
	
	'employer'		=>	[
		'menu'		=>	[
			'Dashboard' => '#',
			'CV and Cover Letters' => [
				'Create a CV' => URL::route ( 'candidate.cv.create' ),
				'My CV' => URL::route('candidate.cvs'),
				'Create a Cover Letter' => '#',
				'My Cover Letter' => '#'
			],
			'Jobs' => [
				'Recommended Jobs' => '#',
					'Job Alert' => '#',
					'Saved Jobs' => '#',
					'Application History' => '#'
			],
			'Recruitment' => [
				'Post Jobs' => '#',
				'CV Search' => '#',
				'Purchase Service Packages' => '#',
				'Manage Jobs' => '#'
			],
			'Feature' => [
				'Companies' => '#',
				'Agencies' => '#'
			],
			'Account Setting' => [
				'My Profile' => URL::route('candidate.cv.profile'),
				'Change Email' => '#',
				'Change Password' => '#',
				'Logout' => URL::route ( 'user.logout' )
			]
		]
	]
];