app_candidate.controller('CvEditCtrl', function($scope, $filter, $http, Experience){	
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

	// Load CV detail from the server.
	$scope.loadData = function(cv_id){
		return $http.get(
			'/user/candidate/cv/edit/' + cv_id + '/experience'
		).success(function(data){
			var experiences = data.work_experiences;
			
			// Push experience element to the experiences collection scope.
			angular.forEach(experiences, function(value, key) {
				var experience = new Experience;
				
				// Convert raw data into experience object.
				experience.setValue(value, true);
				
				// Add a new element.
				$scope.experiences.push(experience);
			});
			
			
		}).error(function(data, status){
			
		});
	};
	
	// Update an experience information.
	$scope.updateExperience = function(experience){		
		$scope.experience.update(
				'/user/candidate/cv/edit/' + $scope.cv_id + '/experience/' + experience.id, 
				experience
		).success(function(data){
			// Save new employee to draft.
			experience.saveDraft(experience);
			
			// Close form after update.
			experience.frm_exp_edit_show = false;
			experience.content_exp_hide = false;
			
		}).error(function(data, status){
			// Restore to old value.
			experience.setValue(experience.draft);
		});
	}
	
	$scope.deleteExperience = function(experience){
		$scope.experience.delete(
				'/user/candidate/cv/edit/' + $scope.cv_id + '/experience/' + experience.id
		).success(function(data){	
			// Remove experience item from the list.
			$scope.experiences.splice($scope.experiences.indexOf(experience), 1);
			
			// Close form after delete.
			experience.frm_exp_edit_show = false;
			experience.content_exp_hide = false;
			
		}).error(function(data, status){
		});
	}
	
	$scope.addNewExperience =  function(){
		var post_data = $scope.experience.new;
		
		$scope.experience.createNew(
			'/user/candidate/cv/edit/' + $scope.cv_id + '/experience', 
			post_data
		).success(function(data){
			
			
			// Close new form.
			$scope.frm_exp_new_show = false;
			
		}).error(function(data, status){
			
		});
	}

	$scope.getExperienceDate = function(year, month){
		var str_date;

		if(year !== null && month !== null){
			str_date = $filter('date')(new Date(year, month - 1), 'MMMM - yyyy');
		}
		else if(year !== null){
			str_date = year;
		}
		else{
			str_date = 'Present';
		}		

		return str_date;
	}
});