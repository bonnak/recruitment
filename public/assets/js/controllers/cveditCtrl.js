app_candidate.controller('CvEditCtrl', function($scope, $filter, Experience){
	$scope.experiences = [];
	$scope.experience = new Experience;	

	/*****
	*	Add a new experience.
	*/
	$scope.addExperience = function(item){
		var experience = new Experience;

		// Item must be object.
		if (typeof item !== 'object') return;

		// Set value of a new experience element.
		experience.job_title = item.job_title;
		experience.company_name = item.company_name;
		experience.from_month = item.from_month;
		experience.from_year = item.from_year;
		experience.to_month = item.to_month;
		experience.to_year = item.to_year;
		experience.location = item.location;
		experience.description = item.description;

		// Add new experience element to container.
		$scope.experiences.push(experience);
	}
	
	$scope.save =  function(){
		var url = $('#add_new_experience_frm').attr('action'),
			post_data = $scope.experience.new;
		
		$scope.experience.createNew(
			url, 
			post_data
		).success(function(data){
			console.log(data);
		}).error(function(data, status){
			console.log(data.error);
		});
	}
	
	$scope.closeForm = function(){	
		// $scope.experience.clearItem();
		
		// $scope.frm_exp_new_show = false;
	}

	$scope.getExperienceDate = function(year, month){
		var str_date;

		if(year !== '' && month !== ''){
			str_date = $filter('date')(new Date(year, month - 1), 'MMMM - yyyy');
		}
		else if(year !== ''){
			str_date = year;
		}
		else{
			str_date = 'Present';
		}		

		return str_date;
	}
});