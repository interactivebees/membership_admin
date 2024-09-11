$(document).ready(function () {
    //$(".tab-container .content").hide();
    $(".tab-container1 .content").hide();
    //$(".tab-container .content").first().show();
    $(".tab-container1 .content").first().show();
    $(".tab-ul li").each(function () {
        $(this).click(() => {
            $(".tab-container .content").hide();
            $(".tab-container1 .content").hide();
            $(".tab-container .content").eq($(this).index()).show();
            $(".tab-container1 .content").eq($(this).index()).show();
            $(".tab-ul li").removeClass("active");
            $(this).addClass("active");
        })
    })

    var len = $(".tabing-link a").length;
    //alert(len)

    $('.navbar-nav li:has(ul)').addClass('submenu');

    $('.navbar-nav li.submenu').each(function(){
        $(this).append(`<span class="dr"></span>`)
    })

    $(document).on("click" , ".dr" , function(){
        $(this).prev("ul").slideToggle();
        $(this).toggleClass("active");
    })
    $('.slidemenu li:has(ul)').addClass('submenu');


    

    $(document).on("click" , ".slidemenu ul li span" , function(){
        $(this).parent("li").children("ul").slideToggle();
        $(this).parent("li").toggleClass("active");
    })

    $(document).on("click" , ".hemburger-menu" , function(){       
        $('.slidemenu').addClass("active");
    })
   

    $(document).on("click" , ".slidemenu-close" , function(){       
        $('.slidemenu').removeClass("active");
    })    
   
    $(document).on("click", ".form-close", () => {
        $(".startform").removeClass("active");
    })
    $(document).on("click", ".start-btn", () => {
        $(".startform").addClass("active");
    })

    $("ul.tabbing").each(function(){
        $(this).wrap(`<div class="forscroll-mob"></div>`);
        //alert($(this).children("li").width())
    })
    var w = [];
    var sum = 0;
    $("ul.tabbing li").each(function(){
       var x = $(this).width();       
       w.push(x) 
       //console.log(w)
           
    })
    for (let i = 0; i < w.length; i++) {
        sum += w[i];
    } 
    if($(window).width() < 700)
    {
        $("ul.tabbing").width(sum + 30)
    }

    $('.banner , .ps , .testi-slider,.programme-banner .right ul').owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        items: 1,
        dots: false,
        autoplay: true,
        nav: true

    })
    $(".collaborations-sec .slide").owlCarousel({
        navigation : false,
        items : 1, 
        loop:true,
        nav:true,
        autoplay: true,
        dots: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        mouseDrag: false,
        touchDrag: false
    });
    $('.caho-slider').owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
        items: 4,
        dots: false,
        autoplay: true,
        responsive: { 
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: true
            }
        }
    })
    $('.value-slider').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        items: 3,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    })
    $('.cus-sldier , .branch-slider').owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        items: 1,
        dots: false,
        nav: true,
    })
    $('.plant-slider').owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        items: 1,
        dots: true,
        nav: false,
    })
    $('.patron-sec .right ul').owlCarousel({
        loop: false,
        margin: 20,
        responsiveClass: true,
        items: 3,
        dots: false,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
               
            }
        }
    })
    $('.carrer-testimonial ul').owlCarousel({
        loop: true,
        margin: 80,
        responsiveClass: true,
        items: 2,
        dots: false,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 2,
                nav: true,
                loop: true
            }
        }
    })
    $('.career-slider').owlCarousel({
        loop: true,
        margin: 2,
        responsiveClass: true,
        items: 4,
        dots: false,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: true
            }
        }
    })
    $('.t-slider').owlCarousel({
        loop: true,
        margin: 100,
        responsiveClass: true,
        items: 2,
        dots: true,
        nav: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                nav: false,
                loop: true
            }
        }
    })
    $('.faculty_slider').owlCarousel({
        loop: true,
        margin: 100,
        responsiveClass: true,
        items: 3,
        dots: false,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
               
            },
            600: {
                items: 2,
               
            },
            1000: {
                items: 3,
               
            }
        }
    })
    $('.testimonial_slider').owlCarousel({
        loop: true,
        margin: 100,
        responsiveClass: true,
        items: 2,
        dots: false,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                loop: true
            }
        }
    })
    $('.research-slider').owlCarousel({
        loop: true,
        margin: 100,
        responsiveClass: true,
        items: 3,
        dots: false,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
               
            },
            600: {
                items: 2,
               
            },
            1000: {
                items: 3,
               
            }
        }
    })
   
    /*Scrolbar*/
    $(".objective-sec .inner-sec-full,.an-left ul,.media  ul,.media-news .news .outer").mCustomScrollbar({
        axis:"y",
        theme:"dark-thin",
        autoExpandScrollbar:true,
        advanced:{autoExpandHorizontalScroll:true}
    });

    $(".blog-data").mCustomScrollbar({
        scrollButtons: {
            enable: true
        }
    });
    $(document).on("click", ".menu-toggle", function () {
        $(".nav").addClass("active");
    })
    $(document).on("click", ".menu-close", function () {
        $(".nav").removeClass("active");
    })
    //$(".tab-container .content").first().show();
    $(".main-tab li").first().addClass("active");
    $(".main-tab li").each(function () {
        $(this).click(function () {
            $(this).parents(".mem-tab").find(".main-tab li").removeClass("active");
            $(this).addClass("active");
            $(this).parents(".mem-tab").find(".tab-container .content").hide();
            $(this).parents(".mem-tab").find(".tab-container .content").eq($(this).index()).show();
        })
    });
    /*Tabbing*/
    $('.academy-data .tabbing li > a,.tabbing-sec ul.link > a,.governing-commitee-sec .tabing-link > a').click(function (e) {
        var tab_id = $(this).attr('href');
        //$('ul.tabs li').removeClass('current');
        e.preventDefault();
        $('.academy-data .tabbing li > a,.tabbing-sec ul.link > a,.governing-commitee-sec .tabing-link > a').removeClass('active');

        $(this).addClass('active');
        $('.academy-data .traing-prog,.tabbing-sec .inner,.governing-commitee-sec .inner').removeClass('active');
        $('#' + tab_id).addClass('active');
    });
    $('.governing-commitee-sec #2021-2022 .tabings-link  a').click(function (e) {
        var tab_id = $(this).attr('href');
        //$('ul.tabs li').removeClass('current');
        e.preventDefault();
        $('.governing-commitee-sec #2021-2022 .tabings-link a').removeClass('active');

        $(this).addClass('active');
        $('.governing-commitee-sec #2021-2022 ul.inners').removeClass('active');
        $('#' + tab_id).addClass('active');
    });
    $('.governing-commitee-sec #2019-2021 .tabings-link a').click(function (e) {
        var tab_id = $(this).attr('href');
        //$('ul.tabs li').removeClass('current');
        e.preventDefault();
        $('.governing-commitee-sec #2019-2021 .tabings-link a').removeClass('active');

        $(this).addClass('active');
        $('.governing-commitee-sec #2019-2021 ul.inners').removeClass('active');
        $('#' + tab_id).addClass('active');
    });
    $('.academy-data li.all').click(function () {
        $('.academy-data .traing-prog').addClass('active')
    });
    /*Accrodain*/
    $('.accordion > li:first a').addClass('active').next().slideDown();

    $('.accordion a').click(function (j) {
        var dropDown = $(this).closest('li').find('.inner-box');

        $(this).closest('.accordion').find('.inner-box').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('.accordion li').removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
            $(this).parents('li').addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });

    $('#Central').click(function(){
        $('.governing-commitee-sec .Central').slideToggle();
    });
    $('#2021-2022 .loads').click(function(){
        $('.governing-commitee-sec #2021-2022 .Division').slideToggle();
    });
    $('#2017-2019 .loads').click(function(){        
        $('.governing-commitee-sec #2017-2019 .Division').slideToggle();
    });
    $('#Zonal').click(function(){
        $('.governing-commitee-sec .Zonal').slideToggle();
    });
    $('#State').click(function(){
        $('.governing-commitee-sec .State').slideToggle();
    });

    $('#Representatives').click(function(){
        $('.governing-commitee-sec .Representatives').slideToggle();
    });
    $('#Diagnostic').click(function(){
        $('.governing-commitee-sec .Diagnostic').slideToggle();
    });
    $('#Quality').click(function(){
        $('.governing-commitee-sec .Quality').slideToggle();
    });

    $(".rest ul").each(function(){
        var le = $(this).children("li").length;
        //console.log(le)
        if(le > 0)
            {                
                $(this).parents(".member-sec").find(".bottom").addClass("toggleactive");
            }
    })


    $('.toggleactive').click(function(){
        $(this).next("ul").next(".rest").slideToggle();
        $(this).toggleClass("active");
    });   
   
})



