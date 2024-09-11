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
    $('.fm-slider').owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
      
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
                items: 5,
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

    $('.tssldier').owlCarousel({
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
            },
            600: {
                items: 1,               
            },
            1100: {
                items: 1,               
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
        $(this).parents('.member-sec').children('.governing-commitee-sec  ul.inners').removeClass('active');
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
   
})






$(document).on('change', '.classification', function () {
    var catval = $(this).val();
    var amountid = $(this).data('id');
    var priceid = $(this).data('showid');
    var geturl = $(this).data('geturl');
    var request = $.ajax({
        method: 'GET',
        url: geturl,
        data: { 'catid': catval },
    });
    $("[name=classification]").val($(this).find("option:selected").text());
    request.done(function (data, textStatus, jqXHR) {
        if (data) {
            // $('#'+amountid).val(data);
            // $('#'+priceid).text(data);

            $('.anountvalue').val(data);
            $('.anounttext').text(data);
        }
    });
    request.fail(function (jqXHR, textStatus) {
        console.log(textStatus);
    });
})

$(document).on('change', '.service_profile', function () {
    $('.optionother').hide();
    var sp = $(this).val();
    var spurl = $(this).data('geturl');
    var opid = $(this).data('optionid');

    var request = $.ajax({
        method: 'GET',
        url: spurl,
        data: { spid: sp, spother: opid },
    });

    request.done(function (data, textStatus, jqXHr) {
        console.log(textStatus);
        $('#' + opid).html(data);
    });
    request.fail(function (jqXHR, textStatus) {
        console.log(textStatus);
    });
})

$(document).on('click', '#optherserviceprofile', function () {
    var opval = $(this).val();
    var oopid = $(this).data('id');
    if (!$(this).is(':checked')) {
        $('.rgpo').val('')
        $('#' + oopid).hide();
    }
    else {

        $('#' + oopid).show();

    }



});

$(document).on('click', '.gst_option', function () {
    var gstid = $(this).data('id');
    var gstval = $(this).val();
    if (gstval == 'Yes') {
        $('#' + gstid).show();
    }
    else {
        $('#' + gstid).hide();
    }

})


$(document).on('click', '.quality_implementer_val', function () {

    var opval = $(this).val();

    if (opval == 'Yes') {
        $('.quality_implementer').show();
    }
    else {
        $('.quality_implementer').hide();
        $('.quality_implementer').val('');
    }
});


$(document).on('click', '.domain_other', function () {
    $('.service_profile_other').show();


});
$(document).on('click', '.domain', function () {
    $('.service_profile_other').hide();
    $('.service_profile_other').val('');

}); 

function ajaxCall() {
    this.send = function(data, url, method, success, type) {
        type = type||'json';
        var successRes = function(data) {
            success(data);
        }

        var errorRes = function(e) {
            console.log(e);
        }
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
        });

    }

}

function locationInfo() {
    var rootUrl = "//geodata.solutions/api/api.php";
    //set default values
    var username = 'demo';
    var ordering = 'name';
    //now check for set values
    var addParams = '';
    if(jQuery("#gds_appid").length > 0) {
        addParams += '&appid=' + jQuery("#gds_appid").val();
    }
    if(jQuery("#gds_hash").length > 0) {
        addParams += '&hash=' + jQuery("#gds_hash").val();
    }

    var call = new ajaxCall();

    this.confCity = function(id) {
        var url = rootUrl+'?type=confCity&countryId='+ jQuery('#countryId').val() + '&stateId=' + jQuery('#stateId option:selected').attr('stateid') + '&cityId=' + id;
        var method = "post";
        var data = {};
        call.send(data, url, method, function(data) {
            if(data){
                //    alert(data);
            }
            else{
                //   alert('No data');
            }
        });
    };

    this.getCities = function(id) {
        jQuery(".cities option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#cityId').attr('class');
        //console.log(stateClasses);
        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getCities&countryId='+ jQuery('#countryId').val() +'&stateId=' + id + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.cities').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.cities').find("option:eq(0)").html("Select City");
            if(data.tp == 1){
                if(data.hits > 1000)
                {
                    //alert('Free usage far exceeded. Please subscribe at geodata.solutions.');
                    console.log('Daily geodata.solutions request limit exceeded:' + data.hits + ' of 1000');
                }
                else
                {
                    console.log('Daily geodata.solutions request count:' + data.hits + ' of 1000')
                }

                var listlen = Object.keys(data['result']).length;
                //console.log('number is cities is ' + listlen);
                if(listlen > 0)
                {
                    jQuery.each(data['result'], function(key, val) {

                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        jQuery('.cities').append(option);
                    });
                }
                else
                {
                    var usestate = jQuery('#stateId option:selected').val();
                    var option = jQuery('<option />');
                    option.attr('value', usestate).text(usestate);
                    option.attr('selected', 'selected');
                    jQuery('.cities').append(option);
                }

                jQuery(".cities").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getStates = function(id) {
        jQuery(".states option:gt(0)").remove();
        jQuery(".cities option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#stateId').attr('class');
        console.log(stateClasses);
        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getStates&countryId=' + id + addParams  + addClasses;
        var method = "post";
        var data = {};
        jQuery('.states').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.states').find("option:eq(0)").html("Select State");
            if(data.tp == 1){
                if(data.hits > 1000)
                {
                    //alert('Free usage far exceeded. Please subscribe at geodata.solutions.');
                    console.log('Daily geodata.solutions request limit exceeded: ' + data.hits + ' of 1000.');
                }
                else
                {
                    console.log('Daily geodata.solutions request count:' + data.hits + ' of 1000')
                }
                jQuery.each(data['result'], function(key, val) {
                    var option = jQuery('<option />');
                    option.attr('value', val).text(val);
                    option.attr('stateid', key);
                    jQuery('.states').append(option);
                });
                jQuery(".states").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };
}

jQuery(function() {
    var loc = new locationInfo();
    var coid = 'IN'
    loc.getStates(coid);
    jQuery(".states").on("change", function(ev) {
       // alert()
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".cities option:gt(0)").remove();
        }
    });
    jQuery(".cities").on("change", function(ev) {
        var cityId = jQuery("option:selected", this).val();
        if(cityId != ''){
            loc.confCity(cityId);
        }
    });
});

jQuery(function() {
    var loc = new locationInfo();
    var coid = 'IN'
    loc.getStates(coid);
    jQuery(".states1").on("change", function(ev) {
       // alert()
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".cities1 option:gt(0)").remove();
        }
    });
    jQuery(".cities1").on("change", function(ev) {
        var cityId = jQuery("option:selected", this).val();
        if(cityId != ''){
            loc.confCity(cityId);
        }
    });
});

