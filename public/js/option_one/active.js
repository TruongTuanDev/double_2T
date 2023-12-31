var startTime = new Date().getTime();

window.onload = () => {
	'use strict';
  
	if ('serviceWorker' in navigator) {
	  navigator.serviceWorker
			   .register('./sw.js');
	}
  }
(function($) {
    "use strict";
     $(document).on('ready', function() {	
	
		/*====================================
			Scroll Up JS
		======================================*/
		$.scrollUp({
			scrollText: '<span><i class="fa fa-angle-up"></i></span>',
			easingType: 'easeInOutExpo',
			scrollSpeed: 900,
			animation: 'fade'
		});  
		
	});
	
  var endTime = new Date().getTime();

  var loadTime = endTime - startTime;
	/*=====================================
	  Preloader JS
	======================================*/ 	
	$('.preloader').delay(loadTime).fadeOut('slow');
	setTimeout(function() {
	$('body').removeClass('no-scroll');
	}, loadTime); 
	 
})(jQuery);





