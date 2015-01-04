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
});
