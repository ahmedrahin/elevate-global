// stickymenu
$(window).on('scroll',function(){
    if($(this).scrollTop()>100){
        $('header').addClass('sticky')
    }else {
        $('header').removeClass('sticky')
    }
})

$(window).on('scroll',function(){
  if($(this).scrollTop()>100){
      $('.menu-bar').addClass('sticky')
  }else {
      $('.menu-bar').removeClass('sticky')
  }
})

// topbar
$('#topbar').click(function(){
    $('html,body').animate({scrollTop:0});
});

let toTop = document.getElementById("topbar");

window.addEventListener("scroll",() => {
    if(window.pageYOffset > 150) {
        toTop.classList.add('activebar');
    } else {
        toTop.classList.remove('activebar')
    }
})

// aos animate
AOS.init();

// owl carousel
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:45,
    navText: ['<i class="fa-sharp fa-solid fa-arrow-left"></i>' , '<i class="fa-sharp fa-solid fa-arrow-right"></i>'],
    nav:true,
    dots: true,
    smartSpeed:1300,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  });

// Preloader
$(window).on('load', function() {
    $('.preloader-area').fadeOut();
  });

  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

// humburder-menu
$('.humburger').click(function(){
    $('.sidebar-menu').toggleClass('menuActive');
    $('.sidebar-menu').removeClass('menuClose')
})
$('.sidebar-clos').click(function(){
    $('.sidebar-menu').toggleClass('menuClose');
    $('.sidebar-menu').removeClass('menuActive');
})

// responsive menubar

$('.menu-icon').click (function(){
    $('.menu-icon').toggleClass('open');
  })
  $('.menu-icon').click (function(){
    $('.menu-item').slideToggle('500');
  })
  
  
  $('#dropdown-link').click (function(){
    $(this).toggleClass('active')
  })
  
  $('#dropdown-link').click (function(){
    $('.dropdown-item').slideToggle('500')
  })
  
  $('#dropdown-link-2').click (function(){
    $(this).toggleClass('active')
  })
  $('#dropdown-link-2').click (function(){
    $('.dropdown-item-2').slideToggle('500')
  })
