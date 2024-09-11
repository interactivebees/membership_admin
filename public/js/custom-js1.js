jQuery(document).ready(function() {

  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
        $('.backtop').addClass('active');
    } else {
      $('.backtop').removeClass('active');
    }
  });

  $(".backtop").click(function () {    
    $("html, body").animate({scrollTop: 0}, 300);
  });


    var a = 0;
    $(window).scroll(function() {
        var nav = $('#counter');
        if (nav.length) {
            var contentNav = nav.offset().top;
            var oTop = contentNav - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                var $this = $(this),
                countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                },    
                {    
                  duration: 2000,
                  easing: 'swing',
                  step: function() {
                    $this.text(Math.floor(this.countNum));
                  },
                  complete: function() {
                    $this.text(this.countNum);                
                  }    
                });
            });
            a = 1;
          }  
        }
    });

  
    jQuery(document).on("click" , ".modules-accrding h3" , function(){
        jQuery(this).toggleClass("active");
        jQuery(this).next(".mod-txt").slideToggle();
      })


    jQuery('.banner_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        speed: 500,
        arrows: true,
        autoplay: true,
        fade:true,
        
    });
jQuery('.dashboard-banner').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        speed: 200,
        arrows: false,
        autoplay: false,
        fade:true,
        
    });


    jQuery('.testi_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        speed: 1000,
        arrows: true,
        autoplay: true,
    });
    jQuery('.event_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        speed: 1000,
        arrows: true,
        autoplay: true,
    });
    jQuery('.upcoming_prog').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: false,
        infinite: true,
        speed: 1000,
        arrows: false,
        autoplay: true,
    });
    jQuery('.memberslider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            
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
            slidesToScroll: 1
          }
        }
      
      ]
    });
    jQuery('.fac-sl').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      margin:20,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 1100,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            
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
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      
      ]
    });

    

    jQuery('.trainded-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 1100,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            
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

    jQuery('.feed-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [       
        {
          breakpoint: 1100,
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
    

    
    // $(".scroll_div").mCustomScrollbar();
    //fixed header
    $(window).scroll(function() {
        var sticky = $('header '),
            scroll = $(window).scrollTop();

        if (scroll >= 100) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });


    //tabbing

    $(document).on("click" , ".webmain-tab .wtab li" , function(){
        var tid = $(this).attr("tabid");
        $(".conte").hide();
        $(`#${tid}`).show();
        $(".webmain-tab .wtab li").removeClass("active");
        $(this).addClass("active");

    })



});

