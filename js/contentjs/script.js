(function($){
	$(function(){
		$('[light-slider]').lightSlider({
			item: 1,
			gallery: true,
			mode: "slide",
	        useCSS: true,
	        slideEndAnimation: true,
	        currentPagerPosition: 'middle',
		});

		$('.scrollbar-rail').scrollbar();
	})
})(jQuery);

