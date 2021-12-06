//@prepros-prepend mixitup.min.js
//@prepros-prepend mixitup-pagination.js
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
 
$(".testimonial-carousel").owlCarousel({
  loop:true,
  margin:48,
  center:true,
  nav:true,
  dots:false,
  items:1,
  autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
});



new Readmore('article');


// SIDEBAR MOBILEMENU

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



// ACCORDIAN SINGLE ITEM ONLY

$(document).ready(function() {
  $('.block__title').click(function(event) {
      if($('.block').hasClass('one')){
          $('.block__title').not($(this)).removeClass('active');
          $('.block__text').not($(this).next()).slideUp(300);
      }
      $(this).toggleClass('active').next().slideToggle(300);
  });

});




}); //Don't remove ---- end of jQuery wrapper






