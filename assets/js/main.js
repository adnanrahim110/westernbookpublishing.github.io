// STICKY NAVBAR
const header = document.querySelector('#NavBar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
});


// PORTFOLIO SECTION
var carousel = $(".carousel"),
            items = $(".item"),
            currdeg = 0,
            intervalId = null,
            rotationInProgress = false;

        var mouseDownX = 0;
        var mouseUpX = 0;

        $(".carousel").on("mousedown", function (event) {
            mouseDownX = event.pageX;
            stopRotation();
        });

        $(".carousel").on("mousemove", function (event) {
            if (mouseDownX !== 0) {
                mouseUpX = event.pageX;
            }
        });

        $(".carousel").on("mouseup", function (event) {
            if (mouseDownX !== 0) {
                handleSwipe();
            }
            mouseDownX = 0;
            mouseUpX = 0;
            startRotation();
        });

        function handleSwipe() {
            var swipeThreshold = 50; // Minimum swipe distance required to trigger a rotation

            if (mouseUpX - mouseDownX > swipeThreshold) {
                // Swipe right
                rotate({ data: { d: "p" } });
            } else if (mouseDownX - mouseUpX > swipeThreshold) {
                // Swipe left
                rotate({ data: { d: "n" } });
            }
        }

        function rotate(e) {
            if (rotationInProgress) {
                return; // Ignore rotation request if it's already in progress
            }

            rotationInProgress = true;

            if (e.data.d == "n") {
                currdeg = currdeg - 60;
            }
            if (e.data.d == "p") {
                currdeg = currdeg + 60;
            }
            carousel.css({
                "-webkit-transform": "rotateY(" + currdeg + "deg)",
                "-moz-transform": "rotateY(" + currdeg + "deg)",
                "-o-transform": "rotateY(" + currdeg + "deg)",
                "transform": "rotateY(" + currdeg + "deg)"
            });
            items.css({
                "-webkit-transform": "rotateY(" + (-currdeg) + "deg)",
                "-moz-transform": "rotateY(" + (-currdeg) + "deg)",
                "-o-transform": "rotateY(" + (-currdeg) + "deg)",
                "transform": "rotateY(" + (-currdeg) + "deg)"
            });

            setTimeout(function () {
                rotationInProgress = false;
            }, 1000); // Set rotationInProgress to false after 1 second to allow rotation to complete
        }

        function startRotation() {
            if (intervalId === null) {
                intervalId = setInterval(function () {
                    rotate({ data: { d: "n" } });
                }, 2000);
            }
        }

        function stopRotation() {
            if (intervalId !== null) {
                clearInterval(intervalId);
                intervalId = null;
            }
        }

        // Start the rotation initially
        startRotation();

        // Detect visibility change and stop/start rotation accordingly
        document.addEventListener("visibilitychange", function () {
            if (document.visibilityState === "hidden") {
                stopRotation();
            } else if (document.visibilityState === "visible") {
                startRotation();
            }
        });


//Scroll back to top

(function ($) {
  "use strict";

  $(document).ready(function () {
    "use strict";

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
    jQuery(window).on('scroll', function () {
      if (jQuery(this).scrollTop() > offset) {
        jQuery('.progress-wrap').addClass('active-progress');
      } else {
        jQuery('.progress-wrap').removeClass('active-progress');
      }
    });
    jQuery('.progress-wrap').on('click', function (event) {
      event.preventDefault();
      jQuery('html, body').animate({ scrollTop: 0 }, duration);
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


$('.about-ads_sponsors').slick({
  autoplay: true,
  autoplaySpeed: 1500,
  slidesToShow: 5,
  slidesToScroll: 1,
  arrows: true
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


