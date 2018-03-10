(function($){

	"use strict"; // Start of use strict

	$(window).load(function(){

		// INITIALIZE ANIMSITION
		if($(".animsition").length){
			$(".animsition").animsition({
				inClass               :   'fade-in-up-sm',
				outClass              :   'fade-out-up-sm',
				inDuration            :    1100,
				outDuration           :    800,
				linkElement           :   '.animsition-link',
				loading               :    true,
				loadingParentElement  :   'body', 
				unSupportCss          : [ 'animation-duration',
										  '-webkit-animation-duration',
										  '-o-animation-duration'
										],
				overlay               :   false,
				overlayClass          :   'animsition-overlay-slie',
				overlayParentElement  :   'body'
			});
		}

		// INPUTS EVENTS
		$('.input_1 input, .textarea_1 textarea').on('focus', function() {
			$(this).next("span").addClass("active");
		});
		$('.input_1 input, .textarea_1 textarea').on('blur', function() {
			if($(this).val() === ""){
				$(this).next("span").removeClass("active");
			}
		});

		$('.count').counterUp({
        	delay: 10,
        	time: 1000
    	});

		// SLIDERS

		// SINGLE PROJECT IMAGES SLIDER
		$('.project_images').flexslider({
			directionNav : false,
			controlNav : false
		});

		// HOMEPAGE SLIDER
		$('.site-hero').flexslider({
			animation: "fade",
			directionNav: false,
			controlNav: false, 
			keyboardNav: true,
			slideToStart: 0,
			animationLoop: true,
			pauseOnHover: false,
			slideshowSpeed: 4000, 
		});

		//ISOTOPE PORTFOLIO (HOMEPAGE)
		var $container = $('.portfolio_container');
			$container.isotope({
				filter: '*',
			});
		 
			$('.portfolio_filter a').click(function(){
				$('.portfolio_filter .active').removeClass('active');
				$(this).addClass('active');
		 
				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						animationEngine : "jquery"
					}
				});
				return false;
		});

		// NAVBAR
		var _link = $("nav.desktop-nav ul.first-level").children("li");
		var shown = false;
		// show navbar 
		$(".menu-icon").on( 'click', function(){
			var _this = $(this);
			$("nav.mobile-nav").slideToggle(200);
			if(!shown){
				_this.children("div").css("width","30px");
				shown = true;
			}else{
				_this.children("div").first().css("width","30px");
				_this.children("div").eq(1).css("width","15px");
				_this.children("div").eq(2).css("width","20px");
				shown = false;
			}
		});

		 // Contact form
  		var form = $('#contact-form');
  			form.submit(function(event){
    			event.preventDefault();
    			var form_status = $('<div class="form_status"></div>');
    			$.ajax({
      				url: $(this).attr('action'),
      					beforeSend: function(){
        				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
      				}
    			}).done(function(data){
      				form_status.html('<p class="text-success">Thank you for contact us. As early as possible  we will contact you</p>').delay(3000).fadeOut();
    			});
  			});

		// dropdown - desktop
		_link.hover(function(e){
			e.preventDefault();
			var _this = $(this);
			if(_this.children("ul.second-level").html() !== undefined){
				if(e.type === "mouseenter"){
					_this.children("ul.second-level").slideDown(200);
				}else{
					_this.children("ul.second-level").slideUp(200);
				}
			}
		});

		// dropdown - mobile
		$("nav.mobile-nav").html($("nav.desktop-nav").html()); // set navbar

		var mobile_link = $("nav.mobile-nav ul.first-level").children("li");
		mobile_link.children("a").on( 'click', function(e){
			var _this = $(this);
			var submenu_exists = (_this.next("ul.second-level").html() === undefined) ? false : true;
			if(submenu_exists){
				e.preventDefault();
				$(".down").slideUp(200);
				if(_this.next("ul.second-level").hasClass("down")){
					_this.next("ul.second-level").removeClass("down");
				}else{
					$(".down").removeClass("down");
					_this.next("ul.second-level").slideDown(200);
					_this.next("ul.second-level").addClass("down");
				}
			}
		});		
	});
})(jQuery);