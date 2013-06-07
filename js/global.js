jQuery(document).ready( function($) {

	$('.content-flexslider').flexslider();
	
	$('a[data-toggle="tooltip"]').tooltip();
	
	$('a[data-toggle="popover"]').click( function(e) {
		e.preventDefault();
	}).popover();

});