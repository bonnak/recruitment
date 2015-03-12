app_candidate.directive('alert', function() {
	return {
		restrict: 'E',
		template : "<div class='alert'>" + 
						"<span class='alert-topic'>" + 
							"Something went wrong!" + 
						"</span>" + 
						"<span class='alert-description'>" + 
							"You must inform the plate and the color of the car!" + 
						"</span>" + 
					"</div>",
		link : function(scope, element, attrs, ctrl, transcludeFn){
			element.append('<div>hello</div>');
		}
	};
});