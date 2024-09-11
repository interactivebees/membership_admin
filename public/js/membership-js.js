

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