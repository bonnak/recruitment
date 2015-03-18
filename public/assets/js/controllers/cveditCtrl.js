app_candidate.controller('CvEditCtrl', function($scope, $filter, $compile, Experience){	
	$scope.cv_id = null;	
	$scope.experiences = [];
	$scope.experience = new Experience;		
	$scope.exp_item_state = [];
	$scope.frm_exp_new_show = false;
	
	$scope.count = 0;
	
	$scope.openNewExpForm = function(){
		$scope.frm_exp_new_show = true;
	}
	
	$scope.closeNewExpForm = function(){
		$scope.frm_exp_new_show = false;
	}

	/*****
	*	Add a new experience.
	*/
	$scope.addExperience = function(item){
		var experience = new Experience;

		// Item must be object.
		if (typeof item !== 'object') return;

		// Set value of a new experience element.
		experience.id = item.id;
		experience.job_title = item.job_title;
		experience.company_name = item.company_name;
		experience.from_month = item.from_month;
		experience.from_year = item.from_year;
		experience.to_month = item.to_month;
		experience.to_year = item.to_year;
		experience.location = item.location;
		experience.job_description = item.job_description;

		// Add new experience element to container.
		$scope.experiences.push(experience);
	}
	
	$scope.getExperiences = [];
		
	$scope.experience.getExperiences(
			'/user/candidate/cv/edit/' + 1 + '/experience'
	).success(function(data){
		angular.forEach(data, function(value, key) {
			$scope.getExperiences.push(value);
		});
	}).error(function(data, status){
		
	});
	
	$scope.updateExperience = function(experience){		
		// Get index of the current element.
		var index = $scope.experiences.indexOf(experience); 
		
		$scope.experience.update(
				'/user/candidate/cv/edit/' + $scope.cv_id + '/experience/' + experience.id, 
				experience
		).success(function(data){	
			// Close form after update.
			$scope.exp_item_state[index].frm_exp_edit_show = false;
			$scope.exp_item_state[index].content_exp_hide = false;
			
		}).error(function(data, status){
		});
	}
	
	$scope.deleteExperience = function(experience){
		// Get index of the current element.
		var index = $scope.experiences.indexOf(experience); 
		
		$scope.experience.delete(
				'/user/candidate/cv/edit/' + $scope.cv_id + '/experience/' + experience.id
		).success(function(data){		
			// Remove experience item from the list.
			$scope.exp_item_state[index].item_remove = true;
		}).error(function(data, status){
		});
	}
	
	$scope.addNewExperience =  function(){
		var post_data = $scope.experience.new;
		
//		angular.element($('#experience .items')).append($compile('<alert topic="Alert box">' + $scope.count + '</alert>')($scope));	
//		return;
		
		$scope.experience.createNew(
			'/user/candidate/cv/edit/' + $scope.cv_id + '/experience', 
			post_data
		).success(function(data){
			angular.element($('#experience .items')).append($compile('<alert topic="Alert box">' + $scope.count + '</alert>')($scope));		
			// Close new form.
			$scope.frm_exp_new_show = false;
		}).error(function(data, status){
		});
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