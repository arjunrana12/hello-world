$(document).ready(function () {
  $(".main-box-dream").slick({
    dots: false,
    infinite: true,
    speed: 200,
    slidesToScroll: 1,
    slidesToShow: 3,
    autoplay: true,
    prevArrow: $(".dream-left-arrow"),
    nextArrow: $(".dream-right-arrow"),
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,  
          slidesToScroll: 1,
          dots: false
        }
      }
    ]
  });
});

  $(document).ready(function () {
  $(".main-slider-client").slick({
    dots: false,
    infinite: true,
    speed: 300,
 
    slidesToScroll: 1,
    slidesToShow: 3,
    nextArrow: $(".client-left-arrow"),
    prevArrow: $(".client-right-arrow"),
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2  ,      
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true
        }
      }
    ]
  });

  $(document).ready(function () {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function () {
        if ($('.accordion_body').is(':visible')) {
            $(".accordion_body").slideUp(300);
            $(".plusminus").text('+');
        }
        if ($(this).next(".accordion_body").is(':visible')) {
            $(this).next(".accordion_body").slideUp(300);
            $(this).children(".plusminus").text('+');
        } else {
            $(this).next(".accordion_body").slideDown(300);
            $(this).children(".plusminus").text('-');
        }
    });
});

    //   $(".main-box-banner").slick({
    //     dots: false,
    //     infinite: true,
    //     speed: 300,
    //     nextArrow:true,
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     infinite: true,

    //   responsive: [
    //     {
    //       breakpoint: 767,
    //       settings: {
    //         slidesToShow: 1,
    //         slidesToScroll: 1
    //       }
    //     },
    //   ]
    // });
  });
// Show the first tab and hide the rest
$('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('#tabs-nav li').click(function(){
  $('#tabs-nav li').removeClass('active');
  $(this).addClass('active');
  $('.tab-content').hide();
  
  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});

$(window).scroll(function(){
  if($(this).scrollTop() > 40){
      $('.header-sec').addClass('sticky')
  } else{
      $('.header-sec').removeClass('sticky')
  }
});


jQuery(document).ready(function(){

  jQuery(".hamburger").click(function(){
    jQuery("ul.menu_navbar_set").toggleClass("is-active");
    jQuery(this).toggleClass("is-active");
  });
  });
$(document).ready(function () {
    $('.silder-box-main-testimonilas').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: $(".left-arrow-teatimonials"),
      prevArrow: $(".right-arrow-testimonials"),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
          }
        }

      ]
    });
    


    
    var mainSliderInitialized = false;

    function initSliders() {
        // Initialize expert-main slider
        if (!mainSliderInitialized && $(window).width() <= 768) {
            $('.main-box-galsdsdlery').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots:true,
            });
            mainSliderInitialized = true;
        } else if (mainSliderInitialized && $(window).width() > 768) {
            $('.main-box-gallerywww').slick('unslick');
            mainSliderInitialized = false; // Fixed typo here: "maintSliderInitialized" -> "mainSliderInitialized"
        }
    
        // Initialize case-study slider
    }
    
    // Call initSliders() initially and on window resize
    $(document).ready(function() {
        initSliders();
        $(window).resize(function() {
            initSliders();
        });
    });
    $(window).scroll(function(){
      if($(this).scrollTop() > 40){
          $('.section.header-sec').addClass('sticky')
      } else{
          $('.section.header-sec').removeClass('sticky')
      }
  });
    





});





