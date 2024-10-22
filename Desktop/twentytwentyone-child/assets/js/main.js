$(document).ready(function () {

  
  $('.in-right').slick({
    dots: true,
    infinite: true,
    speed: 300,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
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
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });


    $('.wrapper-main-cst .track').slick({
      infinite: true,
      speed: 300,
      arrows: false,
      speed: 5000,
      autoplay: true,
      autoplaySpeed: 0,
      dot: false,
      cssEase: 'linear',
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]
    });



    $('.product_slider').slick({
      infinite: true,
      arrows: true,
      autoplaySpeed: 1500,
      autoplay: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      rows: 1,
      speed: 1500, // 1.5 seconds slide speed
      nextArrow: $(".left-arrow-slider"),
      prevArrow: $(".right-arrow-slider"),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            slidesPerRow: 3,
            rows: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            slidesPerRow: 3,
            rows: 2
          }
        }
      ]
    });
    



// grid section


  function initializeSlick() {
    if ($(window).width() <= 768) { // Adjust this width as needed
      if (!$('.process-grid').hasClass('slick-initialized')) {
        $('.process-grid').slick({
          infinite: false,
          arrows: false,
          autoplaySpeed: 5000,
          autoplay: false,
          dots: true,
          arrows: true,
          vertical: true,
          verticalSwiping: true,
          initialSlide: 0,
          slidesToShow: 2,
          slidesToScroll: 2,
          responsive: [
            {
              breakpoint: 480,
              settings: {
                infinite: false,
                slidesToShow: 2,
                vertical: true,
                initialSlide: 0,
                verticalSwiping: true,
                slidesToScroll: 2
              }
            }
          ]
        });
      }
    } else {
      if ($('.process-grid').hasClass('slick-initialized')) {
        $('.process-grid').slick('unslick');
      }
    }
  }

  // Initialize on document ready
  initializeSlick();

  // Re-initialize on window resize
  $(window).resize(function() {
    initializeSlick();
  });








    let questions = document.querySelectorAll(".faq_question");
    questions.forEach((question) => {
      let icon = question.querySelector(".icon-shape");

      question.addEventListener("click", (event) => {
        const active = document.querySelector(".faq_question.active");
        const activeIcon = document.querySelector(".icon-shape.active");

        if (active && active !== question) {
          active.classList.toggle("active");
          activeIcon.classList.toggle("active");
          active.nextElementSibling.style.maxHeight = 0;
        }

        question.classList.toggle("active");
        icon.classList.toggle("active");

        const answer = question.nextElementSibling;

        if (question.classList.contains("active")) {
          answer.style.maxHeight = answer.scrollHeight + "px";
        } else {
          answer.style.maxHeight = 0;
        }
      });
    });






    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      variableWidth: true,
      nextArrow: $(".left-arrow-slider1"),
      prevArrow: $(".right-arrow-slider1"),
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 1024, // For screen sizes less than 1024px
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768, // For screen sizes less than 768px
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    
    // On after slide change
    $('.slider-nav').on('afterChange', function(event, slick, currentSlide, nextSlide){
      $('.slick-slide').removeClass('slick-active-first');
      $('.slick-active').eq(0).addClass('slick-active-first');
    }).trigger('afterChange');
    

    

    

    //tab-slider jquery

  $(document).ready(function() {
    var slickOptions = {
      dots: false,
      arrows: false,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    };



  // Include your JavaScript or jQuery code here
    document.addEventListener('DOMContentLoaded', function() {
      const buttons = document.querySelectorAll('.custom-faq-button');
      const tabs = document.querySelectorAll('.custom-faq-tab-box');

      buttons.forEach(button => {
        button.addEventListener('click', function() {
          // Remove active class from all buttons
          buttons.forEach(btn => btn.classList.remove('active'));
          // Hide all tab boxes
          tabs.forEach(tab => tab.classList.remove('show'));

          // Add active class to the clicked button
          this.classList.add('active');

          // Show the corresponding tab box
          const tabId = this.getAttribute('data-tab');
          document.getElementById('tab-' + tabId).classList.add('show');
        });
      });
    });
    
 

    $(document).ready(function() {
      // Event listener for tab button clicks
      $('.custom-faq-button').on('click', function() {
        // Remove 'active' class from all tab buttons
        $('.custom-faq-button').removeClass('active');
        // Add 'active' class to the clicked tab button
        $(this).addClass('active');
  
        // Get the data-tab attribute of the clicked tab button
        var tabId = $(this).data('tab');
  
        // Remove 'show' class from all tab boxes
        $('.custom-faq-tab-box').removeClass('show');
        // Add 'show' class to the corresponding tab box
        $('#tab-' + tabId).addClass('show');
      });
    });



    $('.inn-cust').slick({
      infinite:true,
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      prevArrow: "<div class='prev-btn'><img src='https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/unnamed-file.png' alt='Previous'></div>",
      nextArrow: "<div class='next-btn'><img src='https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/expand_more.png' alt='Next'></div>",
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

      ]
    });





    


    // $(document).ready(function() {
    //   $(".first-kl span").click(function() {
    //     $(".first-kl").removeClass('active-div');
    //     $(this).parents(".first-kl").addClass('active-div');
    //   });
    // });

    
  });



