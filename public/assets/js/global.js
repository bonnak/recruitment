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
				institute 		: $('#institute_new').val(),
				major 			: $('#major_new').val() ,
				degree_id 		: $('#degree_new option:selected').val(),
				degree 			: ($('#degree_new option:selected').val() !== '' ? $('#degree_new option:selected').text() : ''),
				situation_id 	: $('#situation_new option:selected').val(),
				situation 		: ($('#situation_new option:selected').val() !== '' ? $('#situation_new option:selected').text() : ''),
				grad_year 		: $('#graduation_year_new').val()
			},
			table = $(this).parents('table'),
			new_row,
			row_addnew = $(this).closest('tr');
		
		
		new_row = '<tr>' +
				  '<td><span>' + edu.institute + '</span><input type="hidden" name="institute_new[]" value="' + edu.institute + '"></td>' +
				  '<td><span>' + edu.major + '</span><input type="hidden" name="major_new[]" value="' + edu.major + '"></td>' +
				  '<td><span>' + edu.degree + '</span><input type="hidden" name="degree_new[]" value="' + edu.degree_id + '"></td>' +
				  '<td><span>' + edu.situation + '</span><input type="hidden" name="situation_new[]" value="' + edu.situation_id + '"></td>' +
				  '<td><span>' + edu.grad_year + '</span><input type="hidden" name="graduation_year_new[]" value="' + edu.grad_year + '"></td>' +
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
		$('#degree_new').val('');
		$('#situation_new').val('');
		$('#graduation_year_new').val('');
	});
	
	// Add new experience row.
	$('table .tr_new #btn_add_ex').on('click', function(){
		var ex = {
				job_title 		: $('#ex_job_title_new').val(),
				company_name 	: $('#ex_company_name_new').val(),
				industry_id 	: $('#ex_industry_new option:selected'),
				industry 		: ($('#ex_industry_new option:selected').val() !== '' ? $('#ex_industry_new option:selected').text() : ''),
				location_id 	: $('#ex_location_new option:selected'),
				location 		: ($('#ex_location_new option:selected').val() !== '' ? $('#ex_location_new option:selected').text() : ''),
				from_date 		: $('#ex_from_date_new').val(),
				to_date 		: $('#ex_to_date_new').val()
		},
		table = $(this).parents('table'),
		new_row,
		row_addnew = $(this).closest('tr');
		
		
		new_row = '<tr>' +
				'<td><span>' + ex.job_title + '</span><input type="text" class="form-control input-sm input-margin hide" name="ex_job_title_new[]" value="' + ex.job_title + '"></td>' +
				'<td><span>' + ex.company_name + '</span><input type="text" class="form-control input-sm hide" name="ex_company_name_new[]" value="' + ex.company_name + '"></td>' +
				'<td><span>' + ex.industry + '</span><input type="hidden"  name="ex_industry_new[]" value="' + ex.industry_id + '"></td>' +
				'<td><span>' + ex.location + '</span><input type="hidden" name="ex_location_new[]" value="' + ex.location_id + '"></td>' +
				'<td><span> ' + ex.from_date + ' To ' + ex.to_date + ' </span>' +
					'<input type="text" class="form-control input-sm hide" name="ex_from_date_new[]" value="' + ex.from_date + '" style="width: 45%; float: left; margin-right: 9px;">' +
					'<input type="text" class="form-control input-sm hide" name="ex_to_date_new[]" value="' + ex.to_date + '" style="width: 45%; float: left;"></td>' +
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
		$('#ex_industry_new').val('');
		$('#ex_location_new').val('');
		$('#ex_from_date_new').val('');
		$('#ex_to_date_new').val('');
	});
	
	// Add new skill row.
	$('table .tr_new #btn_add_skill').on('click', function(){
		var skill = {
				name 			: $('#skill_name_new').val(),
				level_id		: $('#skill_level_new option:selected').val(),
				level 			: ($('#skill_level_new option:selected').val() !== '' ? $('#skill_level_new option:selected').text() : ''),
				y_experience 	: $('#year_experience_new').val(),
		},
		table = $(this).parents('table'),
		new_row,
		row_addnew = $(this).closest('tr');
		
		
		new_row = '<tr>' +
				'<td><span>' + skill.name + '</span><input type="text" class="form-control input-sm hide" name="skill_name[]" value="' + skill.name + '"></td>' +
				'<td><span>' + skill.level + '</span><input class="form-control input-sm hide" name="skill_level[]" value="' + skill.level_id + '"></td>' +
				'<td><span>' + skill.y_experience + '</span><input type="text" class="form-control input-sm hide" name="year_experience[]" value="' + skill.y_experience + '"></td>' +			
				'<td class="td_action"><a href="javascript:onclick" class="btn_edit"><i class="glyphicon glyphicon-pencil"></i></a>' +
				'<a href="javascript:onclick" class="btn_delete" onclick="delete_row(this)"><i class="glyphicon glyphicon-remove"></i></a></td>' +
				'</tr>';
		
		// Append a new row to table.
		$(table).append(new_row);		
		row_addnew.next().insertBefore(row_addnew);		
		
		// Clear controls.
		$('#skill_name_new').val('');
		$('#skill_level_new').val('');
		$('#year_experience_new').val('');
	});
});
