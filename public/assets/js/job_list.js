
$(document).ready(function(){
	$('.btn-job-delete').on('click', function(e){
		var form   = $(this).parents('form'),
			url    = $(form).attr('action')
			job_id = $(this).parents('tr').find('.chk-delete-job').val();
			url = url + '?id=' + job_id;
			// console.log(job_id);
		// Prevent submit form.
		e.preventDefault();	

		// Route to specific job.
		 url + '?id=' + job_id;		
		 $('form').attr('action', url);
		// Submit form.
		$(form).submit();
	});

	$('.btn-jobs-delete').on('click', function(e){
		var form 	= $(this).parents('form'),
				chk_list = $(form).find('.chk-delete-job');
				
		// Loop through all checkboxs and find if there's a checkbox selected at least.
		$.each(chk_list, function(index, chk){
			if($(chk).prop('checked')){

				// console.log(chk);
				$('form').attr('action', url);
				$(form).submit();
			}
		});
		// Prevent submit form.
		e.preventDefault();	
	});
	//checkbox onclick is checked all
	$("#chk-delete-jobs").on('click', function(){
		$("input[name='chk_delete_post[]']").prop('checked', this.checked);
		
	});
	// checkbox  equals checked and then checkall equals checked 
	$("input[name='chk_delete_post[]']").on('click',function(){
		if($("input[name='chk_delete_post[]']").length == $("input[name='chk_delete_post[]']:checked").length)
		{
			$("#chk-delete-jobs").prop("checked","checked");	

		}else if($("input[name='chk_delete_post[]']").length != $("input[name='chk_delete_post[]']:checked").length)
		{
			$("#chk-delete-jobs").prop("checked",false);
		}
		e.preventDefault();	
	});

	// hover show mouse texh on mouse hover
	
});

$(document).ready(function(){
	$(".edit-job").on('click', function(e){
			var form   = $(this).parents('form'),
				url    = $(form).attr('action')
				job_id = $(this).parents('tr').find('.chk-delete-job').val();
				url = url + '?id=' + job_id;			
				// console.log(url);
		e.preventDefault();			
	});
});
//
// show message when delete or update and delete
//
$(document).ready(function(){
	$("#search-applied").on('click', function(e){
		var form   = $(this).parents('form'),
			url    = $(form).attr('action')
			key = $(this).parents('tr').find('.input-search-applied').val();
			url = url + '?keyword=' + key;
			
			$(form).attr('action', url);
			form.submit();
		e.preventDefault();		
	});
});



