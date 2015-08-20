
(function($) {
	
	"use strict";
	
/* ==========================================================================
   ieViewportFix - fixes viewport problem in IE 10 SnapMode and IE Mobile 10
   ========================================================================== */
   
	function ieViewportFix() {
	
		var msViewportStyle = document.createElement("style");
		
		msViewportStyle.appendChild(
			document.createTextNode(
				"@-ms-viewport { width: device-width; }"
			)
		);

		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			
			msViewportStyle.appendChild(
				document.createTextNode(
					"@-ms-viewport { width: auto !important; }"
				)
			);
		}
		
		document.getElementsByTagName("head")[0].
				appendChild(msViewportStyle);

	}

/* ==========================================================================
   exists - Check if an element exists
   ========================================================================== */		
	
	function exists(e) {
		return $(e).length > 0;
	}

/* ==========================================================================
   isTouchDevice - return true if it is a touch device
   ========================================================================== */

	function isTouchDevice() {
		return !!('ontouchstart' in window) || ( !! ('onmsgesturechange' in window) && !! window.navigator.maxTouchPoints);
	}

/* ==========================================================================
   setDimensionsPieCharts
   ========================================================================== */
	
	function setDimensionsPieCharts() {

		$('.pie-chart').each(function() {

			var $t = $(this),
				n = $t.parent().width(),
				r = $t.attr("data-barSize");
			
			if (n < r) {
				r = n;
			}
			
			$t.css("height", r);
			$t.css("width", r);
			$t.css("line-height", r + "px");
			
			$t.find("i").css({
				"line-height": r + "px",
				"font-size": r / 3
			});
			
		});

	}

/* ==========================================================================
   animatePieCharts
   ========================================================================== */

	function animatePieCharts() {

		if(typeof $.fn.easyPieChart !== 'undefined'){

			$('.pie-chart:in-viewport').each(function() {
	
				var $t = $(this),
					n = $t.parent().width(),
					r = $t.attr("data-barSize"),
					l = "square";
				
				if ($t.attr("data-lineCap") !== undefined) {
					l = $t.attr("data-lineCap");
				} 
				
				if (n < r) {
					r = n;
				}
				
				$t.easyPieChart({
					animate: 1300,
					lineCap: l,
					lineWidth: $t.attr("data-lineWidth"),
					size: r,
					barColor: $t.attr("data-barColor"),
					trackColor: $t.attr("data-trackColor"),
					scaleColor: "transparent",
					onStep: function(from, to, percent) {
						$(this.el).find('.pie-chart-percent span').text(Math.round(percent));
					}
	
				});
				
			});
			
		}

	}

/* ==========================================================================
   animateMilestones
   ========================================================================== */

	function animateMilestones() {

		$('.milestone:in-viewport').each(function() {
			
			var $t = $(this),
				n = $t.find(".milestone-value").attr("data-stop"),
				r = parseInt($t.find(".milestone-value").attr("data-speed"), 10);
				
			if (!$t.hasClass("already-animated")) {
				$t.addClass("already-animated");
				$({
					countNum: $t.find(".milestone-value").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".milestone-value").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".milestone-value").text(this.countNum);
					}
				});
			}
			
		});

	}

/* ==========================================================================
   animateProgressBars
   ========================================================================== */

	function animateProgressBars() {

		$('.progress-bar .progress-bar-outer:in-viewport').each(function() {
			
			var $t = $(this);
			
			if (!$t.hasClass("already-animated")) {
				$t.addClass("already-animated");
				$t.animate({
					width: $t.attr("data-width") + "%"
				}, 2000);
			}
			
		});

	}

/* ==========================================================================
   enableParallax
   ========================================================================== */

	function enableParallax() {

		// vertical parallax
		if(typeof $.fn.parallax !== 'undefined'){
			
			$('.parallax').each(function() {
	
				var $t = $(this);
				$t.addClass("parallax-enabled");
				$t.parallax("49%", 0.3, false);
	
			});
			
		}
		
		// horizontal parallax
		if(typeof $.fn.hparallax !== 'undefined'){
		
			$('.horizontal-parallax').each(function() {
	
				var $t = $(this);
				$t.addClass("horizontal-parallax-enabled");
				$t.hparallax();
	
			});
			
		}
		
		//animated parallax
		if(typeof $.fn.animatedparallax !== 'undefined'){
		
			$('.animated-parallax').each(function() {
	
				var $t = $(this);
				$t.addClass("animated-parallax-enabled");
				$t.animatedparallax();
	
			});
		
		}

	}

/* ==========================================================================
   handleContactForm - validate and ajax submit contat form
   ========================================================================== */

	function handleContactForm() {
	
		if(typeof $.fn.validate !== 'undefined'){
            $('#form-login').validate({
				errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
				rules: {					
					mail: {
						required: true,
						email: true,
					},
                    password:{
                        required: true,
                    }
				},
				messages: {
					mail: {
						required: "Campo obligatorio!",
						mail: "Por favor introduce un email correcto",
                        remote:"Este mail xa esta usado"
					},
                    password:{
                        required: "Este campo é obligatorio!"
                    }
				},
				
			});
                     /* //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */  

            
            
		}
		
	}



/* ==========================================================================
   handleStickyHeader
   ========================================================================== */	 
	var stickyHeader = false;
	var stickypoint = 500;
	
	if ($('body').hasClass('sticky-header')){
		stickyHeader = true;
	}
		
	stickypoint = $("#header-wrap").outerHeight() + 100;
	
	function handleStickyHeader() {
	
		var b = document.documentElement,
        	e = false;

		function f() {
			
			window.addEventListener("scroll", function (h) {
				
				if (!e) {
					e = true;
					setTimeout(d, 250);
				}
			}, false);
			
			window.addEventListener("load", function (h) {
				
				if (!e) {
					e = true;
					setTimeout(d, 250);
				}
			}, false);
		}
	
		function d() {
			
			var h = c();
			
			if (h >= stickypoint) {
				$('#header').addClass("stuck");
			} else {
				$('#header').removeClass("stuck");
			}
			
			e = false;
		}
	
		function c() {
			
			return window.pageYOffset || b.scrollTop;
			
		}
		
		f();
		
	}	
	

	 
/* ==========================================================================
   When document is ready, do
   ========================================================================== */
   
	$(document).ready(function() {			   
		
		ieViewportFix();
		
		setDimensionsPieCharts();
		
		animatePieCharts();
		animateMilestones();
		animateProgressBars();

		if (!isTouchDevice()) {
			enableParallax();
		}

		handleContactForm();
		
		handleMobileMenu();
		showHideMobileMenu();
		
		handleAccordionsAndToogles();
		
		handleBackToTop();
		showHidebackToTop();
		
		handleVideoBackground();
		
		handleSearch();
		
		if(stickyHeader && ($(window).width() > 1024)){ 
			handleStickyHeader();
		}
		
	});

/* ==========================================================================
When the window is resized, do
========================================================================== */
   
	

})(window.jQuery);

// non jQuery scripts below