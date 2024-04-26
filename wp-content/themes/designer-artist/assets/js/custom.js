function designer_artist_menu_open_nav() {
	window.designer_artist_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function designer_artist_menu_close_nav() {
	window.designer_artist_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
 	jQuery('.main-menu > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},  
		speed: 'fast'
 	});

	new WOW().init();

	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
});

jQuery(document).ready(function () {
	window.designer_artist_currentfocus=null;
  	designer_artist_checkfocusdElement();
	var designer_artist_body = document.querySelector('body');
	designer_artist_body.addEventListener('keyup', designer_artist_check_tab_press);
	var designer_artist_gotoHome = false;
	var designer_artist_gotoClose = false;
	window.designer_artist_responsiveMenu=false;
 	function designer_artist_checkfocusdElement(){
	 	if(window.designer_artist_currentfocus=document.activeElement.className){
		 	window.designer_artist_currentfocus=document.activeElement.className;
	 	}
 	}
 	function designer_artist_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.designer_artist_responsiveMenu){
			if (!e.shiftKey) {
				if(designer_artist_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				designer_artist_gotoHome = true;
			} else {
				designer_artist_gotoHome = false;
			}

		}else{

			if(window.designer_artist_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.designer_artist_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.designer_artist_responsiveMenu){
				if(designer_artist_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					designer_artist_gotoClose = true;
				} else {
					designer_artist_gotoClose = false;
				}
			
			}else{

			if(window.designer_artist_responsiveMenu){
			}}}}
		}
	 	designer_artist_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);
});

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

jQuery(document).ready(function () {
	function designer_artist_search_loop_focus(element) {
		var designer_artist_focus = element.find('select, input, textarea, button, a[href]');
		var designer_artist_firstFocus = designer_artist_focus[0];  
		var designer_artist_lastFocus = designer_artist_focus[designer_artist_focus.length - 1];
		var KEYCODE_TAB = 9;

		element.on('keydown', function designer_artist_search_loop_focus(e) {
			var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

			if (!isTabPressed) { 
			  return; 
			}

			if ( e.shiftKey ) /* shift + tab */ {
			  if (document.activeElement === designer_artist_firstFocus) {
		    designer_artist_lastFocus.focus();
		      e.preventDefault();
		    }
		  } else /* tab */ {
		  	if (document.activeElement === designer_artist_lastFocus) {
		    	designer_artist_firstFocus.focus();
		      e.preventDefault();
		    }
		  }
		});
	}
	
	jQuery('.search-box span a').click(function(){
    jQuery(".serach_outer").slideDown(1000);
  	designer_artist_search_loop_focus(jQuery('.serach_outer'));
  });

  jQuery('.closepop a').click(function(){
    jQuery(".serach_outer").slideUp(1000);
  });
});