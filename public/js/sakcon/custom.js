jQuery(document).ready(function() {
    jQuery('.banner_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        speed: 500,
        arrows: true,
        autoplay: true,
        // responsive: [{
        //     breakpoint: 1024,
        //     settings: {
        //         slidesToShow: 3,
        //         slidesToScroll: 3,
        //         infinite: true,
        //         dots: true
        //     }
        // },
        // {
        //     breakpoint: 600,
        //     settings: {
        //         slidesToShow: 2,
        //         slidesToScroll: 2
        //     }
        // },
        // {
        //     breakpoint: 480,
        //     settings: {
        //         slidesToShow: 1,
        //         slidesToScroll: 1
        //     }
        // }
        // ]
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
    // $(".scroll_div").mCustomScrollbar();
    //fixed header
    $(window).scroll(function() {
        var sticky = $('header '),
            scroll = $(window).scrollTop();

        if (scroll >= 100) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });

    // file trigger
   $("#upfile1").click(function() {
    $("#file1").trigger('click');
});
$("#upfile2").click(function() {
    $("#file2").trigger('click');
});
$("#upfile3").click(function() {
    $("#file3").trigger('click');
});

$('#file1').change(function(e) {
  
                var geekss = e.target.files[0].name;
                 
                $(".selected_fnam").text(geekss).css({
                    'margin': '0x 0px 3px',
                    'font-size': '13px'
                });
            });
            
          
$('#file2').change(function(e) {
  
                var geekss = e.target.files[0].name;
                 
                $(".selctedpic").text(geekss).css({
                    'margin': '0x 0px 3px',
                    'font-size': '13px'
                });
            });
            
       
$('#file3').change(function(e) {
  
                var geekss = e.target.files[0].name;
                 
                $(".selectedorder").text(geekss).css({
                    'margin': '0x 0px 3px',
                    'font-size': '13px'
                });
            });
                 
              
    //   show div on select
    $("#select_domain").change(function() {
        if ($(this).val() == "other_details") {
            // alert('value 1 (wich refers to Chef) got selected');
            $('.domain_other_details').addClass('active');
        } else {
            // alert('nww')
            $('.domain_other_details').removeClass('active');
        }
    });
    
    // Popup
    
   $('#popup1').on('click', function() {
        $('#pop1').addClass('active');
    })
    $('.popInner .close').on('click', function() {
        $('#pop1').removeClass('active');
    })
    
    // Popup2
    
$('#popup2').on('click', function() {
        $('#pop2').addClass('active');
    })
    $('.popInner .close').on('click', function() {
        $('#pop2').removeClass('active');
    })
    
    // Popup3
    
    $('#popup3').on('click', function() {
        $('#pop3').addClass('active');
    })
    $('.popInner .close').on('click', function() {
        $('#pop3').removeClass('active');
    })
    
    // Popup4
    
    $('#popup4').on('click', function() {
        $('#pop4').addClass('active');
    })
    $('.popInner .close').on('click', function() {
        $('#pop4').removeClass('active');
    })

});



