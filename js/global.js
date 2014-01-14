jQuery(document).ready( function($) {

	// FLEXSLIDER
	$('.content-flexslider').flexslider();
	
// 	$('#courses-carousel').flexslider({
// 		animation: "slide",
// 		animationLoop: false,
// 		itemWidth: 355,
// 		itemMargin: 5,
// 		minItems: 1,
// 		maxItems: 3
// 	  });
// 	  
// 	$('#course-category-carousel').flexslider({
// 		animation: "slide",
// 		animationLoop: false,
// 		itemWidth: 170,
// 		itemMargin: 5,
// 		minItems: 1,
// 		maxItems: 6
// 	  });
	
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