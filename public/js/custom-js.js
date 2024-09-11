$(document).ready(function () {
    if ($(window).width() <= 991) {
        $('.sidebar-dashboard').addClass('side-active');
        $('.left').addClass('active');
    }
    
    $("[data-toggle=popover]").popover({
        html: true,
    	content: function() {
            return $('.hf').html();
        }
    });
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

    $('.datepicker').datepicker();

    $('#myModal').modal('show');

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
    $('.academy-data .tabbing li > a , .tabbing-sec ul.link > a , .governing-commitee-sec .tabing-link > a').on('click',function (e) {
        var tab_id = $(this).attr('href');
        //$('ul.tabs li').removeClass('current');
        e.preventDefault();
        $('.academy-data .tabbing li > a,.tabbing-sec ul.link > a , .governing-commitee-sec .tabing-link > a').removeClass('active');
        $(this).addClass('active');
        $('.academy-data .traing-prog , .tabbing-sec .inner , .governing-commitee-sec .inner').removeClass('active');
        $('#' + tab_id).addClass('active');
    });
    $('.tabings-link a').on('click',function (e) {
        var tab_id = $(this).attr('href');
        //$('ul.tabs li').removeClass('current');
        e.preventDefault();
        $(this).parents('.inner.active').find('.tabings-link a').removeClass('active');
        $(this).addClass('active');
        $(this).parents('.member-sec').children('.governing-commitee-sec .health.inenrs').removeClass('active');
        $(this).parents('.member-sec').children('#' + tab_id).addClass('active');
    });
    /*$('.governing-commitee-sec #2019-2021 .tabings-link a').click(function (e) {
        var tab_id = $(this).attr('href');
        //$('ul.tabs li').removeClass('current');
        e.preventDefault();
        $('.governing-commitee-sec #2019-2021 .tabings-link a').removeClass('active');

        $(this).addClass('active');
        $('.governing-commitee-sec #2019-2021 ul.inners').removeClass('active');
        $('#' + tab_id).addClass('active');
    });*/


      $(".acrdata li").each(function(){
          $(this).addClass('hidden');
          $(this).parent(".acrdata").children('li').slice(0, 3).removeClass('hidden').addClass('show');

      })

      $(document).on("click" , "h4.readmore" , function(){
        $(this).prev(".acrdata").children('li').removeClass('hidden').addClass('show');
        $(this).hide()
      })

    $('.academy-data li.all').click(function () {
        $('.academy-data .traing-prog').addClass('active')
    });
    /*Accrodain*/
    $('.accordion > li:first a').addClass('active').next().slideDown();

    $(document).delegate(".accordion a","click",function (j) {
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
    $('.load-more').click(function(){
        $(this).prev('.governing-commitee-sec .Division').slideToggle();
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
    $('.faq-accrd h3').click(function(){
        $(this).next(".text").slideToggle();
        $(this).parents("li").toggleClass("active");
    });


 $('.toggle-collapse').click(function(){
    $('.left').toggleClass('active');
    $('.sidebar-dashboard').toggleClass('side-active');
 })

    $(".fancybox").fancybox();

    

    var tf = false;
    $(document).on("click" , ".btn" , function(){
        tf = !tf;
        console.log(tf);
        //tf ? $(".testimonslid").show() : $(".testimonslid").hide();
    })

    // $(document).on("keypress" , ".checkinput" , function(e){
    //     console.log(e.keyPress)
    // })

    // var add = (a) => {
    //     return add = (b) => {
    //        //return a+b
    //        if(b) return add(a+a)
    //        //
    //     }
    // }

    // console.log(add(4)(5)(7))
   $('.upload-file input').change(function(){
       let uploadVal = $(this).val();
       console.log(uploadVal);
       $('.upload-btn').text(uploadVal);
   });
//    $('.cancel').click(function(){
//     $('.fancybox-container').hide();
//    });
//   var textWritter = $('.list ul li');
//   $('.typeed').typeIt({
//       typeSpeed: 100,
//       nextStringDelay: 750
//   });
    $('.js-example-basic-single').select2();
    $('.js-example-basic-city').select2();
     $('.js-example-basic-town').select2();

     $(window).on("resize");
})
// ClassicEditor
//     .create( document.querySelector( '#editor' ) )
//     .catch( error => {
//         console.error( error );
//     } );



