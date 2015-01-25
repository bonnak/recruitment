$(document).on('ready', function(){
	/***** Edit CV *****/
	$('#cv-edit #summary .btn-edit-cv').on('click', function(e){
		e.preventDefault();
		
		var content_show =  $(this).parents('.content-show'),
			form_edit = $(content_show).siblings('.form-edit');
		
		$(content_show).addClass('hide');
		$(form_edit).removeClass('hide');
	});
	
	$('#cv-edit #summary .form-edit .btn-cancel').on('click', function(){
		var summary = $(this).parents('#summary'),
			form_edit = $(summary).children('.form-edit'),
			content_show = $(summary).children('.content-show'),
			textarea = $(form_edit).find('textarea'),
			content =  $(content_show).children('p').text();
		
		textarea.val(content);
		
		$(content_show).removeClass('hide');
		$(form_edit).addClass('hide');
	});
	
	$('#cv-edit #summary .form-edit .btn-save').on('click', function(){
		var summary = $(this).parents('#summary'),
			form_edit = $(summary).children('.form-edit'),
			content_show = $(summary).children('.content-show'),
			textarea = $(form_edit).find('textarea');
				
		$.ajax({
			url: $(form_edit).find('form').attr('action'),
			type: 'PUT',
			data: {summary : $(textarea).val()},
			statusCode: {
			    403: function(response) {
			    	var error = JSON.parse(response.responseText).error;
			    	
					alert(error.message);
			    }
			  }
		}).done(function(data){
			
			$(content_show).children('p').text(data.summary);

			$(content_show).removeClass('hide');
			$(form_edit).addClass('hide');
		});	
	});
	
	
	
	$('#cv-edit #experience .btn-edit-cv').on('click', function(e){
		e.preventDefault();
		
		var content_show =  $(this).parents('.content-show'),
			form_edit = $(content_show).siblings('.form-edit');
				
		$(content_show).addClass('hide');
		$(form_edit).removeClass('hide');
	});	
	$('#cv-edit #experience .form-edit .btn-cancel').on('click', function(){
		var form_edit =  $(this).parents('.form-edit'),
			content_show = $(form_edit).siblings('.content-show'),
			span_job_title = $(content_show).find('#span-job-title'),
			span_company_name = $(content_show).find('#span-company-name'), 
			span_ex_location = $(content_show).find('#span-ex-location'),
			span_job_description = $(content_show).find('#span-job-description'),
			input_job_title = $(form_edit).find('#input-job-title'),
			input_company_name = $(form_edit).find('#input-company-name'),
			input_ex_location = $(form_edit).find('#input-ex-location'),
			input_job_description = $(form_edit).find('#input-job-description');
		
		
		$(input_job_title).val($(span_job_title).text());
		$(input_company_name).val($(span_company_name).text());
		$(input_ex_location).val($(span_ex_location).text());
		$(input_job_description).val($(span_job_description).text());
		
		$(content_show).removeClass('hide');
		$(form_edit).addClass('hide');
	});
	$('#cv-edit #experience .form-edit .btn-save').on('click', function(){
		var form_edit =  $(this).parents('.form-edit'),
			content_show = $(form_edit).siblings('.content-show'),				
			span_job_title = $(content_show).find('#span-job-title'),
			span_company_name = $(content_show).find('#span-company-name'), 
			span_ex_location = $(content_show).find('#span-ex-location'), 
			span_description = $(content_show).find('#span-job-description'),
			input_job_title = $(form_edit).find('#input-job-title'),
			input_company_name = $(form_edit).find('#input-company-name'),
			input_ex_location = $(form_edit).find('#input-ex-location'),
			input_job_description = $(form_edit).find('#input-job-description'),
			input_ex_from_month = $(form_edit).find('#input-ex-from-month'),
			input_ex_from_year = $(form_edit).find('#input-ex-from-year'),
			input_ex_to_month = $(form_edit).find('#input-ex-to-month'),
			input_ex_to_year = $(form_edit).find('#input-ex-to-year');
		
		$.ajax({
			url: $(form_edit).find('form').attr('action'),
			type: 'PUT',
			data: {
				'ex-job-title'			: $(input_job_title).val(),
				'ex-company-name'		: $(input_company_name).val(),
				'ex-location'			: $(input_ex_location).val(),
				'ex-job-description'	: $(input_job_description).val(),
				'ex-from-month'			: $(input_ex_from_month).val(),
				'ex-from-year'			: $(input_ex_from_year).val(),
				'ex-to-month'			: $(input_ex_to_month).val(),
				'ex-to-year'			: $(input_ex_to_year).val(),
			},
			statusCode: {
			    403: function(response) {
			    	var error = JSON.parse(response.responseText).error;
			    	
					alert(error.message);
			    }
			  }
		}).done(function(data){
			$(span_job_title).text(data.ex_job_title);
			$(span_company_name).text(data.ex_company_name);
			$(span_ex_location).text(data.ex_location);
			$(span_description).text(data.ex_job_description);
		});
		
		$(content_show).removeClass('hide');
		$(form_edit).addClass('hide');
	});
	
	
	
	
	$('#cv-edit #edu .btn-edit-cv').on('click', function(e){
		e.preventDefault();
		
		var content_show =  $(this).parents('.content-show'),
			form_edit = $(content_show).siblings('.form-edit');
				
		$(content_show).addClass('hide');
		$(form_edit).removeClass('hide');
	});	
	$('#cv-edit #edu .form-edit .btn-cancel').on('click', function(){
		var form_edit =  $(this).parents('.form-edit'),
			content_show = $(form_edit).siblings('.content-show');
				
		$(content_show).removeClass('hide');
		$(form_edit).addClass('hide');
	});
	$('#cv-edit #edu .form-edit .btn-save').on('click', function(){
		var form_edit =  $(this).parents('.form-edit'),
			content_show = $(form_edit).siblings('.content-show'),				
			span_institute = $(content_show).find('#span-institute'),
			span_major = $(content_show).find('#span-major'),
			span_degree = $(content_show).find('#span-degree'),
			span_from_year = $(content_show).find('#span-from-year'),
			span_grad_year = $(content_show).find('#span-grad-year'),
			input_institute = $(form_edit).find('#input-institute'),
			input_major = $(form_edit).find('#input-major'),
			input_degree = $(form_edit).find('#input-degree'),
			input_from_year = $(form_edit).find('#input-from-year'),
			input_grad_year = $(form_edit).find('#input-grad-year');
	
		
		$.ajax({
			url: $(form_edit).find('form').attr('action'),
			type: 'PUT',
			data: {
				'institute'			: $(input_institute).val(),
				'major'				: $(input_major).val(),
				'degree_id'			: $(input_degree).val(),
				'from-year'			: $(input_from_year).val(),
				'grad-year'			: $(input_grad_year).val()
			},
			statusCode: {
			    403: function(response) {
			    	var error = JSON.parse(response.responseText).error;
			    	
					alert(error.message);
			    }
			  }
		}).done(function(data){
			$(span_institute).text(data.institute);
			$(span_major).text(data.major);
			$(span_degree).text(data.degree);
			$(span_from_year).text(data.from_year);
			$(span_grad_year).text(data.grad_year);
		});
		
		$(content_show).removeClass('hide');
		$(form_edit).addClass('hide');
	});
	/********************/
});
