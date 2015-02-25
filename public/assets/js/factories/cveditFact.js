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
