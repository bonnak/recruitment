app_candidate.controller('CvEditCtrl', function($scope, Experience){
	$scope.experience = new Experience;
	
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
		$scope.experience.clearItem();
	}
});

app_candidate.factory('Experience', function($http){
	
	var Experience = function(){
		this.new = {
			'job_title' : '',
			'company_name' : '',
			'duration' : {
				'from_month' : '',
				'from_year' : '',
				'to_month' : '',
				'to_year' : ''
			},
			'location' : '',
			'description' : ''	
		};
	}
	
	Experience.prototype.createNew = function(url, data){
		return $http.post(
					url, 
					data
				);
	}
	
	// Clear item values.
	Experience.prototype.clearItem = function(){
		clear(this.new);
	}
	
	var clear = function(item){	
		angular.forEach(item, function(value, key){
			if(typeof value === 'object'){
				clear(value);
			}
			else{
				item[key] = '';
			}
		});		
	}
	///////////
	
	return Experience;
});
