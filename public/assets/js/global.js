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
			url: '/user/candidate/cv/edit/' + $(form_edit).find('form').data('id') + '/summary',
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
			content_show = $(form_edit).siblings('.content-show');
		
		$(content_show).removeClass('hide');
		$(form_edit).addClass('hide');
	});
	/********************/
});
