
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


function createCookie(name, value, days) {
  var expires;
    
  if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toGMTString();
  }
  else {
      expires = "";
  }
    
  document.cookie = escape(name) + "=" + 
      escape(value) + expires + "; path=/";
}


$(document).ready(function () {   
   
   //slider for category-list
  $(".category-slider__list").slick({
      autoplay: false,
      slidesToShow: 6,
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


  //top pop-up
  // $('.pop-up__close').click(function () {
  //   $('body').addClass('closed-pop-up');
  //   createCookie("top_popup_state", "closed-pop-up", "1");
  // });

      
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

      


   /*
    //scroll top    
    $('#main').append('<a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>');
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 150) {        
            $('#return-to-top').fadeIn(400);    
        } else {
            $('#return-to-top').fadeOut(400); 
        }
    });
    $('#return-to-top').click(function() {    
        $('body,html').animate({
            scrollTop : 0                      
        }, 500);
    });
     */
    AOS.init();

});