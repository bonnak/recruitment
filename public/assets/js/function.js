var delete_row = function(self){
	var row = $(self).closest('tr');
	
	$(row).remove();
};

var edit_row = function(self){
	var row = $(self).closest('tr');
	
	$(row).find('span').toggleClass('hide');
	$(row).find('input').toggleClass('hide');
};