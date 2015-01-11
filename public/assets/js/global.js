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
	$('table .tr_new #btn_add_edu').on('click', function(){
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
		  		  '</tr>';
		  		
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
	
	// Add new experience row.
	$('table .tr_new #btn_add_ex').on('click', function(){
		var ex = {
				job_title 		: $('#ex_job_title_new'),
				company_name 	: $('#ex_company_name_new'),
				industry 		: $('#ex_industry_new option:selected'),
				location 		: $('#ex_location_new option:selected'),
				from_date 		: $('#ex_from_date_new'),
				to_date 		: $('#ex_to_date_new')
		},
		table = $(this).parents('table'),
		new_row,
		row_addnew = $(this).closest('tr');
		
		
		new_row = '<tr>' +
				'<td><span>' + $(ex.job_title).val() + '</span><input type="text" class="form-control input-sm input-margin hide" name="ex_job_title_new[]" value="' + $(ex.job_title).val() + '"></td>' +
				'<td><span>' + $(ex.company_name).val() + '</span><input type="text" class="form-control input-sm hide" name="ex_company_name_new[]" value="' + $(ex.company_name).val() + '"></td>' +
				'<td><span>' + ($(ex.industry).val() !== '' ? $(ex.industry).text() : '') + '</span><input type="hidden"  name="ex_industry_new[]" value="' + $(ex.industry).val() + '"></td>' +
				'<td><span>' + ($(ex.location).val() !== '' ? $(ex.location).text() : '') + '</span><input type="hidden" name="ex_location_new[]" value="' + $(ex.location).val() + '"></td>' +
				'<td><span> ' + $(ex.from_date).val() + ' To ' + $(ex.to_date).val() + ' </span>' +
					'<input type="text" class="form-control input-sm hide" name="ex_from_date_new[]" value="' + $(ex.from_date).val() + '" style="width: 45%; float: left; margin-right: 9px;">' +
					'<input type="text" class="form-control input-sm hide" name="ex_to_date_new[]" value="' + $(ex.to_date).val() + '" style="width: 45%; float: left;"></td>' +
				'<td class="td_action" style="text-align: center; vertical-align: middle;">' +
					'<a href="javascript:onclick" class="btn_edit"><i class="glyphicon glyphicon-pencil"></i></a>' +
					'<a href="javascript:onclick" class="btn_delete" onclick="delete_row(this)"><i class="glyphicon glyphicon-remove"></i></a></td>' +
				'</tr>';
		
		// Append a new row to table.
		$(table).append(new_row);		
		row_addnew.next().insertBefore(row_addnew);		
		
		// Clear controls.
		$('#ex_job_title_new').val('');
		$('#ex_company_name_new').val('');
		$('#ex_industry_new').val(''),
		$('#ex_location_new').val(''),
		$('#ex_from_date_new').val('');
		$('#ex_to_date_new').val('');
	});
});