// range-slider 

var rev = $('.rev_slider');
rev.on('init', function(event, slick, currentSlide) {
  var
    cur = $(slick.$slides[slick.currentSlide]),
    next = cur.next(),
    prev = cur.prev();
  prev.addClass('slick-sprev');
  next.addClass('slick-snext');
  cur.removeClass('slick-snext').removeClass('slick-sprev');
  slick.$prev = prev;
  slick.$next = next;
}).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
  //console.log('beforeChange');
  var
    cur = $(slick.$slides[nextSlide]);
  //console.log(slick.$prev, slick.$next);
  slick.$prev.removeClass('slick-sprev');
  slick.$next.removeClass('slick-snext');
  next = cur.next(),
    prev = cur.prev();
  prev.prev();
  prev.next();
  prev.addClass('slick-sprev');
  next.addClass('slick-snext');
  slick.$prev = prev;
  slick.$next = next;
  cur.removeClass('slick-next').removeClass('slick-sprev');
});

rev.slick({
  speed: 1000,
  arrows: true,
  dots: true,
  focusOnSelect: true,
  prevArrow: "<div class='prev-btn'><img src='https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/unnamed-file.png' alt='Previous'></div>",
  nextArrow: "<div class='next-btn'><img src='https://shamshoom.exoticaitsolutions.com/wp-content/uploads/2024/07/expand_more.png' alt='Next'></div>",
  infinite: true,
  centerMode: true,
  slidesPerRow: 1,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerPadding: '0',
  swipe: true,
  customPaging: function(slider, i) {
    return '';
  },
  /*infinite: false,*/
});






    const items = document.querySelectorAll('.accordion button');

    function toggleAccordion() {
      const itemToggle = this.getAttribute('aria-expanded');
    
      for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
      }
    
      if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
      }
    }
    
    items.forEach((item) => item.addEventListener('click', toggleAccordion));
    


 
// Show the first tab and hide the rest
// $('#tabs-nav li:first-child').addClass('active');
// $('.tab-content').hide();
// $('.tab-content:first').show();

// // Click function
// $('#tabs-nav li').click(function(){
//   $('#tabs-nav li').removeClass('active');
//   $(this).addClass('active');
//   $('.tab-content').hide();
  
//   var activeTab = $(this).find('a').attr('href');
//   $(activeTab).fadeIn();
//   return false;
// });


//step-form jquery



document.querySelectorAll('.radio-container input[type="radio"]').forEach(radio => {
  radio.addEventListener('change', function() {
    document.querySelectorAll('.radio-container').forEach(container => {
      container.classList.remove('selected');
    });
    this.parentElement.classList.add('selected');
    validateCurrentStep(this.closest('.tab-content'));
  });
});

