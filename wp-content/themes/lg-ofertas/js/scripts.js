var $=jQuery.noConflict();
var topWrapper;

paceOptions = {
    // Configuration goes here. Example:
    elements: false,
    restartOnPushState: false,
    restartOnRequestAfter: false,
    document: true
}

Pace.on("done", function(){
  $("#preloader").fadeOut(1000);
  $('body').css('overflow','auto');
});

function resizeTop() {
    topWrapper = $('.top').outerHeight();
    topWrapper = topWrapper + 55;
    //alert(topWrapper);
    $('.wrapper').css('top',topWrapper+'px');
}

$(window).load(function() {
  /*
  $container = $('#productsList');

  $container.masonry({
        itemSelector : '.product',
        initLayout: false,
        resize: true
  });
  */
});

$(window).resize(function() {
  resizeTop();
});

$(document).ready(function() {

  ancho = $(window).width();

  var slides = $('#slides');

  $('.flexslider').flexslider({
    animation: "slide",
    touch: true,
    controlNav: true,
    slideshow: false,
  });

  var mySwiper = new Swiper('.swiper-container', {
    speed: 400,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    loop: true,
    autoplay: 5000,
    autoplayDisableOnInteraction: false,
    preloadImages: true,
    onImagesReady: function(mySwiper) {
      resizeTop();
    }
  });

  var widthShare = $('.social-share').outerWidth();

  $( ".share-top" ).click(function(e) {
    e.preventDefault();
    $( ".social-share" ).css('right','0px');
  });

  $('.close-share').click(function(e) {
    e.preventDefault();
    $('.social-share').css('right', '-300px');
  });

  $('#facebook-share').sharrre({
    share: {
        facebook: true
    },
    template: '<i class="fa fa-facebook"></i>',
    enableCounter: false,
    enableHover: false,
    enableTracking: false,
    click: function(api, options){
        api.simulateClick();
        api.openPopup('facebook');
    }
  });
    
  $('#twitter-share').sharrre({
    share: {
      twitter: true
    },
    template: '<i class="fa fa-twitter"></i>',
    enableCounter: false,
    enableHover: false,
    enableTracking: false,
    click: function(api, options){
      api.simulateClick();
      api.openPopup('twitter');
    }
  });

  function loadMasonry() {
      $('#productsList').masonry('layout');
  }

  setTimeout(loadMasonry, 500);
  
});

