<?php
return [ 
		'menu' => [  
				'Manage Jobs' => [ 
						'Post New Job' => \URL::route ( 'employer.job-post', Auth::user ()->id ),
						'Jobs List' => \URL::route ( 'employer.job-list', Auth::user ()->id ) 
				],
				'Candidates' => [ 
						'Applied List' => \URL::route ( 'employer.applied-job', Auth::user ()->id ), 
						'CV Search' => \URL::route ('employer.cv.search', Auth::user()->id ),
						'Your Favorite CV' => '#' 
				// 'Recommend CV' => '#',
				// 'Product & Service' => [
				// 'Select a Plan' => '#',
				// 'Your Credit' => '#',
				// 'Plan History' => '#',
				// ],
				],
				'Feature' => [ 
						'Companies' => '#',
						'Agencies' => '#' 
				],
				'Account Setting' => [ 
						'My Profile' => '#',
						'Change Email' => '#',
						'Change Password' => '#',
						'Logout' => \URL::route ( 'user.logout' ) 
				] 
		] 
];
?>