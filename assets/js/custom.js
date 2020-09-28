/* Custom JS File */

(function($) {

	"use strict";


	jQuery(document).ready(function() {

    	// Slider JS
    	$('.modern-slider').slick({
            slidesToShow: 1,
    		slidesToScroll: 1,
    		autoplay: false,
			autoplaySpeed: 5000,
			dots: false,
			fade: true,
			prevArrow:
			'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
			nextArrow:
			'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
			arrows: true,
			dots: false,
	      	responsive: [
				{
				  breakpoint: 767,
				  settings: {
				    arrows: false,
				  }
				},
				{
				  breakpoint: 992,
				  settings: {
				    arrows: false,
				  }
				}
			]
    	});

    	// Treding Slider JS
    	$('.trending-news-slider').slick({
            slidesToShow: 1,
    		slidesToScroll: 1,
    		autoplay: true,
			autoplaySpeed: 1000,
			dots: false,
			prevArrow:
			'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
			nextArrow:
			'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
			arrows: true,
    	});

    	// grid Post Slider JS
    	$('.grid__slider__carousel').slick({
            slidesToShow: 4,
    		slidesToScroll: 1,
    		autoplay: false,
			autoplaySpeed: 1000,
			dots: false,
			prevArrow:
			'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
			nextArrow:
			'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
			arrows:true,
			responsive: [
				{
			      breakpoint: 991,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1,
			      }
			    },
				{
			      breakpoint: 767,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1,
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			      }
			    }
			]
    	});


    	// Card Post Slider JS
    	$('.card__post__slider').slick({
            slidesToShow: 4,
    		slidesToScroll: 1,
    		autoplay: true,
			autoplaySpeed: 5000,
			dots: false,
			prevArrow:
			'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
			nextArrow:
			'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
			arrows:false,
			responsive: [
				{
			      breakpoint: 991,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1,
			      }
			    },
				{
			      breakpoint: 767,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1,
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			      }
			    }
			]
    	});

    	// Treding Slider JS
    	$('#primary .fetured__post__carousel').slick({
            slidesToShow: 3,
    		slidesToScroll: 3,
    		autoplay: true,
    		infinite: true,
			autoplaySpeed: 1000,
			dots: false,
			prevArrow:
			'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
			nextArrow:
			'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
			arrows: true,
			responsive: [
				{
			      breakpoint: 991,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			      }
			    }
			]
    	});
    	$('#secondary .fetured__post__carousel, .footer-wrap .fetured__post__carousel').slick({
            slidesToShow: 1,
    		slidesToScroll: 1,
    		prevArrow:
			'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
			nextArrow:
			'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
			arrows: true,
    	});

        // Boxes Section
	    $('.news__highlight').slick({
	        dots: false,
	        autoplay:true,
	        infinite: true,
	        speed: 500,
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        arrows: true,
	        prevArrow:
			'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
			nextArrow:
			'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
			arrows: true,
	        responsive: [
				{
				  breakpoint: 767,
				  settings: {
				    slidesToShow: 1,
	        		slidesToScroll: 1,
				  }
				}
			]
	    });
		// Initialize gototop for carousel
		if ( $('#toTop').length > 0 ) {
		    // Hide the toTop button when the page loads.
		    $("#toTop").css("display", "none");

		      // This function runs every time the user scrolls the page.
		      $(window).scroll(function(){
		        // Check weather the user has scrolled down (if "scrollTop()"" is more than 0)
		        if($(window).scrollTop() > 0){
		          // If it's more than or equal to 0, show the toTop button.
		          $("#toTop").fadeIn("slow");
		      }
		      else {
		          // If it's less than 0 (at the top), hide the toTop button.
		          $("#toTop").fadeOut("slow");
		      }
		  	});

			// When the user clicks the toTop button, we want the page to scroll to the top.
			jQuery("#toTop").click(function(event){

				// Disable the default behaviour when a user clicks an empty anchor link.
				// (The page jumps to the top instead of // animating)
				event.preventDefault();
				// Animate the scrolling motion.
				jQuery("html, body").animate({
					scrollTop:0
				},"slow");
			});
	  	}

	  	$( "a[href*='#']" ).click(function( event ) {
		  event.preventDefault();
		});
		
	  	// Tab Navigate
	  	$( '#primary-menu li.menu-item-has-children' ).focusin( function() {
        $( this ).addClass( 'locked' );
        }).add( this ).focusout( function() {
            if ( !$( this ).is( ':focus' ) ) {
                $( this ).removeClass( 'locked' );
            }
        });

        //slider widget
	     $('.post-slider-section').slick({
	         dots: false,
	         prevArrow:
			'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
			nextArrow:
			'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
	    });

	    // Change tab class and display content
		$('#tab_first a').on('click', function (event) {
		    event.preventDefault();
		    $('.tab-active').removeClass('tab-active');
		    $(this).parent().addClass('tab-active');
		    $('.tab-content_1>div').hide();
		    $($(this).attr('href')).show();
		});

		$('#tab_first a:first').trigger('click'); // Default

		// Change tab class and display content
		$('#tab_second a').on('click', function (event) {
		    event.preventDefault();
		    $('.tab-active').removeClass('tab-active');
		    $(this).parent().addClass('tab-active');
		    $('.tab-content_2>div').hide();
		    $($(this).attr('href')).show();
		});

		$('#tab_second a:first').trigger('click'); // Default

		$('.closebtn').on('click', function(){
			t.close();
 		});
 	}); 
	//Loading
 	jQuery(window).load(function() {
			jQuery(".preeloader").fadeOut('slow', function(){
			jQuery(this).remove();
		});
	});	
})(jQuery);