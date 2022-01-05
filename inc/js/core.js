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
    $(this).toggleClass('active').next().slideToggle(300);
      if($('.block__title').hasClass('one')){
          $('.block__title').not($(this)).removeClass('active');
          $('.block__text').not($(this).next()).slideUp(300);
      }
      
  });

});

// $(document).ready(function(){
//   $('.block__title').click(function() {
//       $(this).next().toggle('slow');
//       return false;
//   }).next().hide();
// });





const sections = document.querySelectorAll('.onview');

// Using Intersection Observer ↓

const observerConfig = {
  root: null,
  rootMargin: '600px 0px 0px',
  threshold: 0.1
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    } else {
      entry.target.classList.remove('visible');
    }
  });
}, observerConfig);

sections.forEach(section => {
  observer.observe(section);
});

var containerEl = document.querySelector('.filter-grid');
var mixer;

if (containerEl) {
    mixer = mixitup(containerEl, {
         
    });
}

// $(".popup__close").click(function() {
//   $("#bgvideo")[0].pause();
//   return false;                   
// });
$(".popup__close").on("click",function(){
  $("#bgvideo").get(0).pause(); // $("#bone").trigger('pause');
});

}); //Don't remove ---- end of jQuery wrapper




// var mixer = mixitup('.filter-grid');