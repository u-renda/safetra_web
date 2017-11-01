var winPath = window.location.pathname.split('/');

(function($) {

	'use strict';

	/*
	Nivo Slider
	*/
	if ($.isFunction($.fn.nivoSlider)) {
		$('#nivoSlider').nivoSlider({
			effect: 'random',
			slices: 15,
			boxCols: 8,
			boxRows: 4,
			animSpeed: 500,
			pauseTime: 3000,
			startSlide: 0,
			directionNav: true,
			controlNav: true,
			controlNavThumbs: false,
			pauseOnHover: true,
			manualAdvance: false,
			prevText: 'Prev',
			nextText: 'Next',
			randomStart: false
		});
	}
	
	/*
	Navigation
	*/
	var nav_parent = $('li.nav-parent');
	
	nav_parent.each(function() {
		var href = $(this).find('a').attr('href');
		var split = href.split('/');
		
		// Untuk link yang tidak ada dropdown-nya
		if (split[4] === winPath[2]) {
            $(this).addClass('active');
        }
		
		// Untuk halaman program
        if (winPath[2] === "program" && split[0] === "#program") {
            $(this).addClass('active');
        }
		
		// Untuk halaman media
		if (winPath[2] === "media" && split[0] === "#media") {
            $(this).addClass('active');
        }
	});

}).apply(this, [jQuery]);