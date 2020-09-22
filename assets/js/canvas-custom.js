/* Offcanvas file */

(function($) {
    "use strict";
    // collapse sidebar - start
      // --------------------------------------------------
      $(document).ready(function () {
        $('.close-btn, .overlay').on('click', function () {
          $('.offcanvas__block').removeClass('active');
          $('.overlay').removeClass('active');
        });

        $('.menu-btn').on('click', function () {
          $('.offcanvas__block').addClass('active');
          $('.overlay').addClass('active');
        });

        $(".menu-btn").on("click", function(e) {
            var element = document.querySelector( '.offcanvas__block' );
            var focusable = element.querySelectorAll( 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
            var firstFocusable = focusable[0];
            var lastFocusable = focusable[focusable.length - 1];
            tab_focus( firstFocusable, lastFocusable );
        });
        
        //Focus trap in popup.
     
        function tab_focus( firstFocusable, lastFocusable ) {
            $(document).on('keydown', function(e) {
                if (e.key === 'Tab' || e.keyCode === KEYCODE_TAB) {
                    if ( e.shiftKey ) /* shift + tab */ {
                        if (document.activeElement === firstFocusable) {
                            lastFocusable.focus();
                            e.preventDefault();
                        }
                    } else /* tab */ {
                        if (document.activeElement === lastFocusable) {
                            firstFocusable.focus();
                            e.preventDefault();
                        }
                    }
                }
            });
        }
      });
    
})(jQuery);