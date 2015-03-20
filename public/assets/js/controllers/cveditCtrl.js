app_candidate.controller('CvEditCtrl', function($scope, $filter, $http, Experience){	
	$scope.cv_id = null;	
	$scope.experiences = [];
	$scope.new_experience = {};	
	$scope.frm_exp_new_show = false;

	// Load CV detail from the server.
	$scope.loadData = function(cv_id){
		return $http.get(
			'/user/candidate/cv/edit/' + cv_id + '/experience'
		).success(function(cv){
			var experiences = cv.work_experiences;
			
			// Push experience element to the experiences collection scope.
			angular.forEach(experiences, function(data, key) {
				var experience = new Experience;

				// Set data CV experience ID.
				data.cv_id = cv.id;
				
				// Convert raw data into experience object.
				experience.setValue(data, true);
				
				// Add a new element.
				$scope.experiences.push(experience);

				console.log(experience);
			});		

			// Set new experience default cv_id.
			$scope.new_experience.cv_id = cv.id;	
			
		}).error(function(data, status){
			
		});
	};
	
	// Update an experience information.
	$scope.updateExperience = function(experience){	

		experience.update().success(function(data){
			// Save new employee to draft.
			experience.saveDraft(experience);

			console.log(experience);
			
			// Close experience form, and show content.
			experience.frm_exp_edit_show = false;
			experience.content_exp_hide = false;
			
		}).error(function(data, status){
			// Restore to old value.
			experience.setValue(experience.draft);
		});
	}
	
	// Delete an experience informaton.
	$scope.deleteExperience = function(experience){
		experience.delete().success(function(data){	
			// Remove experience item from the list.
			$scope.experiences.splice($scope.experiences.indexOf(experience), 1);
		}).error(function(data, status){

		});
	}
	
	// Add new experience information.
	$scope.createNewExperience =  function(data){
		var new_experience = new Experience;

		// Set new experience properties' value.
		new_experience.setValue(data, true);

		// Save new experience to database.
		new_experience.save().success(function(data){

			// set new experience id.
			new_experience.setValue(data, true);	
			
			// Add a new element.
			$scope.experiences.push(new_experience);
			
			// Close new form.
			$scope.frm_exp_new_show = false;
			
		}).error(function(data, status){
			
		});
	}

	// Get experience datetime format due to situation.
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

	// Open current edit form only, 
	// and hide all other experience form.
	$scope.openEditFormExp = function(cur_experience){
		// Hide all other edit form.
		angular.forEach($scope.experiences, function(experience, key) {
			experience.content_exp_hide = false; 
			experience.frm_exp_edit_show = false;
		});

		// Hide new form.
		$scope.frm_exp_new_show = false;

		// Show current form.
		cur_experience.content_exp_hide = true; 
		cur_experience.frm_exp_edit_show = true;
	}

	// Open new form and hide all other edit form.
	$scope.openNewExpForm = function(){
		// Hide all other edit form.
		angular.forEach($scope.experiences, function(experience, key) {
			experience.content_exp_hide = false; 
			experience.frm_exp_edit_show = false;
		});

		// Show new form
		$scope.frm_exp_new_show = true;
	} 	

	// Cancel update, delete, add new experience operation.
	$scope.cancelFormExperience = function(experience){

		// Restore experience to its original value.
		experience.setValue(experience.draft);

		// Close experience form, and show content.
		experience.frm_exp_edit_show = false;
		experience.content_exp_hide = false;
	}

	// Close new experience form.
	$scope.cancelFormNewExperience = function(){

		// Clear new experience properties model.
		$scope.new_experience = {};	

		// Close form.
		$scope.frm_exp_new_show = false;
	}
});