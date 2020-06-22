(function ($) {
 "use strict";  
	
	/*---------------------
	 Mean Menu
	--------------------- */
	$('.mobile-menu nav').meanmenu({
		meanScreenWidth: "767",
		meanMenuContainer: ".mobile-menu",
	});
	
	/*----- main slider -----*/	
	$('#mainSlider').nivoSlider({
		directionNav: true,
		animSpeed: 500,
		slices: 18,
		pauseTime: 5000,
		pauseOnHover: false,
		controlNav: false,
		prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',
		nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>'
	});	
	$('#mainSlider-2').nivoSlider({
		animSpeed: 500,
		slices: 18,
		pauseTime: 5000,
		directionNav: false,
		pauseOnHover: false,
		controlNav: true
	});
	
	/*---------------------
	 left slider carousel
	--------------------- */
	$("#owl-slider-left, #owl-testmonial").owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall:[979,1],
		itemsTablet: [768,1],
		itemsMobile: [750,1],
		pagination: false,
		navigation : true,
		navigationText: [
			"<i class='fa fa-chevron-left icon-white'></i>",
			"<i class='fa fa-chevron-right icon-white'></i>"
		]
	});
	/*---------------------
	 Product slider carousel
	--------------------- */
	$("#product-slider, #product-slider-two, #product-slider-women, #product-slider-kids, #blog-carousel, #singleproduct-slider").owlCarousel({
		items : 3,
		itemsDesktop: [1199,3],
		itemsDesktopSmall:[979,2],
		itemsTablet: [768,2],
		itemsMobile: [750,1],
		pagination: false,
		navigation : true,
		navigationText: [
			"<i class='fa fa-chevron-left icon-white'></i>",
			"<i class='fa fa-chevron-right icon-white'></i>"
		]
	});
	$("#owl-feature, #owl-spacial, #owl-best-sell").owlCarousel({
		items : 4,
		itemsDesktop : [1199,4],
		itemsDesktopSmall:[979,3],
		itemsTablet: [768,3],
		itemsMobile: [750,1],
		pagination: false,
		navigation : true,
		navigationText: [
			"<i class='fa fa-chevron-left icon-white'></i>",
			"<i class='fa fa-chevron-right icon-white'></i>"
		]
	});
	$("#bag-men-carousel, #bag-women-carousel, #bag-kids-carousel").owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall:[979,1],
		itemsTablet: [768,1],
		itemsMobile: [750,1],
		pagination: false,
		navigation : true,
		navigationText: [
			"<i class='fa fa-chevron-left icon-white'></i>",
			"<i class='fa fa-chevron-right icon-white'></i>"
		]
	});
	$("#owl-claint").owlCarousel({
		items : 5,
		itemsDesktop : [1199,4],
		itemsDesktopSmall:[979,4],
		itemsTablet: [768,4],
		itemsMobile: [750,2],
		pagination: false,
		navigation : false,
		navigationText: [
			"<i class='fa fa-chevron-left icon-white'></i>",
			"<i class='fa fa-chevron-right icon-white'></i>"
		]
	});
	$("#owl-look-book").owlCarousel({
		items : 5,
		itemsDesktop : [1199,5],
		itemsDesktopSmall:[979,5],
		itemsTablet: [768,3],
		itemsMobile: [750,2],
		pagination: true,
		navigation : false,
		navigationText: [
			"<i class='fa fa-chevron-left icon-white'></i>",
			"<i class='fa fa-chevron-right icon-white'></i>"
		]
	});
	/*---------------------
	 Back to top
	--------------------- */
	$('body').append('<div id="totop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span></div>');         
	$(window).on('scroll',function(){
		if($(this).scrollTop()!==0){
			$('#totop').fadeIn();
		}
		else{
			$('#totop').fadeOut();
		}

	});
	$('#totop').on('click',function(){
		$('html, body').animate({scrollTop:0}, 600);
	});
	
	/*---------------------
	 Price Filter
	--------------------- */
	$( "#slider-range" ).slider({
	  range: true,
	  min: 0,
	  max: 1000,
	  values: [ 176, 1000 ],
	  slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	  }
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	  " - $" + $( "#slider-range" ).slider( "values", 1 ) );   
    
    
})(jQuery);    