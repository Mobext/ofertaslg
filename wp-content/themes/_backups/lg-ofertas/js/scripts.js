var $=jQuery.noConflict();

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


$(window).load(function() {
  
  $container = $('#productsList');

  $container.masonry({
        itemSelector : '.product',
        initLayout: false,
        resize: true
  });

});

$(document).ready(function() {

  ancho = $(window).width();

  var slides = $('#slides');

  $('.flexslider').flexslider({
    animation: "slide",
    touch: true,
    controlNav: true,
    slideshow: false
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

  $('.facebook-share').sharrre({
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
  $('.twitter-share').sharrre({
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

  slides.superslides({
    inherit_height_from: '.top',
    play: 7000
  });

  if (ancho < 800) {
    slides.swipe( {
        swipeLeft:function() {
          slides.data('superslides').animate('next');
        },
        swipeRight:function() {
          $(this).superslides('animate', 'prev');
        }
    });
  }

  function loadMasonry() {
      $('#productsList').masonry('layout');
  }

  setTimeout(loadMasonry, 500);
  
});