$(document).ready(function () {
  // Handle tab click
  $('.tab-link').click(function () {
    var tabID = $(this).data('tab');
    $('.tab-link').removeClass('active');
    $(this).addClass('active');

    $('.tab-content').removeClass('active');
    $('#' + tabID).addClass('active');
    validateCurrentStep($('#' + tabID));
  });

  // Handle Next button click
  $('.next-btn').click(function () {
    var getParent = $(this).parents('.tab-content').attr('id');
    var errorMessage = false;

    if (getParent == 'step1') {
      var stepValue = $('input[name="option"]:checked').val();
      if (stepValue == undefined) {
        errorMessage = 'Please select one of the options below.';
        $('#' + getParent + ' label').addClass('error');
      }
    } else if (getParent == 'step2') {
      var stepValue = $('input[name="option1"]:checked').val();
      if (stepValue == undefined) {
        errorMessage = 'Please select one of the options below.';
        $('#' + getParent + ' label').addClass('error');
      }
    } else if (getParent == 'step3') {
      var streetAddress = $('input[name="street_address"]').val();
      var city = $('input[name="city"]').val();
      var postal_code = $('input[name="postal_code"]').val();
      if (streetAddress == '') {
        $('input[name="street_address"]').addClass('error');
        errorMessage = 'Please add your Street Address.';
      } else if (city == '') {
        $('input[name="city"]').addClass('error');
        errorMessage = 'Please add your City.';
      } else if (postal_code == '') {
        $('input[name="postal_code"]').addClass('error');
        errorMessage = 'Please add your Postal Code.';
      }
    } else if (getParent == 'step4') {
      $(this).html('Sending..');
      var name = $('input[name="name"]').val();
      var phone = $('input[name="phone"]').val();
      var email = $('input[name="email"]').val();
      if (name == '') {
        $('input[name="name"]').addClass('error');
        errorMessage = 'Please add your Name.';
      } else if (phone == '') {
        $('input[name="phone"]').addClass('error');
        errorMessage = 'Please add your Phone Number.';
      } else if (email == '') {
        $('input[name="email"]').addClass('error');
        errorMessage = 'Please add your Email.';
      }
    }

    if (errorMessage != false) {
      $('.errorData').html(errorMessage);
      $('.errormessage').addClass('active');
      setTimeout(function () {
        $('.errormessage').removeClass('active');
        $('#' + getParent + ' label').removeClass('error');
        $('input[name="street_address"]').removeClass('error');
        $('input[name="city"]').removeClass('error');
        $('input[name="postal_code"]').removeClass('error');
        $('input[name="name"]').removeClass('error');
        $('input[name="phone"]').removeClass('error');
        $('input[name="email"]').removeClass('error');
      }, 2000);
    } else if (getParent == 'step4') {
      var option1 = $('input[name="option"]:checked').val();
      var option2 = $('input[name="option1"]:checked').val();
      var streetAddress = $('input[name="street_address"]').val();
      var city = $('input[name="city"]').val();
      var postalCode = $('input[name="postal_code"]').val();
      var name = $('input[name="name"]').val();
      var phone = $('input[name="phone"]').val();
      var email = $('input[name="email"]').val();
      var url = 'https://shamshoom.exoticaitsolutions.com/wp-content/themes/twentytwentyone-child/multistep.php?name=' + name + '&phone=' + phone + '&city=' + city + '&postalCode=' + postalCode + '&email=' + email + '&address=' + streetAddress + '&option1=' + option1 + '&option2=' + option2;
      console.log(url);
      $.ajax({
        type: 'GET',
        url: url,
        success: function (response) {
          if (response == 'sent') {
            window.location.replace('https://shamshoom.exoticaitsolutions.com/thankyou/');
          }
        }
      });
    } else {
      var currentTab = $(this).closest('.tab-content');
      var nextTab = currentTab.next('.tab-content');

      if (nextTab.length) {
        var nextTabID = nextTab.attr('id');
        $('li[data-tab="' + getParent + '"]').addClass('stepDone');
        $('.tab-link').removeClass('active');
        $('.tab-link[data-tab="' + nextTabID + '"]').addClass('active');
        currentTab.removeClass('active');
        nextTab.addClass('active');
        validateCurrentStep(nextTab);
      }
    }
  });

  // Add active-step class when any input is selected
  $('input').change(function () {
    validateCurrentStep($(this).closest('.tab-content'));
  });
});

// Function to validate the current step and toggle the active-step class
function validateCurrentStep(currentStep) {
  let isValid = true;
  currentStep.find('input').each(function () {
    if ($(this).is(':radio') && !$('input[name="' + $(this).attr('name') + '"]:checked').val()) {
      isValid = false;
    } else if ($(this).is(':text') && $(this).val() == '') {
      isValid = false;
    }
  });
  if (isValid) {
    currentStep.find('.next-btn').addClass('active-step');
  } else {
    currentStep.find('.next-btn').removeClass('active-step');
  }
}


