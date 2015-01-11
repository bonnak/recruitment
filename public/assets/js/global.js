$(document).on('ready', function(){
	// Button minimize and maximize box.
	$('.btn-min-max').on('click', function(){
		var box_body = $(this).parents('.box').children('.box-body');

		$(this).toggleClass('glyphicon-chevron-down');
		$(this).toggleClass('glyphicon-chevron-up');
		$(box_body).toggleClass('hide');
	});
	
	// Switch between show and edit profile.
	$('#btn-profile-edit').on('click', function(){
		var profile = $(this).parents('#profile'),
			show_profile = $(profile).find('#show-profile'),
			edit_profile = $(profile).find('#edit-profile');
		
		$(show_profile).addClass('hide');
		$(edit_profile).removeClass('hide');
	});
	
	// Add new education row.
	$('table .tr_new .btn_add').on('click', function(){
		var edu = {
				institute 	: $('#institute_new'),
				major 		: $('#major_new'),
				degree 		: $('#degree_new option:selected'),
				situation 	: $('#situation_new option:selected'),
				grad_year 	: $('#graduation_year_new')
			},
			table = $(this).parents('table'),
			new_row,
			row_addnew = $(this).closest('tr');
		
		
		new_row = '<tr>' +
				  '<td><span>' + $(edu.institute).val() + '</span><input type="hidden" name="institute_new[]" value="' + $(edu.institute).val() + '"></td>' +
				  '<td><span>' + $(edu.major).val() + '</span><input type="hidden" name="major_new[]" value="' + $(edu.major).val() + '"></td>' +
				  '<td><span>' + ($(edu.degree).val() !== '' ? $(edu.degree).text() : '') + '</span><input type="hidden" name="degree_new[]" value="' + $(edu.degree).val() + '"></td>' +
				  '<td><span>' + ($(edu.situation).val() !== '' ? $(edu.situation).text() : '') + '</span><input type="hidden" name="situation_new[]" value="' + $(edu.situation).val() + '"></td>' +
				  '<td><span>' + $(edu.grad_year).val() + '</span><input type="hidden" name="graduation_year_new[]" value="' + $(edu.grad_year).val() + '"></td>' +
				  '<td class="td_action" style="text-align: center; vertical-align: middle;">' +
		  				'<a href="javascript:onclick" class="btn_edit"><i class="glyphicon glyphicon-pencil"></i></a>' +
		  				'<a href="javascript:onclick" class="btn_delete" onclick="delete_row(this)"><i class="glyphicon glyphicon-remove"></i></a></td>' +
		  		  '</tr>'
		  		
		// Append a new row to table.
		$(table).append(new_row);		
		row_addnew.next().insertBefore(row_addnew);		
		
		// Clear controls.
		$('#institute_new').val('');
		$('#major_new').val('');
		$('#degree_new').val(''),
		$('#situation_new').val(''),
		$('#graduation_year_new').val('');
	});
});
