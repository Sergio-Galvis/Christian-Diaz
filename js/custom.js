(function($){
	
	/* ---------------------------------------------- /*
	 * Hide URLBar
	/* ---------------------------------------------- */
	
	addEventListener("load", function() { 
			setTimeout(hideURLbar, 0); 
			},
			false); 
			function hideURLbar(){ 
				window.scrollTo(0,1); 
	}
	
	/* ---------------------------------------------- /*
	 * Scroll ToTop
	/* ---------------------------------------------- */
	
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({
				scrollTop:$(this.hash).offset().top},1000);
			});
	});
	
	/* ---------------------------------------------- /*
	 * Start Top Nav
	/* ---------------------------------------------- */
	
	$(function() {
		var pull = $('#pull');
		menu = $('nav ul');
		menuHeight	= menu.height();
		$(pull).on('click', function(e) {
			e.preventDefault();
			menu.slideToggle();
		});
		$(window).resize(function(){
			var w = $(window).width();
	        if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
	        }
	    });
	});
	
	/* ---------------------------------------------- /*
	 * Responsive Slides
	/* ---------------------------------------------- */

	$(function () {
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 700,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			    },
				after: function () {
					$('.events').append("<li>after event fired.</li>");
			    }
		});
	});
	
	/* ---------------------------------------------- /*
	 * Start Scroll Down Learn Btn
	/* ---------------------------------------------- */
	
	$(function() {
		$('a[href*=#]').on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({ 
				scrollTop: $($(this).attr('href')).offset().top}, 900, 'linear');
		});
	});
	
	/* ---------------------------------------------- /*
	 * Scroll ToTop
	/* ---------------------------------------------- */
	
	$(document).ready(function() {
		var defaults = {
		containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
		scrollSpeed: 2200,
		easingType: 'linear' 
		};
		$().UItoTop({ easingType: 'easeOutQuart' 
		});
	});
	
	/* ---------------------------------------------- /*
	* E-mail validation
	/* ---------------------------------------------- */
	
	function isValidEmailAddress(emailAddress) {
		var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
		return pattern.test(emailAddress);
	};
	
	/* ---------------------------------------------- /*
	* Disable copy text
	/* ---------------------------------------------- */
	
	function disabletext(e){
		return false
	}
	function reEnable(){
		return true
	}
	document.onselectstart=new Function ("return false")
	if (window.sidebar){
		document.onmousedown=disabletext
		document.onclick=reEnable
	}
	
	/* ---------------------------------------------- /*
	* Disable right click
	/* ---------------------------------------------- */
	
	document.oncontextmenu = function() {
		return false
   	}
   	function right(e) {
		if (navigator.appName == 'Netscape' && e.which == 3) {
			return false;
      	}
	  	else if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {
			return false;
      	}
	  	return true;
	}
	document.onmousedown = right;
})
(jQuery);