//smooth transition target on anchor tag
 // Optional JavaScript for additional smooth scrolling control
 document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});










  // Handle Previous button click
  $('.prev-btn').click(function () {
    var currentTab = $(this).closest('.tab-content');
    var prevTab = currentTab.prev('.tab-content');

    if (prevTab.length) {
      var prevTabID = prevTab.attr('id');

      $('.tab-link').removeClass('active');
      $('.tab-link[data-tab="' + prevTabID + '"]').addClass('active');

      currentTab.removeClass('active');
      prevTab.addClass('active');
    }
  });

 

  $(window).scroll(function(){
    if($(this).scrollTop() > 40){
        $('.header-sec').addClass('sticky')
    } else{
        $('.header-sec').removeClass('sticky')
    }
  });

});


jQuery(document).ready(function($) {
  $('.img-gk').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    autoPlay: 3000, // 3 seconds autoplay interval
    pageDots: false,
    prevNextButtons: false,
    wrapAround: true,
    freeScroll: false,
    draggable: true,
    selectedAttraction: 0.025, // Lower value for smoother sliding
    friction: 0.28 // Higher value for more friction
  });

  var count = 5;
  $('.review-jk[data-id="1"]').addClass('review-cst-main-bottom');
  setInterval(function(){
    var countMine = $('.review-jk.review-cst-main-bottom').attr('data-id');
    $('.review-jk').removeClass('review-cst-main-bottom');
    setTimeout(function(){
      if(countMine >= count){
        $('.review-jk[data-id="1"]').addClass('review-cst-main-bottom');
      }else{
        countMine = parseInt(countMine) + 1;
        $('.review-jk[data-id="'+countMine+'"]').addClass('review-cst-main-bottom');
      }
    }, 2000);
  }, 8000);
});






// $(document).ready(function() {
//   setInterval(function() {

//     $(".review-alt").addClass("review-cst-main-bottom");//adds the class

//     setTimeout(function() {//waits 6 seconds to remove the class
//       $(".review-alt").removeClass("review-cst-main-bottom");
//     }, 6000);

//   }, 30000)//repeats the process every 10 seconds
// });


// $(document).ready(function() {
//   setInterval(function() {

//     $(".review-alt1").addClass("review-cst-main-bottom review-cst-main-bottom1");//adds the class

//     setTimeout(function() {//waits 6 seconds to remove the class
//       $(".review-alt1").removeClass("review-cst-main-bottom review-cst-main-bottom1");
//     }, 6000);

//   }, 35000)//repeats the process every 10 seconds
// });



// $(document).ready(function() {
//   setInterval(function() {

//     $(".review-alt2").addClass("review-cst-main-bottom review-cst-main-bottom2");//adds the class

//     setTimeout(function() {//waits 6 seconds to remove the class
//       $(".review-alt2").removeClass("review-cst-main-bottom review-cst-main-bottom2");
//     }, 6000);

//   }, 40000)//repeats the process every 10 seconds
// });


// $(document).ready(function() {
//   setInterval(function() {

//     $(".review-alt3").addClass("review-cst-main-bottom review-cst-main-bottom3");//adds the class

//     setTimeout(function() {//waits 6 seconds to remove the class
//       $(".review-alt3").removeClass("review-cst-main-bottom review-cst-main-bottom3");
//     }, 6000);

//   }, 45000)//repeats the process every 10 seconds
// });



// $(document).ready(function() {
//   setInterval(function() {

//     $(".review-alt4").addClass("review-cst-main-bottom review-cst-main-bottom4");//adds the class

//     setTimeout(function() {//waits 6 seconds to remove the class
//       $(".review-alt4").removeClass("review-cst-main-bottom review-cst-main-bottom4");
//     }, 6000);

//   }, 50000)//repeats the process every 10 seconds
// });



$(document).ready(function() {
    if (window.location.hash === '#wpcf7-f276-o1') {
        window.location.href = 'https://shamshoom.exoticaitsolutions.com/thankyou/';
    }
});