//@prepros-prepend mixitup.min.js
//@prepros-prepend mixitup-pagination.js
//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend owl.carousel.min.js
//@prepros-prepend readmore.js

jQuery(document).ready(function($) {

 /* ADD CLASS ON SCROLL*/

 $(window).scroll(function() {
  var scroll = $(window).scrollTop();

  if (scroll >= 100) {
    $("body").addClass("scrolled");
  } else {
    $("body").removeClass("scrolled");
  }
});


/* TABBED CONTENT */

$(document).ready(function () {
  if ($('.tabbed-section').length) {
    $(".tabbed-section__head--tab:nth-child(1)").addClass("active");
    $(".tabbed-section__body--item:nth-child(1)").addClass("visible");
  }
});

$(".tabbed-section__head--tab").click(function (e) {
  var selectedTab = $(this).attr("data-tab");
  $(".tabbed-section__head--tab.active").removeClass('active');
  $(this).addClass('active');
  $(".tabbed-section__body--item.visible").removeClass('visible');
  $(".tabbed-section__body--item." + selectedTab).addClass('visible');
});

// ============ Carousels
 
$(".owl-carousel").owlCarousel({
  loop:true,
  margin:48,
  center:true,
  nav:true,
  dots:true,
  items:1,
  autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
})


new Readmore('article');

$(document).ready(function() {

  function toggleSidebar() {
    $(".navbutton").toggleClass("active");
    $("main").toggleClass("move-to-left");
    $(".sidebar-item").toggleClass("active");
  }

  $(".navbutton").on("click tap", function() {
    toggleSidebar();
  });

  // $(document).keyup(function(e) {
  //   if (e.keyCode === 27) {
  //     toggleSidebar();
  //   }
  // });

});

var mixer = mixitup('.testimonial-grid', {
    controls: {
        toggleLogic: 'and'
    }
});




}); //Don't remove ---- end of jQuery wrapper






