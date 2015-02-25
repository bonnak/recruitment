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