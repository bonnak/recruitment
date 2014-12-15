var btn_edit_click = function(self){
	
	var list_parent = $(self).parents('li'),
		span_title = $(list_parent).find('span.title'),
		input_title = $(list_parent).find('input.title');
	
	
	$(span_title).addClass('hide');
	$(input_title).removeClass('hide');
};