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
			cv_id 			: '',
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
		this.draft.cv_id 			= new_exp.cv_id;
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
})

.factory('Education', function($http){
	
	var Education = function(data){
		this.id 			= data.id !== undefined ? data.id : '';
		this.degree 		= data.degree !== undefined ? data.degree : '';
		this.degree_id 		= data.degree_id !== undefined ? data.degree_id : '';
		this.from_year 		= data.from_year !== undefined ? data.from_year : '';
		this.grad_year 		= data.grad_year !== undefined ? data.grad_year : '';
		this.institute 		= data.institute !== undefined ? data.institute : '';
		this.major 			= data.major !== undefined ? data.major : '';
		this.situation 		= data.situation !== undefined ? data.situation : '';
		this.situation_id 	= data.situation_id !== undefined ? data.situation_id : '';
		
		this.draft = {
			id				: this.id,
			degree			: this.degree,
			degree_id		: this.degree_id,
			from_year		: this.from_year,
			grad_year		: this.grad_year,
			institute		: this.institute,
			major			: this.major,
			situation		: this.situation,
			situation_id	: this.situation_id
		}
	}
	
	Education.prototype.update = function(){
		return $http.put()
	}
	
	return Education;
});
