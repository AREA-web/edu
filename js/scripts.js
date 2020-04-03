/*!
    * Start Bootstrap - Creative v6.0.1 (https://startbootstrap.com/themes/creative)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-creative/blob/master/LICENSE)
    */
    (function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 72)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 75
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-scrolled");
    } else {
      $("#mainNav").removeClass("navbar-scrolled");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Magnific popup calls
  $('#portfolio').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });

})(jQuery); // End of use strict


// ************************** added by me ************************** //

$(document).ready(function() {

  // Gets the video src from the data-src on each button
  
  var $videoSrc;  
  $('.video-btn').click(function() {
      $videoSrc = $(this).data( "src" );
  });
  console.log($videoSrc);
  
    
    
  // when the modal is opened autoplay it  
  $('#myModal').on('shown.bs.modal', function (e) {
      
  // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
  $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
  })
    
  
  
  // stop playing the youtube video when I close the modal
  $('#myModal').on('hide.bs.modal', function (e) {
      // a poor man's stop video
      $("#video").attr('src',$videoSrc); 
  }) 
    
  // document ready  
  });
  
  $(document).ready(function()
  {
    var colorLi = $(".color-option ul li");
    colorLi 
    
  .eq(0).css("background","#f4623a").end()
  .eq(1).css("background","#f72d2d").end()
  .eq(2).css("background","#17a2b8").end()
  .eq(3).css("background","#6f42c1").end()
  .eq(4).css("background","#ffa41b").end()
  .eq(5).css("background","#000");
  
  $(".color-option ul li").click(function()
  {
    $(':root').css({
      // '--myprimeColor': $(this).css("background-color") ,
    });
    if( $(this).css("background-color") == "rgb(244, 98, 58)" ){
      $(':root').css({
        '--myprimeColor': $(this).css("background-color") ,
        '--myprimeColorblack': "#ee3e0d"
      });
    } else if( $(this).css("background-color") == "rgb(247, 45, 45)" ){
      $(':root').css({
        '--myprimeColor': $(this).css("background-color") ,
        '--myprimeColorblack': "#a81a1a"
      });
    } else if( $(this).css("background-color") == "rgb(23, 162, 184)" ){
      $(':root').css({
        '--myprimeColor': $(this).css("background-color") ,
        '--myprimeColorblack': "#005081"
      });
    } else if( $(this).css("background-color") == "rgb(111, 66, 193)" ){
      $(':root').css({
        '--myprimeColor': $(this).css("background-color") ,
        '--myprimeColorblack': "rgb(77, 43, 139)"
      });
    } else if( $(this).css("background-color") == "rgb(255, 164, 27)" ){
      $(':root').css({
        '--myprimeColor': $(this).css("background-color") ,
        '--myprimeColorblack': "#be7d1c"
      });
    }
    //  else if( $(this).css("background-color") == "rgb(0 , 0 , 0 )" ){
    //   $(':root').css({
    //     '--myprimeColor': $(this).css("background-color") ,
    //     '--myprimeColorblack': "#be7d1c"
    //   });
    // }
  });
});
  
// var colors = [
//   "#f4623a",
//   "#f72d2d",
//   "#17a2b8",
//   "#ffa41b"
// ];

// // get random color from array
// function getColor() {
//    return colors[
//      Math.floor(Math.random() * colors.length)
//    ];
// }

// // Set the color from array
// document.documentElement.style.setProperty('--myprimeColor', getColor());
