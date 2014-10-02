function setCookie(cname,cvalue,exdays)
{
	var d = new Date();
	d.setTime(d.getTime()+(exdays*24*60*60*1000));
	var expires = "expires="+d.toGMTString();
	document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
}

function getCookie(cname)
{
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) 
	  {
	  var c = ca[i].trim();
	  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
	  }
	return "";
}

function getQueryParams(qs) {
    qs = qs.split("+").join(" ");
    var params = {},
        tokens,
        re = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])]
            = decodeURIComponent(tokens[2]);
    }

    return params;
}

function addslashes(str) {
	str=str.replace(/\\/g,'\\\\');
	str=str.replace(/\'/g,'\\\'');
	str=str.replace(/\"/g,'\\"');
	str=str.replace(/\0/g,'\\0');
	return str;
}

function stripslashes(str) {
	str=str.replace(/\\'/g,'\'');
	str=str.replace(/\\"/g,'"');
	str=str.replace(/\\0/g,'\0');
	str=str.replace(/\\\\/g,'\\');
	return str;
}

jQuery(document).ready( function($) {

	// FLEXSLIDER
	$('.content-flexslider').owlCarousel();
	
	// OWL CAROUSEL ON ONE PAGER
	$('.owl-carousel-full').each( function() {
		
		var numItems = $(this).attr('data-slides'),
			autoPlay = $(this).attr('data-autoplay'),
			slideSpeed = $(this).attr('data-slidespeed'),
			paging = $(this).attr('data-paging'),
			single = false;
			
// 			console.log('Paging = ' + paging );
			
		if ( !slideSpeed ) slideSpeed = 1000;
		
		if ( numItems == 3 ) {
			var desktopSmall = 3;
		} else if ( numItems > 1 ) {
			var desktopSmall = 4;
		} else if ( numItems = 1 ) {
			single = true;
		}
		
		if ( paging == 0 ) paging = false;
			else paging = true;
			
		console.log( autoPlay );
		
		if ( autoPlay == 'false' ) autoPlay = false;
		
		$(this).owlCarousel({
			items:	numItems,
			stopOnHover:	true,
			transitionStyle : "goDown",
			itemsDesktop: [979, desktopSmall],
			autoPlay:	autoPlay,
			singleItem: single,
			slideSpeed: slideSpeed,
			pagination: paging
		});
	
	});
	
	// ONE PAGER SCROLLING
	$('body.page-template-one-pager-php .navbar a[href*="#"]').click( function(e) {
	
		e.preventDefault();
		
		var hash = $(this).attr('href').search('#'),
			length = $(this).attr('href').length,
			target = $(this).attr('href').substring(hash, length),
			targetSection = $(target),
			offset = targetSection.offset().top,
			navHeight = 0;
			
		$('.navbar.affix').each( function() {
			
			var height = $(this).height();
			
			navHeight += height;
			
		});
		
		offset = offset - 92;
			
		$('html, body').animate({
			scrollTop: offset
		}, 1000 );
	
	});
	
	// IMAGE ERROR HANDLING
	$('img').error( function() {
	
		$(this).attr('src','http://socratesconnected.com/wp-content/uploads/cache/2014/02/cloud/2279772096.jpg');
	
	});
	
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
	
	$('select.select2').select2();
	
	// FIXED MENU
	$(window).scroll( function(e) {
	
		var scrollTop = $(this).scrollTop(),
			fixedNav = $('.navbar.fixed-top'),
			totalHeight = 0;
			
		
		
		fixedNav.each( function() {
		
			var offset = $(this).attr('data-offset'),
				height = $(this).height();
		
			if ( scrollTop >= offset ) {
				$(this).stop().animate({
					'top':	totalHeight
				}, 300, "linear");
			} else {
		
				$(this).stop().animate({
					'top':	-height
				}, 100, "linear");
		
			}
			
			totalHeight = totalHeight + height;
		
		});
		
	});
	
	if ( jQuery('.vertical-center').length > 0 ) window.flexVerticalCenter( jQuery('.vertical-center'));
	
});