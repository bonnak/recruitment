app_candidate.factory('Experience', function($http){
	
	var Experience = function(data){
		this.id 				= data.id !== undefined ? data.id : '';
		this.cv_id 				= data.cv_id !== undefined ? data.cv_id : '';
		this.job_title 			= data.job_title !== undefined ? data.job_title : '';
		this.company_name 		= data.company_name !== undefined ? data.company_name : '';
		this.from_month 		= data.from_month !== undefined ? data.from_month : '';
		this.from_year 			= data.from_year !== undefined ? data.from_year : '';
		this.to_month 			= data.to_month !== undefined ? data.to_month : '';
		this.to_year 			= data.to_year !== undefined ? data.to_year : '';
		this.location 			= data.location !== undefined ? data.location : '';
		this.job_description 	= data.job_description !== undefined ? data.job_description : '';
		
		this.draft = {
			job_title 		: this.job_title,
			company_name 	: this.company_name,
			from_month 		: this.from_month,
			from_year 		: this.from_year,
			to_month 		: this.to_month,
			to_year 		: this.to_year,
			location 		: this.location,
			job_description : this.job_description	
		};
	}
	
	// Save old properties to draft.
	Experience.prototype.saveDraft = function(){	
		this.draft.job_title 		= this.job_title;
		this.draft.company_name 	= this.company_name;
		this.draft.from_month 		= this.from_month;
		this.draft.from_year 		= this.from_year;
		this.draft.to_month 		= this.to_month;
		this.draft.to_year 			= this.to_year;
		this.draft.location 		= this.location;
		this.draft.job_description 	= this.job_description;
	}
	
	// Set properties' value.
	Experience.prototype.restore = function(){
		this.job_title 			= this.draft.job_title;
		this.company_name 		= this.draft.company_name;
		this.from_month			= this.draft.from_month;
		this.from_year 			= this.draft.from_year;
		this.to_month 			= this.draft.to_month;
		this.to_year 			= this.draft.to_year;
		this.location 			= this.draft.location;
		this.job_description 	= this.draft.job_description;
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
		this.setValue(data);
	}
	
	Education.prototype.setValue = function(data){
		this.id 			= data.id !== undefined ? data.id : '';
		this.cv_id 			= data.cv_id !== undefined ? data.cv_id : '';
		this.degree 		= data.degree !== undefined ? data.degree : '';
		this.degree_id 		= data.degree_id !== undefined ? data.degree_id : '';
		this.from_year 		= data.from_year !== undefined ? data.from_year : '';
		this.grad_year 		= data.grad_year !== undefined ? data.grad_year : '';
		this.institute 		= data.institute !== undefined ? data.institute : '';
		this.major 			= data.major !== undefined ? data.major : '';
		this.situation 		= data.situation !== undefined ? data.situation : '';
		this.situation_id 	= data.situation_id !== undefined ? data.situation_id : '';
		
		this.draft = {
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
	
	/***
	 * Save draft to backup data.
	 */
	Education.prototype.saveDraft = function(){
		this.draft.degree		= this.degree;
		this.draft.degree_id	= this.degree_id;
		this.draft.from_year	= this.from_year;
		this.draft.grad_year	= this.grad_year;
		this.draft.institute	= this.institute;
		this.draft.major		= this.major;
		this.draft.situation	= this.situation;
		this.draft.situation_id	= this.situation_id;
	}
	
	/***
	 * Restore the original data.
	 */
	Education.prototype.restore = function(){
		this.degree			= this.draft.degree;
		this.degree_id		= this.draft.degree_id;
		this.from_year		= this.draft.from_year;
		this.grad_year		= this.draft.grad_year;
		this.institute		= this.draft.institute;
		this.major			= this.draft.major;
		this.situation		= this.draft.situation;
		this.situation_id	= this.draft.situation_id;
	}
	
	/***
	 * Send request to server to create a new education.
	 */
	Education.prototype.createNew = function(){
		return $http.post(
				'/user/candidate/cv/edit/' + this.cv_id + ' /edu',
				this
		);
	}
	
	/***
	 * Send request to server to update an existing eduation.
	 */
	Education.prototype.update = function(){
		return $http.put(
			'/user/candidate/cv/edit/' + this.cv_id + '/edu/' + this.id,
			this
		);
	}
	
	/***
	 * Send request to server to delete an education.
	 */
	Education.prototype.delete = function(){
		return $http.delete(
			'/user/candidate/cv/edit/' + this.cv_id + '/edu/' + this.id
		);
	}
	
	return Education;
});
