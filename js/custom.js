jQuery(document).ready(function($) {

    $(".btn-menu").click(function () {
        $('.nav').slideToggle('.nav');
      $('.fa', this).toggleClass('fa-bars').toggleClass('fa-times');
        return false;
    });


    //    //Do not include! This prevents the form from submitting for DEMO purposes only!
    // $('form').submit(function(event) {
    //     event.preventDefault();
    //     return false;
    // });
    var owlOne = $("#carousel");
    owlOne.owlCarousel({
      smartSpeed: 3000,
      autoplay: true,
      autoplayTimeout: 7000,
      loop: true,
      center:true,
      // nav : true,
      // navText : ["<i class='fa fa-arrow-circle-left'></i>","<i class='fa fa-arrow-circle-right'></i>"],
      dots : true,
      responsive:{
      0:{ items:1 },
      600:{ items:1 },
      767:{ items:2 },
      991:{ items:3 }
      }
    });

    var owlQA = $("#QA");
    owlQA.owlCarousel({
      smartSpeed: 3000,
      autoplay: true,
      autoplayTimeout: 7000,
      loop: true,
      // center:true,
     // animateOut: 'slideOutUp',
     // animateIn: 'slideInUp',
      autoplayHoverPause: false,
      // nav : true,
      // navText : ["<i class='fa fa-arrow-circle-left'></i>","<i class='fa fa-arrow-circle-right'></i>"],
      dots : true,
      responsive:{
      0:{ items:1 },
      600:{ items:1 },
      767:{ items:2},
      991:{ items:2}
      }
    });

// Sticky scroll nav, when pasted header do add stick
    var yourNavigation = $(".header-sticky");
    stickyDiv = "sticky";
    yourHeader = $('.header').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > yourHeader ) {
    yourNavigation.addClass(stickyDiv);
  } else {
    yourNavigation.removeClass(stickyDiv);
  }
});





});