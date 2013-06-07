jQuery(document).ready( function($) {

	// FLEXSLIDER
	$('.content-flexslider').flexslider();
	
	//BOOTSTRAP
	$('a[data-toggle="tooltip"]').tooltip();
	
	$('a[data-toggle="popover"]').click( function(e) {
		e.preventDefault();
	}).popover();

	//FANCYBOX
	$('a[rel="fancybox"]:not(.video)').fancybox({
	
		helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
	
	});
	
	$('a[rel="fancybox"].video').fancybox({
		'type'	:	'iframe'
	});
});