app_candidate.factory('Experience', function($http){
	
	var Experience = function(){
		this.id = '';
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
		
		this.draft = {
			id 				: '',
			job_title 		: '',
			company_name 	: '',
			from_month 		: '',
			from_year 		: '',
			to_month 		: '',
			to_year 		: '',
			location 		: '',
			job_description : ''	
		};
	}
	
	// Save old properties to draft.
	Experience.prototype.saveDraft = function(new_exp){		
		this.draft.id 				= new_exp.id;
		this.draft.job_title 		= new_exp.job_title;
		this.draft.company_name 	= new_exp.company_name;
		this.draft.from_month 		= new_exp.from_month;
		this.draft.from_year 		= new_exp.from_year;
		this.draft.to_month 		= new_exp.to_month;
		this.draft.to_year 			= new_exp.to_year;
		this.draft.location 		= new_exp.location;
		this.draft.job_description 	= new_exp.job_description;
	}
	
	// Set properties' value.
	Experience.prototype.setValue = function(data, draft){
		if(typeof(data) !== 'object') return;
		
		this.id 				= data.id;
		this.job_title 			= data.job_title;
		this.company_name 		= data.company_name;
		this.from_month			= data.from_month;
		this.from_year 			= data.from_year;
		this.to_month 			= data.to_month;
		this.to_year 			= data.to_year;
		this.location 			= data.location;
		this.job_description 	= data.job_description;
		
		// Save to draft.
		if(draft) this.saveDraft(data);
	}
		
	Experience.prototype.createNew = function(url, data){
		return $http.post(url, data);
	}
	
	// Send update request.
	Experience.prototype.update = function(url, data){
		return $http.put(url, data);
	}
	
	// Send delete request.
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
