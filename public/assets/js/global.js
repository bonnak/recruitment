$(document).on('ready', function(){
	// Button minimize and maximize box.
	$('.btn-min-max').on('click', function(){
		var box_body = $(this).parents('.box').children('.box-body');

		$(this).toggleClass('glyphicon-chevron-down');
		$(this).toggleClass('glyphicon-chevron-up');
		$(box_body).toggleClass('hide');
	});
});
