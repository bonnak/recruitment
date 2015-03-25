app_candidate.controller('CvEditCtrl', function($scope, $filter, $http, Experience, Education){	
	$scope.cv_id = null;	
	$scope.summary = '';
	$scope.experiences = [];
	$scope.new_experience = {};	
	$scope.educations = [];
	$scope.new_education = {};
	$scope.draft = {};
	
	/***
	 * Watch scope summary and filter to nl2br and htmlentities.
	 */
	$scope.$watch("summary", function (str) {		
		str = $filter('htmlentities')(str);
		$scope.summary_html = $filter('nl2br')(str);		
	});
	

	/***
	 * Load CV detail from the server.
	 */ 
	$scope.loadData = function(cv_id){		
		// Set scope cv id.
		$scope.cv_id = cv_id;
		
		// Request and get cv information.
		$http.get(
			'/user/candidate/cv/edit/' + cv_id + '?data=json'
		).success(function(cv){
			var experiences = cv.work_experiences,
				educations = cv.education;
			
			// Load summary into data scope.
			$scope.summary = cv.summary !== null ? cv.summary : '';
			$scope.draft.summary = angular.copy($scope.summary);
			
			// Push experience element to the experiences collection scope.
			angular.forEach(experiences, function(data, key) {
				var experience = new Experience(data);
				
				// Set data CV experience ID.
				experience.cv_id = cv.id;
				
				// Add a new element.
				$scope.experiences.push(experience);
				
				
			});		

			// Set new experience default cv_id.
			$scope.new_experience.cv_id = cv.id;	
			
			
			// Push education element to the education collection scope.
			angular.forEach(educations, function(data, key) {
				var edu = new Education(data);
				
				// Set education element CV id.
				edu.cv_id = cv.id;
				
				// Add a new element.
				$scope.educations.push(edu);
			});
			
			// Set new education default cv_id.
			$scope.new_education.cv_id = cv.id;
			
		}).error(function(data, status){
			
		});
	};
	
	/***
	 * Update CV summary.
	 */
	$scope.saveSummary = function(){
		$http.put(
			'/user/candidate/cv/edit/' + $scope.cv_id + '/summary',
			{'summary' : $scope.summary}
		).success(function(data){		
			// Update summary in draft.
			$scope.draft.summary = angular.copy($scope.summary);
			
			// Hide edit form.
			$scope.show_frm_summary = false;
		}).error(function(data, status){
			
		});
	}
	
	/***
	 * Cancel update summary model.
	 */
	$scope.cancelSummary = function(){		
		// restore the old summary value.
		$scope.summary = angular.copy($scope.draft.summary);
		
		// Hide form.
		$scope.show_frm_summary = false;
	}
	
	/***
	 * Update an experience information.
	 */
	$scope.updateExperience = function(experience){	
		experience.update().success(function(data){
			// Save new employee to draft.
			experience.saveDraft();
			
			// Close experience form, and show content.
			experience.frm_exp_edit_show = false;
			experience.content_exp_hide = false;
			
		}).error(function(data, status){
			// Restore to old value.
			experience.restore();
		});
	}
	
	/***
	 * Delete an experience informaton.
	 */
	$scope.deleteExperience = function(experience){
		experience.delete().success(function(data){	
			// Remove experience item from the list.
			$scope.experiences.splice($scope.experiences.indexOf(experience), 1);
		}).error(function(data, status){

		});
	}
	
	/***
	 * Add new experience information.
	 */
	$scope.createNewExperience =  function(data){
		var new_experience = new Experience(data);

		// Save new experience to database.
		new_experience.save().success(function(data){

			// set new experience id.
			new_experience.id = data.id;	
			
			// Add a new element.
			$scope.experiences.push(new_experience);
			
			// Clear new experience scope properties.
			$scope.new_experience = {};
			
			// Close new form.
			$scope.frm_exp_new_show = false;
			
		}).error(function(data, status){
			
		});
	}

	// Get experience datetime format due to situation.
	$scope.getExperienceDate = function(year, month, substitution){
		var str_date;

		if(year !== '' && month !== ''){
			str_date = $filter('date')(new Date(year, month - 1), 'MMMM - yyyy');
		}
		else if(year !== ''){
			str_date = year;
		}
		else{
			if(substitution !== undefined){
				str_date = substitution;
			}
			else{
				str_date = '-';
			}
		}		

		return str_date;
	}

	// Open current edit form only, 
	// and hide all other experience form.
	$scope.openEditFormExp = function(cur_experience){
		// Hide all other edit form.
		angular.forEach($scope.experiences, function(experience, key) {			
			$scope.cancelFormExperience(experience);						
		});

		// Hide new form.
		$scope.cancelFormNewExperience();

		// Show current form.
		cur_experience.content_exp_hide = true; 
		cur_experience.frm_exp_edit_show = true;
	}

	// Open new form and hide all other edit form.
	$scope.openNewExpForm = function(){
		// Hide all other edit form.
		angular.forEach($scope.experiences, function(experience, key) {
			$scope.cancelFormExperience(experience);
		});

		// Show new form
		$scope.frm_exp_new_show = true;
	} 	

	// Cancel update, delete, add new experience operation.
	$scope.cancelFormExperience = function(experience){

		// Restore experience to its original value.
		experience.restore();

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
	
	/***
	 * Add a new education information.
	 */
	$scope.createNewEducation = function(el){
		var new_edu = new Education(el);
		
		new_edu.createNew().success(function(data){
			// load new education.
			new_edu.setValue(data);
			
			// Add a new element.
			$scope.educations.push(new_edu);
			
			// Clear new experience scope properties.
			$scope.new_education = {};
			
			// Close new form.
			$scope.frm_exp_new_show = false;
		});
	}
	
	/***
	 * Update education information.
	 */
	$scope.updateEducation = function(edu){
		edu.update().success(function(){
			// Save backup data.
			edu.saveDraft();
			
			// Hide form and show content.
			edu.show_frm_edu = false;
			
		}).error(function(data, status){
			// Restore old data.
			edu.restore();
		});
	}
	
	/***
	 * Delete education information.
	 */
	$scope.deleteEducation = function(edu){
		edu.delete().success(function(){
			// Remove education item from the list.
			$scope.educations.splice($scope.educations.indexOf(edu), 1);
		}).error(function(data, status){
			
		});
	}
	
	/***
	 * Cancel edit education information.
	 */
	$scope.cancelEditFormEdu = function(edu){
		// Restore old data.
		edu.restore();
		
		// Hide form and show content.
		edu.show_frm_edu = false;
	}
	
	/***
	 * Open current edit form only, and hide all other education form.
	 */
	$scope.openEditFormEdu = function(cur_edu){
		// Hide all other edit form.
		angular.forEach($scope.educations, function(education, key) {			
			$scope.cancelEditFormEdu(education);						
		});

		// Hide new form.
		$scope.closeFormNewExperience();

		// Show current form.
		cur_edu.show_frm_edu = true;
	}
	
	/***
	 * Open new form and hide all other edit form.
	 */
	$scope.openNewEduForm = function(){
		// Hide all other edit form.
		angular.forEach($scope.educations, function(education, key) {
			$scope.cancelEditFormEdu(education);
		});

		// Show new form
		$scope.show_frm_edu_new = true;
	} 
	
	/***
	 * Close new education form.
	 */ 
	$scope.closeFormNewExperience = function(){
		// Clear new experience properties model.
		$scope.new_education = {};	

		// Close form.
		$scope.show_frm_edu_new = false;
	}
});