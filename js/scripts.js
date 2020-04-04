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
    
  .eq(0).css("background","rgb(0, 189, 170)").end()
  .eq(1).css("background","rgb(235, 69, 89)").end()
  .eq(2).css("background","rgb(32, 64, 81)").end()
  .eq(3).css("background","rgb(114, 27, 101)").end()
  .eq(4).css("background","rgb(255, 164, 27)").end()
  // .eq(5).css("background","#000");
  
  $(".color-option ul li").click(function()
  {
    $(':root').css({
      // '--myprimeColor': $(this).css("background-color") ,
    });
    if( $(this).css("background-color") == "rgb(0, 189, 170)" ){
      $(':root').css({
        '--myprimeColor': $(this).css("background-color") ,
        '--myprimeColorblack': "rgb(64, 0, 130)",
        '--primeFontColor' : '#df154f'

      });
    } else if( $(this).css("background-color") == "rgb(235, 69, 89)" ){
      $(':root').css({
        '--myprimeColor': $(this).css("background-color") ,
        '--myprimeColorblack': "#f78259" ,
        '--primeFontColor' : '#aeefec'

      });
    } else if( $(this).css("background-color") == "rgb(32, 64, 81)" ){
      $(':root').css({
        '--myprimeColor': $(this).css("background-color") ,
        '--myprimeColorblack': "#3b6978",
        '--primeFontColor' : "#f57b51"

      });
    } else if( $(this).css("background-color") == "rgb(114, 27, 101)" ){
      $(':root').css({
        '--myprimeColor': $(this).css("background-color") ,
        '--myprimeColorblack': "#b80d57",
        '--primeFontColor' : "#c69eab"

      });
    } else if( $(this).css("background-color") == "rgb(255, 164, 27)" ){
      $(':root').css({
        '--myprimeColor': $(this).css("background-color") ,
        '--myprimeColorblack': "#be7d1c",
        '--primeFontColor' : "#000839"

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

$(document).ready(function() {
  $(".reg").slideUp();


});

$(".Register").click(function(){
  $(".reg").slideToggle();
  $(".log").slideToggle();
});

var xx = 0 ;

document.getElementById("show").onclick = function () {
    if( xx==0 ){
    document.getElementById("show").innerText = 'اخفاء كلمة السر';
    document.getElementById("pwd").type = 'text';
    document.getElementById("pwd2").type = 'text';
    document.getElementById("pwd3").type = 'text';

        xx++;
    } else if( xx == 1){
        document.getElementById("show").innerText = 'اظهار كلمة السر ';
    document.getElementById("pwd").type = 'password';
    document.getElementById("pwd2").type = 'password';
    document.getElementById("pwd3").type = 'password';

    

        xx--;
    }
}