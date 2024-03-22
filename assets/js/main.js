// STICKY NAVBAR
const header = document.querySelector('#NavBar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
});


//Scroll back to top

(function($) { "use strict";

	$(document).ready(function(){"use strict";
		
		var progressPath = document.querySelector('.progress-wrap path');
		var pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
		var updateProgress = function () {
			var scroll = $(window).scrollTop();
			var height = $(document).height() - $(window).height();
			var progress = pathLength - (scroll * pathLength / height);
			progressPath.style.strokeDashoffset = progress;
		}
		updateProgress();
		$(window).scroll(updateProgress);	
		var offset = 20;
		var duration = 550;
		jQuery(window).on('scroll', function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.progress-wrap').addClass('active-progress');
			} else {
				jQuery('.progress-wrap').removeClass('active-progress');
			}
		});				
		jQuery('.progress-wrap').on('click', function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
		
		
	});
	
})(jQuery); 

// LOGO CHANGING
const myImage = document.getElementById("logo");

window.addEventListener("scroll", function () {
  if (window.scrollY > 0) {
    myImage.classList.add("logo2");
  } else {
    myImage.classList.remove("logo2");
  }
});


// PLATFORMS SLIDER
$('.ads_sponsors').slick({
  autoplay: true,
  autoplaySpeed: 1500,
  slidesToShow: 6,
  slidesToScroll: 1,
  arrows: false
});

// ASSISTANCE BUTTON
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 1) {
    $(".popup-trigger").addClass("get-in-touch-wrap-r");
  }
  if (scroll <= 1) {
    $(".popup-trigger").removeClass("get-in-touch-wrap-r");
  }
});

(function () {
  var calculateHeight;

  calculateHeight = function () {
    var $content, contentHeight, finalHeight, windowHeight;
    $content = $('#overlay-content');
    contentHeight = parseInt($content.height()) + parseInt($content.css('margin-top')) + parseInt($content.css('margin-bottom'));
    windowHeight = $(window).height();
    finalHeight = windowHeight > contentHeight ? windowHeight : contentHeight;
    return finalHeight;
  };

  $(document).ready(function () {
    $(window).resize(function () {
      if ($(window).height() < 560 && $(window).width() > 600) {
        $('#overlay').addClass('short');
      } else {
        $('#overlay').removeClass('short');
      }
      return $('#overlay-background').height(calculateHeight());
    });
    $(window).trigger('resize');
    $('#popup-trigger').click(function () {
      return $('#overlay').addClass('open').find('.signup-form input:first').select();
    });
    return $('#overlay-background,#overlay-close').click(function () {
      return $('#overlay').removeClass('open');
    });
  });
  $('.collapse').collapse()

}).call(this);


// SWIPER SLIDER
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

