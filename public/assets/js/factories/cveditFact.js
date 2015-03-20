app_candidate.factory('Experience', function($http){
	
	var Experience = function(){
		this.id = '';
		this.cv_id = '';
		this.job_title = '';
		this.company_name = '';
		this.from_month = '';
		this.from_year = '';
		this.to_month = '';
		this.to_year = '';
		this.location = '';
		this.job_description = '';
		
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
		this.draft.job_title 		= new_exp.job_title !== null ? new_exp.job_title : '';
		this.draft.company_name 	= new_exp.company_name !== null ? new_exp.company_name : '';
		this.draft.from_month 		= new_exp.from_month !== null ? new_exp.from_month : '';
		this.draft.from_year 		= new_exp.from_year !== null ? new_exp.from_year : '';
		this.draft.to_month 		= new_exp.to_month !== null ? new_exp.to_month : '';
		this.draft.to_year 			= new_exp.to_year !== null ? new_exp.to_year : '';
		this.draft.location 		= new_exp.location !== null ? new_exp.location : '';
		this.draft.job_description 	= new_exp.job_description !== null ? new_exp.job_description : '';
	}
	
	// Set properties' value.
	Experience.prototype.setValue = function(data, draft){
		if(typeof(data) !== 'object') return;
		
		this.id 				= data.id;
		this.cv_id				= data.cv_id;
		this.job_title 			= data.job_title !== null ? data.job_title : '';
		this.company_name 		= data.company_name !== null ? data.company_name : '';
		this.from_month			= data.from_month !== null ? data.from_month : '';
		this.from_year 			= data.from_year !== null ? data.from_year : '';
		this.to_month 			= data.to_month !== null ? data.to_month : '';
		this.to_year 			= data.to_year !== null ? data.to_year : '';
		this.location 			= data.location !== null ? data.location : '';
		this.job_description 	= data.job_description !== null ? data.job_description : '';
		
		// Save to draft.
		if(draft) this.saveDraft(data);
	}
		
	// Send request to create new experience to database.
	Experience.prototype.save = function(){
		return $http.post(
			'/user/candidate/cv/edit/' + this.cv_id + '/experience', 
			this
		);
	}
	
	// Send update request.
	Experience.prototype.update = function(){
		return $http.put(
			'/user/candidate/cv/edit/' + this.cv_id + '/experience/' + this.id, 
			this
		);
	}
	
	// Send delete request.
	Experience.prototype.delete = function(){
		return $http.delete(
			'/user/candidate/cv/edit/' + this.cv_id + '/experience/' + this.id
		);
	}
	
	return Experience;
});
