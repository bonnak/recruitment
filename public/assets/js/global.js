$(document).on('ready', function(){
	// Button minimize and maximize box.
	$('.btn-min-max').on('click', function(){
		var box = $(this).parent().siblings('.box-body');
		
		$(this).toggleClass('glyphicon-chevron-down');
		$(this).toggleClass('glyphicon-chevron-up');
		$(box).toggleClass('hide');
	});
});
