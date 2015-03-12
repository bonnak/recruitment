app_candidate.factory('Experience', function($http){
	
	var Experience = function(){
		this.job_title = '';
		this.company_name = '';
		this.from_month = '';
		this.from_year = '';
		this.to_month = '';
		this.to_year = '';
		this.location = '';
		this.job_description = '';

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
		return $http.post(url, data);
	}
	
	Experience.prototype.update = function(url, data){
		return $http.put(url, data);
	}
	
	Experience.prototype.delete = function(url, data){
		return $http.delete(url);
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
