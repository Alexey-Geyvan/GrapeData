
// 'use strict';

$.fn.isOnScreen = function(){
    var win = $(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};


$(document).ready(function () {   
   
   //slider for category-list
  $(".category-slider__list").slick({
      autoplay: false,
      slidesToShow: 5,
      infinite: true,
      dots: false,
      arrows: true,
      
      responsive: [{      
          breakpoint: 1410,
          settings: {
            slidesToShow: 5,
          }      
        }, {
    
          breakpoint: 1030,
          settings: {
            slidesToShow: 4,
          }      
        }, {
    
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }      
        }
      ]
  });


    //slider for homepage
  $(".fullwidth-slider").slick({
      autoplay: true,
      slidesToShow: 1,
      infinite: true,
      dots: false,
      arrows: false,
      autoplaySpeed: 5000,
      speed:600,
      pauseOnHover: false     
  });


       
  //mobile nav bg
  $('#bs-main-navbar-collapse-1').on('show.bs.collapse', function () {
    $('.overlay').fadeIn();
  });
  $('#bs-main-navbar-collapse-1').on('hide.bs.collapse', function () {
    $('.overlay').fadeOut();
  });
  $('.overlay').click(function(){  
    $('#bs-main-navbar-collapse-1').collapse('hide');
  });

    
  
  //sticky nav  
  $(window).on('scroll', function(){   
    if ( $('body').hasClass('home') ) {
        if ( $(document).scrollTop() < 120 ){
            $('nav.navbar').removeClass('scrolled');
            $('nav.navbar').removeClass('navbar-light');
            $('nav.navbar').addClass('navbar-dark');
        } else {
          $('nav.navbar').addClass('scrolled');
          $('nav.navbar').removeClass('navbar-dark');
          $('nav.navbar').addClass('navbar-light');          
        }
    } else {      
      if ( $(document).scrollTop() > 20 ){
        $('nav.navbar').addClass('scrolled');
      } else {
        $('nav.navbar').removeClass('scrolled');
      }
    }
  });  



  AOS.init();

});


