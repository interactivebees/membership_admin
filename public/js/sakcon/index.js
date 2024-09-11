$(document).on('click', '#cahotech_submit', function() {

    $("#cahoconform").validate({
        rules: {
            registration_fee_category: "required",
            membershipstatus: "required",
            total_no_attendees: "required",
            contact_title: "required",
            contact_first_name: "required",
            contact_last_name: "required",
            contact_designation: "required",
            billing_email: {
                required: true,
            },
            billing_mobile: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10,
            },
            conference_name: "required",
            banquet_name: "required",
            accommodation_name: "required",
            "nametitle[]": "required",
            "first_name[]": "required",
            "last_name[]": "required",
            "email[]": {
                required: true,
            },
            "mobile[]": {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10,
            },
            "domain[]": "required",
            "designation[]": "required",
            "organisation[]": "required",
            "country[]": "required",
            "state[]": "required",
            "city[]": "required",
            "workshop[]": "required",
            billing_name: "required",
            billing_address: "required",
            billing_pan: {
                required: true,
                minlength: 10,
                maxlength: 10,
            },
            gstinapp: "required",
            gstinno: {
                required: true,
                minlength: 15,
                maxlength: 15,
            },
            currency: "required",
            amount: "required",
            totaldiscountamount: "required",
        },
        messages: {
            registration_fee_category: "Please select your category.",
            membershipstatus: "Please select membership no.",
            total_no_attendees: "Please select no of delegate",
            contact_title: "Please select contact title",
            contact_first_name: "Please select contact title",
            contact_last_name: "Please select contact title",
            contact_designation: "Please select contact title",
            billing_email: {
                required: "Please enter a valid email address",
            },
            billing_mobile: {
                required: "Please enter a mobile number",
            },
            conference_name: "Please select conference name",
            banquet_name: "Please select banquet",
            accommodation_name: "Please select accommodation",
            nametitle: "Please select nametitle",
            first_name: "Please enter a first name",
            last_name: "Please enter a last name",
            email: {
                required: "Please enter a valid email address",
            },
            mobile: {
                required: "Please enter a mobile number",
            },
            domain: "Please select domain",
            designation: "Please enter a designation",
            organisation: "Please enter a organisation",
            country: "Please select country",
            state: "Please enter a state",
            city: "Please enter a city",
            workshop: "Please enter a workshop",
            billing_name: "Please enter a billing name",
            billing_address: "Please enter a billing address",
            billing_pan: {
                required: "Please enter a billing PAN",
                minlength: "Enter only 10 digit.",
                maxlength: "Enter only 10 digit."
            },
            gstinapp: "Please enter a gstin app",
            gstinno: {
                required: "Please enter a gstin no",
                minlength: "Enter only 15 digit.",
                maxlength: "Enter only 15 digit."
            },
            currency: "Please select currency",
            amount: "Please enter a amount",
            totaldiscountamount: "Please enter a discount amount",

        },

        submitHandler: function(form) {
            return true;
        }

    });


});

$(document).ready(function() {

    $("#cahoconform").validate({
        rules: {
            registration_fee_category: "required",
            membershipstatus: "required",
            total_no_attendees: "required",
            contact_title: "required",
            contact_first_name: "required",
            contact_last_name: "required",
            contact_designation: "required",
            billing_email: {
                required: true,
            },
            billing_mobile: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10,
            },
            conference_name: "required",
            banquet_name: "required",
            accommodation_name: "required",
            "nametitle[]": "required",
            "first_name[]": "required",
            "last_name[]": "required",
            "email[]": {
                required: true,
            },
            "mobile[]": {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10,
            },
            "domain[]": "required",
            "designation[]": "required",
            "organisation[]": "required",
            "country[]": "required",
            "state[]": "required",
            "city[]": "required",
            "workshop[]": "required",
            billing_name: "required",
            billing_address: "required",
            billing_pan: {
                required: true,
                minlength: 10,
                maxlength: 10,
            },
            gstinapp: "required",
            gstinno: {
                required: true,
                minlength: 15,
                maxlength: 15,
            },
            currency: "required",
            amount: "required",
            totaldiscountamount: "required",
        },
        messages: {
            registration_fee_category: "Please select your category.",
            membershipstatus: "Please select membership no.",
            total_no_attendees: "Please select no of delegate",
            contact_title: "Please select contact title",
            contact_first_name: "Please select contact title",
            contact_last_name: "Please select contact title",
            contact_designation: "Please select contact title",
            billing_email: {
                required: "Please enter a valid email address",
            },
            billing_mobile: {
                required: "Please enter a mobile number",
            },
            conference_name: "Please select conference name",
            banquet_name: "Please select banquet",
            accommodation_name: "Please select accommodation",
            nametitle: "Please select nametitle",
            first_name: "Please enter a first name",
            last_name: "Please enter a last name",
            email: {
                required: "Please enter a valid email address",
            },
            mobile: {
                required: "Please enter a mobile number",
            },
            domain: "Please select domain",
            designation: "Please enter a designation",
            organisation: "Please enter a organisation",
            country: "Please select country",
            state: "Please enter a state",
            city: "Please enter a city",
            workshop: "Please enter a workshop",
            billing_name: "Please enter a billing name",
            billing_address: "Please enter a billing address",
            billing_pan: {
                required: "Please enter a billing PAN",
                minlength: "Enter only 10 digit.",
                maxlength: "Enter only 10 digit."
            },
            gstinapp: "Please enter a gstin app",
            gstinno: {
                required: "Please enter a gstin no",
                minlength: "Enter only 15 digit.",
                maxlength: "Enter only 15 digit."
            },
            currency: "Please select currency",
            amount: "Please enter a amount",
            totaldiscountamount: "Please enter a discount amount",

        },

        submitHandler: function(form) {
            return true;
        }

    });


});



function countrydata(country_id, i) {
    var country_id = (country_id.value);
    $.ajax({
        url: "states-by-country.php",
        type: "POST",
        data: {
            country_id: country_id
        },
        cache: false,
        success: function(result) {
            $(".state-dropdown-" + i).html(result);
            $(".city-dropdown-" + i).html('<option value="">Select State First</option>');
        }
    });
}

function statedata(state_id, i) {
    var state_id = (state_id.value);;
    $.ajax({
        url: "cities-by-state.php",
        type: "POST",
        data: {
            state_id: state_id
        },
        cache: false,
        success: function(result) {
            $(".city-dropdown-" + i).html(result);
        }
    });
}






function gstinappfunction() {
    var gstinapp = $("#gstinapp").val();
    if (gstinapp == 'Not Applicable') {
        $(".gstinadd").css('display', 'none');
        $(".gstinnoapp").css('display', 'none');
        $("#gstinno").removeAttr('required', 'required');
        $(".gstncert").css('display', 'none');
    } else {
        $(".gstinadd").css('display', 'block');
        $(".gstinnoapp").css('display', 'block');
        $("#gstinno").attr('required', true);
        $(".gstncert").css('display', 'block');
    }
}

function rgisCatgfunction() {
    $('#accommodation_type').val('').trigger('change');
    $('#accommodation_name').val('').trigger('change');
    $("#conference_name").val($("#conference_name").data("default-value"));
    $("#delegate_dynamic_field").empty();
    $('.membershipinfosuccs').css('display', 'none');
    $('.membershipinfo').css('display', 'none');
    $('#regsnoinvalid').css('display', 'none');
    var eventcatVal = $("#event-res-cat").val();
    $('#total_no_attendees').prop('selectedIndex', 0);
    $('#membershipstatus').prop('selectedIndex', 0);
    $("#discountbox").css('display', 'none');
    $('#delegate_dynamic_field_org').hide();
    $('#choosedel').css('display', 'block');
    $('#selected_price_pay').html('');
    $('#total_reg_fee').val('');
    $('#currency').val();
    $('#merchant').val();
    $('.currtxt').html('');
    $('#amount').val('');
    if (eventcatVal == 1) {
        $(".indian").css('display', 'block');
        $(".international").css('display', 'none');
        $(".pan_no").css('display', 'block');
        $(".gstinapp").css('display', 'block');
        $("#membershipdiv").css('display', 'block');

        $(".banquet").css('display', 'none');
        $('#delegate_dynamic_field1').css('display', 'block');
        $(".regular_quality_professional").css('display', 'block');
        $(".associate_quality_professional").css('display', 'block');
        $(".regular_healthcare_institution").css('display', 'block');
        $(".associate_healthcare_institution").css('display', 'block');
        $(".regular_diagnostic_institution").css('display', 'block');
        $(".associate_diagnostic_institution").css('display', 'block');
        $(".individual_affiliation").css('display', 'none');
        $(".institution_affiliation").css('display', 'none');
        // $(".conf_1").css('display', 'none');
        $(".accommodation1").css('display', 'none');
        $("#regcatgnoncaho").css('display', 'none');
        $("#submitform").removeAttr('disabled', true);
        $('#membershipstatus').attr('required');
        $('#membershipno').attr('required');
    }
    if (eventcatVal == 2) {
        $(".indian").css('display', 'block');
        $(".international").css('display', 'none');
        $(".pan_no").css('display', 'block');
        $(".gstinapp").css('display', 'block');
        $("#membershipdiv").css('display', 'none');

        $(".banquet").css('display', 'none');
        $(".regular_quality_professional").css('display', 'block');
        $(".associate_quality_professional").css('display', 'block');
        $(".regular_healthcare_institution").css('display', 'block');
        $(".associate_healthcare_institution").css('display', 'block');
        $(".regular_diagnostic_institution").css('display', 'block');
        $(".associate_diagnostic_institution").css('display', 'block');
        $(".individual_affiliation").css('display', 'none');
        $(".institution_affiliation").css('display', 'none');
        // $(".conf_1").css('display', 'none');
        $(".accommodation1").css('display', 'none');
        $("#regcatgnoncaho").css('display', 'none');
        $("#submitform").removeAttr('disabled', true);
        $('#membershipstatus').removeAttr('required');
        $('#membershipno').removeAttr('required');
    }
    if (eventcatVal == 3) {
        $(".indian").css('display', 'block');
        $(".international").css('display', 'none');
        $(".pan_no").css('display', 'block');

        $(".gstinapp").css('display', 'block');
        $("#membershipdiv").css('display', 'none');
        $(".banquet").css('display', 'none');
        $(".regular_quality_professional").css('display', 'block');
        $(".associate_quality_professional").css('display', 'block');
        $(".regular_healthcare_institution").css('display', 'block');
        $(".associate_healthcare_institution").css('display', 'block');
        $(".regular_diagnostic_institution").css('display', 'block');
        $(".associate_diagnostic_institution").css('display', 'block');
        $('#choosedel').css('display', 'block');
        // $('#choosedel').removeAttr('required');
        $(".individual_affiliation").css('display', 'none');
        $(".institution_affiliation").css('display', 'none');
        // $(".conf_1").css('display', 'none');
        $(".accommodation1").css('display', 'none');
        $("#regcatgnoncaho").css('display', 'none');
        $("#submitform").removeAttr('disabled', true);
        $('#membershipstatus').removeAttr('required');
        $('#membershipno').removeAttr('required');
    }
    if (eventcatVal == 4) {
        $(".indian").css('display', 'block');
        $(".international").css('display', 'none');
        $(".pan_no").css('display', 'none');

        $(".gstinapp").css('display', 'none');
        $("#membershipdiv").css('display', 'none');
        $(".banquet").css('display', 'block');
        $(".regular_quality_professional").css('display', 'none');
        $('#choosedel').css('display', 'block');
        // $('#choosedel').removeAttr('required');
        $(".associate_quality_professional").css('display', 'none');
        $(".regular_healthcare_institution").css('display', 'none');
        $(".associate_healthcare_institution").css('display', 'none');
        $(".regular_diagnostic_institution").css('display', 'none');
        $(".associate_diagnostic_institution").css('display', 'none');
        $(".individual_affiliation").css('display', 'block');
        $(".institution_affiliation").css('display', 'block');
        // $(".conf_1").css('display', 'none');
        $(".accommodation1").css('display', 'none');
        $("#regcatgnoncaho").css('display', 'none');
        $("#submitform").removeAttr('disabled', true);
        $('#membershipstatus').removeAttr('required');
        $('#membershipno').removeAttr('required');
    }

    if (eventcatVal == 5) {
        $(".indian").css('display', 'none');
        $(".international").css('display', 'block');
        $(".pan_no").css('display', 'none');

        $(".gstinapp").css('display', 'none');
        $("#membershipdiv").css('display', 'block');
        $(".banquet").css('display', 'none');
        $(".regular_quality_professional").css('display', 'none');
        $(".associate_quality_professional").css('display', 'none');
        $(".regular_healthcare_institution").css('display', 'none');
        $(".associate_healthcare_institution").css('display', 'none');
        $(".regular_diagnostic_institution").css('display', 'none');
        $(".associate_diagnostic_institution").css('display', 'none');
        $(".individual_affiliation").css('display', 'block');
        $(".institution_affiliation").css('display', 'block');
        // $(".conf_1").css('display', 'none');
        $(".accommodation1").css('display', 'block');
        $("#regcatgnoncaho").css('display', 'none');
        $("#submitform").removeAttr('disabled', true);
        $('#membershipstatus').attr('required');
        $('#membershipno').attr('required');
    }
    if (eventcatVal == 6) {
        $(".indian").css('display', 'none');
        $(".international").css('display', 'block');
        $(".pan_no").css('display', 'none');

        $(".gstinapp").css('display', 'none');
        $("#membershipdiv").css('display', 'none');
        $(".banquet").css('display', 'none');
        $(".regular_quality_professional").css('display', 'none');
        $(".associate_quality_professional").css('display', 'none');
        $(".regular_healthcare_institution").css('display', 'none');
        $(".associate_healthcare_institution").css('display', 'none');
        $(".regular_diagnostic_institution").css('display', 'none');
        $(".associate_diagnostic_institution").css('display', 'none');
        $(".individual_affiliation").css('display', 'block');
        $(".institution_affiliation").css('display', 'block');
        // $(".conf_1").css('display', 'none');
        $(".accommodation1").css('display', 'block');
        $("#regcatgnoncaho").css('display', 'none');
        $("#submitform").removeAttr('disabled', true);
        $('#membershipstatus').removeAttr('required');
        $('#membershipno').removeAttr('required');
    }

}

function accommodation_function() {
    var accommodation_type = $(".accommodation_type").val();



    if (accommodation_type == 'Yes') {
        $('#accommodation_name').val('').trigger('change');
        $('.accommodation_name').css('display', 'block');


    } else {
        var accomprice = 0;
        $('.accommodation_name').css('display', 'none');

        internationtotalamount(accomprice);
    }



}

function membershipcatgfunction() {
    $('#conference_name').val('').trigger('change');
    $('#accommodation_type').val('').trigger('change');
    $('#accommodation_name').val('').trigger('change');
    var totattendees = $("#total_no_attendees option:selected").val();

    if (totattendees) {
        if(totattendees>1){
            $('.referrable').html('SPOC Contact Details*');
        }else{
            $('.referrable').html('Contact Details*');
        }

        if (totattendees == '1') {

            $('#contactinfo').css('display', 'none');

            $("#contact_title").removeAttr('required', true);
            $("#contact_first_name").removeAttr('required', true);
            $("#contact_last_name").removeAttr('required', true);
            $("#contact_designation").removeAttr('required', true);
            $("#billing_email").removeAttr('required', true);
            $("#billing_mobile").removeAttr('required', true);
        } else {
            $('#contactinfo').css('display', 'block');
            $("#contact_title").attr('required', true);
            $("#contact_first_name").attr('required', true);
            $("#contact_last_name").attr('required', true);
            $("#contact_designation").attr('required', true);
            $("#billing_email").attr('required', true);
            $("#billing_mobile").attr('required', true);
        }


    }
}

function workshopfunction() {
    $("#delegate_dynamic_field").empty();
    $("#discountbox").css('display', 'none');
    $('#selected_price_pay').html('');
    $('#currency').val();
    $('#merchant').val();
    $('.currtxt').html('');
    $('#amount').val();

    var eventcatVal = $("#event-res-cat").val();
    var conferenceVal = $("#conference_name").val();


    if (eventcatVal != '') {
        //var totattendees = $("#total_no_attendees").val();
        var totattendees = $("#total_no_attendees option:selected").val();

        var i = totattendees;

        if (conferenceVal == 'Only Preconference Workshop (15th Sep, 2023)') {
            $("#work").css('display', 'block');
            if (eventcatVal == 1) {
                var membershipstatus = $("#membershipstatus").val();
                var membershipno = $("#membershipno").val();

                if (membershipno != '') {
                    //alert(membershipstatus);
                    if (membershipstatus == 'Regular Quality Professional') {
                        var data = '200';
                    }
                    if (membershipstatus == 'Regular Healthcare Institution') {
                        var data = '200';
                    }
                    if (membershipstatus == 'Regular Diagnostic Institution') {
                        var data = '200';
                    }
                    if (membershipstatus == 'Associate Healthcare Institution') {
                        var data = '200';
                    }
                    if (membershipstatus == 'Associate Quality Professional') {
                        var data = '200';
                    }
                    if (membershipstatus == 'Associate Diagnostic Institution') {
                        var data = '200';
                    }
                    var currency = 'INR';
                    var merchant = '99428';

                } else {
                    alert('Please Enter Membership No.');
                    $('#total_no_attendees').prop('selectedIndex', 0);
                    return false;
                }
            }

            if (eventcatVal == 2) {
                var data = '200';
                var currency = 'INR';
                var merchant = '99428';
            }

            if (eventcatVal == 3) {
                var data = '200';
                var currency = 'INR';
                var merchant = '99428';

            }
            if (eventcatVal == 4) {
                var data = '10';
                var currency = 'USD';
                var merchant = '99428';

            }
            if (eventcatVal == 5){
                var data = '10';
                var currency = 'USD';
                var merchant = '99428';
            }
            if (eventcatVal == 6){
                var data = '10';
                var currency = 'USD';
                var merchant = '99428';
            }


        }

        if (conferenceVal == 'Only Conference (16th Sep, 2023)') {
            $("#work").css('display', 'none');
            if (eventcatVal == 1) {

                var membershipstatus = $("#membershipstatus").val();
                var membershipno = $("#membershipno").val();

                if (membershipno != '') {
                    //alert(membershipstatus);
                    if (membershipstatus == 'Regular Quality Professional') {

                        var data = '700';

                    }
                    if (membershipstatus == 'Regular Healthcare Institution') {

                        var data = '700';

                    }
                    if (membershipstatus == 'Regular Diagnostic Institution') {

                        var data = '700';

                    }
                    if (membershipstatus == 'Associate Healthcare Institution') {

                        var data = '700';

                    }

                    if (membershipstatus == 'Associate Quality Professional') {

                        var data = '700';

                    }
                    if (membershipstatus == 'Associate Diagnostic Institution') {

                        var data = '700';

                    }
                    var currency = 'INR';
                    var merchant = '99428';

                } else {

                    alert('Please Enter Membership No.');
                    $('#total_no_attendees').prop('selectedIndex', 0);
                    return false;
                }

            }

            if (eventcatVal == 2) {
                var data = '800';
                var currency = 'INR';
                var merchant = '99428';

            }

            if (eventcatVal == 3) {
                var data = '700';
                var currency = 'INR';
                var merchant = '99428';

            }
            if (eventcatVal == 4) {
                var data = '15';
                var currency = 'USD';
                var merchant = '99428';

            }
            if (eventcatVal == 5){
                var data = '15';
                var currency = 'USD';
                var merchant = '99428';
            }
            if (eventcatVal == 6){
                var data = '15';
                var currency = 'USD';
                var merchant = '99428';
            }
        }



        if (conferenceVal == 'Both Pre Conference Workshop and Conference (15th &16th Sep, 2023)') {

            $("#work").css('display', 'block');

            if (eventcatVal == 1) {

                var membershipstatus = $("#membershipstatus").val();
                var membershipno = $("#membershipno").val();


                if (membershipno != '') {
                    //alert(membershipstatus);

                    if (membershipstatus == 'Regular Quality Professional') {

                        var data = '900';

                    }

                    if (membershipstatus == 'Regular Healthcare Institution') {

                        var data = '900';

                    }
                    if (membershipstatus == 'Regular Diagnostic Institution') {

                        var data = '900';

                    }
                    if (membershipstatus == 'Associate Quality Professional') {

                        var data = '900';

                    }
                    if (membershipstatus == 'Associate Healthcare Institution') {

                        var data = '900';

                    }
                    if (membershipstatus == 'Associate Diagnostic Institution') {

                        var data = '900';

                    }
                    var currency = 'INR';
                    var merchant = '99428';

                } else {

                    alert('Please Enter Membership No.');
                    $('#total_no_attendees').prop('selectedIndex', 0);
                    return false;
                }

            }

            if (eventcatVal == 2) {
                var data = '1000';
                var currency = 'INR';
                var merchant = '99428';

            }

            if (eventcatVal == 3) {
                var data = '900';
                var currency = 'INR';
                var merchant = '99428';

            }
            if (eventcatVal == 4) {
                var data = '20';
                var currency = 'USD';
                var merchant = '99428';

            }
            if (eventcatVal == 5){
                var data = '20';
                var currency = 'USD';
                var merchant = '99428';
            }
            if (eventcatVal == 6){
                var data = '20';
                var currency = 'USD';
                var merchant = '99428';
            }

        }


        if (totattendees) {

            if (totattendees == '1') {

                $('#contactinfo').css('display', 'none');

                $("#contact_title").removeAttr('required', true);
                $("#contact_first_name").removeAttr('required', true);
                $("#contact_last_name").removeAttr('required', true);
                $("#contact_designation").removeAttr('required', true);
                $("#billing_email").removeAttr('required', true);
                $("#billing_mobile").removeAttr('required', true);
            } else {
                $('#contactinfo').css('display', 'block');
                $("#contact_title").attr('required', true);
                $("#contact_first_name").attr('required', true);
                $("#contact_last_name").attr('required', true);
                $("#contact_designation").attr('required', true);
                $("#billing_email").attr('required', true);
                $("#billing_mobile").attr('required', true);
            }

            if (eventcatVal == 2 || eventcatVal == 5 || eventcatVal == 1 || eventcatVal == 6 || eventcatVal == 3 || eventcatVal == 4) {
                if (totattendees > 10) {
                    $("#discountbox").css('display', 'block');
                    var maindata = data * totattendees;
                    var discount = maindata * 15 / 100;
                    var totdata = maindata - discount;
                    var payble = totdata;
                }

                if (totattendees >= 5 && totattendees <= 10 ) {
                    $("#discountbox").css('display', 'block');
                    var maindata = data * totattendees;
                    var discount = maindata * 10 / 100;
                    var totdata = maindata - discount;
                    var payble = totdata;
                }

                if (totattendees <= 4) {
                    $("#discountbox").css('display', 'block');
                    var maindata = data * totattendees;
                    var discount = 0;
                    var totdata = maindata - 0;
                    var payble = totdata;
                }
            }
        }
        var idata = parseInt(payble);
        var totregfee = parseInt(maindata) ;
        $("#totaldiscountamount").val(discount);
        $("#total_reg_fee").val(totregfee);
        $('#amount').val(idata);
        $('#currency').val(currency);
        $('#merchant').val(merchant);
        $('.currtxt').html(currency);

        $('#selected_price_pay').html(data);
        var innerHtml = '';
        for (i = 1; i <= totattendees; i++) {

            if (i % 2 == 0) {
                var classw = 'd_form_right';
                var outop = '';
                var outcl = '</div>';
            } else {
                var classw = 'd_form_left';
                var outop = '<div class="flex d-form-outer">';
                var outcl = '';
            }

            if (eventcatVal == 1 || eventcatVal == 2 || eventcatVal == 3 ) {
                var countryhtml = '<select name="country[]" class="form-control form-control-lg form-control-sm countries country_id   country-dropdown-' + i + '" id="countryId" onChange="countrydata(this, ' + i + ')"><option value="101">India</option></select>';
                var statehtml = '<select name="state[]" class="form-control form-control-lg form-control-sm state_id state-dropdown state-dropdown-' + i + '" required="required" id="state_id"  onChange="statedata(this,' + i + ')"><option value="">Select State</option><option value="1">Andaman and Nicobar Islands</option><option value="2">Andhra Pradesh</option><option value="3">Arunachal Pradesh</option><option value="4">Assam</option><option value="5">Bihar</option><option value="6">Chandigarh</option><option value="7">Chhattisgarh</option><option value="8">Dadra and Nagar Haveli</option><option value="9">Daman and Diu</option><option value="10">Delhi</option><option value="11">Goa</option><option value="12">Gujarat</option><option value="13">Haryana</option><option value="14">Himachal Pradesh</option><option value="15">Jammu and Kashmir</option><option value="16">Jharkhand</option><option value="17">Karnataka</option><option value="19">Kerala</option><option value="20">Lakshadweep</option><option value="21">Madhya Pradesh</option><option value="22">Maharashtra</option><option value="23">Manipur</option><option value="24">Meghalaya</option><option value="25">Mizoram</option><option value="26">Nagaland</option><option value="29">Odisha</option><option value="31">Pondicherry</option><option value="32">Punjab</option><option value="33">Rajasthan</option><option value="34">Sikkim</option><option value="35">Tamil Nadu</option><option value="36">Telangana</option><option value="37">Tripura</option><option value="38">Uttar Pradesh</option><option value="39">Uttarakhand</option><option value="41">West Bengal</option></select>';
                var cityhtml = '<select name="city[]" class="form-control form-control-lg form-control-sm city_id city-dropdown city-dropdown-' + i + '" required="required" id="city_id"></select>';
            } else if (eventcatVal == 4 || eventcatVal == 5 || eventcatVal == 6 ) {
                var countryhtml = '<select name="country[]" class="form-control form-control-lg form-control-sm countries country_id   country-dropdown-' + i + '" id="countryId" onChange="countrydata(this, ' + i + ')"><option value="">Select Country</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua And Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas The</option><option value="17">Bahrain</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D Ivoire (Ivory Coast)</option><option value="54">Croatia (Hrvatska)</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="50">Democratic Republic Of The Congo</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">East Timor</option><option value="63">Ecuador</option><option value="64">Egypt</option><option value="65">El Salvador</option><option value="66">Equatorial Guinea</option><option value="67">Eritrea</option><option value="68">Estonia</option><option value="69">Ethiopia</option><option value="70">External Territories of Australia</option><option value="71">Falkland Islands</option><option value="72">Faroe Islands</option><option value="73">Fiji Islands</option><option value="74">Finland</option><option value="75">France</option><option value="76">French Guiana</option><option value="77">French Polynesia</option><option value="78">French Southern Territories</option><option value="79">Gabon</option><option value="80">Gambia The</option><option value="81">Georgia</option><option value="82">Germany</option><option value="83">Ghana</option><option value="84">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="91">Guernsey and Alderney</option><option value="92">Guinea</option><option value="93">Guinea-Bissau</option><option value="94">Guyana</option><option value="95">Haiti</option><option value="96">Heard and McDonald Islands</option><option value="97">Honduras</option><option value="98">Hong Kong S.A.R.</option><option value="99">Hungary</option><option value="100">Iceland</option><option value="102">Indonesia</option><option value="103">Iran</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Jamaica</option><option value="109">Japan</option><option value="110">Jersey</option><option value="111">Jordan</option><option value="112">Kazakhstan</option><option value="113">Kenya</option><option value="114">Kiribati</option><option value="115">Korea North</option><option value="116">Korea South</option><option value="117">Kuwait</option><option value="118">Kyrgyzstan</option><option value="119">Laos</option><option value="120">Latvia</option><option value="121">Lebanon</option><option value="122">Lesotho</option><option value="123">Liberia</option><option value="124">Libya</option><option value="125">Liechtenstein</option><option value="126">Lithuania</option><option value="127">Luxembourg</option><option value="128">Macau S.A.R.</option><option value="129">Macedonia</option><option value="130">Madagascar</option><option value="131">Malawi</option><option value="132">Malaysia</option><option value="134">Mali</option><option value="135">Malta</option><option value="136">Man (Isle of)</option><option value="137">Marshall Islands</option><option value="138">Martinique</option><option value="139">Mauritania</option><option value="140">Mauritius</option><option value="141">Mayotte</option><option value="142">Mexico</option><option value="143">Micronesia</option><option value="144">Moldova</option><option value="145">Monaco</option><option value="146">Mongolia</option><option value="147">Montserrat</option><option value="148">Morocco</option><option value="149">Mozambique</option><option value="150">Myanmar</option><option value="151">Namibia</option><option value="152">Nauru</option><option value="154">Netherlands Antilles</option><option value="155">Netherlands The</option><option value="156">New Caledonia</option><option value="157">New Zealand</option><option value="158">Nicaragua</option><option value="159">Niger</option><option value="160">Nigeria</option><option value="161">Niue</option><option value="162">Norfolk Island</option><option value="163">Northern Mariana Islands</option><option value="164">Norway</option><option value="165">Oman</option><option value="167">Palau</option><option value="168">Palestinian Territory Occupied</option><option value="169">Panama</option><option value="170">Papua new Guinea</option><option value="171">Paraguay</option><option value="172">Peru</option><option value="173">Philippines</option><option value="174">Pitcairn Island</option><option value="175">Poland</option><option value="176">Portugal</option><option value="177">Puerto Rico</option><option value="178">Qatar</option><option value="49">Republic Of The Congo</option><option value="179">Reunion</option><option value="180">Romania</option><option value="181">Russia</option><option value="182">Rwanda</option><option value="183">Saint Helena</option><option value="184">Saint Kitts And Nevis</option><option value="185">Saint Lucia</option><option value="186">Saint Pierre and Miquelon</option><option value="187">Saint Vincent And The Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Smaller Territories of the UK</option><option value="200">Solomon Islands</option><option value="201">Somalia</option><option value="202">South Africa</option><option value="203">South Georgia</option><option value="204">South Sudan</option><option value="205">Spain</option><option value="207">Sudan</option><option value="208">Suriname</option><option value="209">Svalbard And Jan Mayen Islands</option><option value="210">Swaziland</option><option value="211">Sweden</option><option value="212">Switzerland</option><option value="213">Syria</option><option value="214">Taiwan</option><option value="215">Tajikistan</option><option value="216">Tanzania</option><option value="217">Thailand</option><option value="218">Togo</option><option value="219">Tokelau</option><option value="220">Tonga</option><option value="221">Trinidad And Tobago</option><option value="222">Tunisia</option><option value="223">Turkey</option><option value="224">Turkmenistan</option><option value="225">Turks And Caicos Islands</option><option value="226">Tuvalu</option><option value="227">Uganda</option><option value="228">Ukraine</option><option value="229">United Arab Emirates</option><option value="230">United Kingdom</option><option value="231">United States</option><option value="232">United States Minor Outlying Islands</option><option value="233">Uruguay</option><option value="234">Uzbekistan</option><option value="235">Vanuatu</option><option value="236">Vatican City State (Holy See)</option><option value="237">Venezuela</option><option value="238">Vietnam</option><option value="239">Virgin Islands (British)</option><option value="240">Virgin Islands (US)</option><option value="241">Wallis And Futuna Islands</option><option value="242">Western Sahara</option><option value="243">Yemen</option><option value="244">Yugoslavia</option><option value="245">Zambia</option><option value="246">Zimbabwe</option></select>';
                var statehtml = '<select name="state[]" class="form-control form-control-lg form-control-sm state_id state-dropdown state-dropdown-' + i + '" required="required" id="state_id"  onChange="statedata(this,' + i + ')"></select>';
                var cityhtml = '<select name="city[]" class="form-control form-control-lg form-control-sm city_id city-dropdown city-dropdown-' + i + '" required="required" id="city_id"></select>';
            }
            innerHtml += '' + outop + '<div class="' + classw + '"><h3>Delegate ' + i + '</h3><div class="d_form"><div class="form-group"><label>Title<span>*</span></label><select name="nametitle[]" class="form-control form-control-lg form-control-sm" required="required" id="nametitle"><option value="Mr"  >Mr.</option><option value="Ms">Ms.</option><option value="Dr" >Dr.</option><option value="Mrs">Mrs.</option><option value="Prof" >Prof.</option></select></div><div class="form-group"><label>First Name<span>*</span></label><input name="first_name[]" class="form-control form-control-lg form-control-sm first_name" required="required" id="first_name"  type="text" class="first_name"></div><div class="form-group"><label>Last Name<span>*</span></label><input name="last_name[]" required="required"  class="form-control form-control-lg form-control-sm last_name" id="last_name" class="last_name" type="text"></div><div class="form-group"><label>Mobile <span>*</span></label><input name="mobile[]" class="form-control form-control-lg form-control-sm mobile" required="required" id="mobile"  type="tel"  maxlength="15" minlength="10" ></div><div class="form-group"><label>Email<span>*</span></label><input name="email[]" required="required" class="form-control form-control-lg form-control-sm email" id="email"  type="email"></div><div class="form-group"><label>Domain<span>*</span></label><select name="domain[]" class="form-control form-control-lg form-control-sm" required><option value="Doctor">Doctor</option><option value="Nurse">Nurse</option><option value="Administrator">Administrator</option><option value="Pathologist">Pathologist</option><option value="Microbiologist">Microbiologist</option><option value="Biochemist">Biochemist</option><option value="Geneticist">Geneticist</option><option value="Microbiologist">Microbiologist</option><option value="Lab Technician">Lab Technician</option><option value="Clinical Research Personnel">Clinical Research Personnel</option><option value="Allied Services">Allied Services</option><option value="Student">Student</option><option value="Others">Others</option></select></div><div class="form-group"><label>Designation<span></span></label><input name="designation[]"  id="designation" class="form-control form-control-lg form-control-sm"  type="text"></div><div class="form-group"><label>Organisation<span>*</span></label><input name="organisation[]" required class="form-control form-control-lg form-control-sm organisation" id="organisation"  type="text"></div><div class="form-group"><label>Country<span></span></label>' + countryhtml + '</div><div class="form-group"><label>State </label>' + statehtml + '</div><div class="form-group"><label>City</label>' + cityhtml + '</div></div><div class="form-group workshop" style="display:block;" id="work" ><label>Select Workshop <span>*</span></label><select name="workshop[]" class="form-control form-control-lg form-control-sm" id="workshop"><option value="">--Select--</option><option value="Financial Operations in a Hospital (IIHMR Bangalore)">Financial Operations in a Hospital (IIHMR Bangalore)</option><option value="Clinical Efficiency & Excellence (MSRMH, Bangalore)">Clinical Efficiency & Excellence (MSRMH, Bangalore)</option><option value="Digital Systems for Facility Management in Hospitals (St. John\'s Medical College, Bangalore)">Digital Systems for Facility Management in Hospitals (St. John\'s Medical College, Bangalore)</option></select></div></div>' + outcl + '';
        }

        $('#delegate_dynamic_field').append(innerHtml);

        if (conferenceVal == 'Only Preconference Workshop (15th Sep, 2023)'){
            $("#work").css('display', 'block');

        }else if (conferenceVal == 'Only Conference (16th Sep, 2023)'){
            $("#work").css('display', 'none');

        }else if (conferenceVal == 'Both Pre Conference Workshop and Conference (15th &16th Sep, 2023)'){
            $("#work").css('display', 'block');
        }
    } else {
        alert('Please select Required Field!!!');
        return false;
    }

}



function membershipfunction() {
    $("#conference_name").val($("#conference_name").data("default-value"));
    $('.membershipinfo').html(' ');

    var membershipstatus = $("#membershipstatus").val();
    var membershipno = $("#membershipno").val();

    $('#delegate_dynamic_field').empty();
    if (membershipstatus == 'Regular Healthcare Institution' || membershipstatus == 'Associate Healthcare Institution' || membershipstatus == 'Regular Diagnostic Institution' || membershipstatus == 'Associate Diagnostic Institution' ||  membershipstatus == 'International Institution Affiliation') {
        $('#choosedel').css('display', 'block');
        var eventcatVal = $("#event-res-cat").val();
        var conferenceVal = $("#conference_name").val();

        if (conferenceVal == 'Only Pre-Conference (12th August 2022)') {

            $('#work').css('display','block');

            if (eventcatVal == 1) {

                var membershipstatus = $("#membershipstatus").val();
                var membershipno = $("#membershipno").val();

                if (membershipno != '') {
                    //alert(membershipstatus);
                    if (membershipstatus == 'Regular Quality Professional') {

                        var data = '400';

                    }
                    if (membershipstatus == 'Regular Healthcare Institution') {

                        var data = '400';

                    }
                    if (membershipstatus == 'Regular Diagnostic Institution') {

                        var data = '400';

                    }
                    if (membershipstatus == 'Associate Healthcare Institution') {

                        var data = '400';

                    }

                    if (membershipstatus == 'Associate Quality Professional') {

                        var data = '400';

                    }
                    if (membershipstatus == 'Associate Diagnostic Institution') {

                        var data = '400';

                    }
                    var currency = 'INR';
                    var merchant = '99428';

                } else {

                    alert('Please Enter Membership No.');
                    $('#total_no_attendees')
                    Editing.prop('selectedIndex', 0);
                    return false;
                }

            }

            if (eventcatVal == 2) {
                var data = '600';
                var currency = 'INR';
                var merchant = '99428';

            }

            if (eventcatVal == 3) {
                var data = '250';
                var currency = 'INR';
                var merchant = '99428';

            }
            if (eventcatVal == 4) {
                var data = '5';
                var currency = 'USD';
                var merchant = '99428';

            }
            if (eventcatVal == 5){
                var data = '10';
                var currency = 'USD';
                var merchant = '99428';
            }
            if (eventcatVal == 6){
                var data = '15';
                var currency = 'USD';
                var merchant = '99428';
            }


        }

        if (conferenceVal == 'Only Conference (13th August 2022)') {
            $('#work').css('display','none');

            if (eventcatVal == 1) {

                var membershipstatus = $("#membershipstatus").val();
                var membershipno = $("#membershipno").val();

                if (membershipno != '') {
                    //alert(membershipstatus);
                    if (membershipstatus == 'Regular Quality Professional') {

                        var data = '600';

                    }
                    if (membershipstatus == 'Regular Healthcare Institution') {

                        var data = '600';

                    }
                    if (membershipstatus == 'Regular Diagnostic Institution') {

                        var data = '600';

                    }
                    if (membershipstatus == 'Associate Healthcare Institution') {

                        var data = '600';

                    }

                    if (membershipstatus == 'Associate Quality Professional') {

                        var data = '600';

                    }
                    if (membershipstatus == 'Associate Diagnostic Institution') {

                        var data = '600';

                    }
                    var currency = 'INR';
                    var merchant = '99428';

                } else {

                    alert('Please Enter Membership No.');
                    $('#total_no_attendees').prop('selectedIndex', 0);
                    return false;
                }

            }

            if (eventcatVal == 2) {
                var data = '800';
                var currency = 'INR';
                var merchant = '99428';

            }

            if (eventcatVal == 3) {
                var data = '500';
                var currency = 'INR';
                var merchant = '99428';

            }
            if (eventcatVal == 4) {
                var data = '10';
                var currency = 'USD';
                var merchant = '99428';

            }
            if (eventcatVal == 5){
                var data = '15';
                var currency = 'USD';
                var merchant = '99428';
            }
            if (eventcatVal == 6){
                var data = '20';
                var currency = 'USD';
                var merchant = '99428';
            }
        }



        if (conferenceVal == 'Both Conference & Pre Conference (12th & 13th August 2022)') {

            $('#work').css('display','block');
            if (eventcatVal == 1) {

                var membershipstatus = $("#membershipstatus").val();
                var membershipno = $("#membershipno").val();


                if (membershipno != '') {
                    //alert(membershipstatus);

                    if (membershipstatus == 'Regular Quality Professional') {

                        var data = '1000';

                    }

                    if (membershipstatus == 'Regular Healthcare Institution') {

                        var data = '1000';

                    }
                    if (membershipstatus == 'Regular Diagnostic Institution') {

                        var data = '1000';

                    }
                    if (membershipstatus == 'Associate Quality Professional') {

                        var data = '1000';

                    }
                    if (membershipstatus == 'Associate Healthcare Institution') {

                        var data = '1000';

                    }
                    if (membershipstatus == 'Associate Diagnostic Institution') {

                        var data = '1000';

                    }
                    var currency = 'INR';
                    var merchant = '99428';

                } else {

                    alert('Please Enter Membership No.');
                    $('#total_no_attendees').prop('selectedIndex', 0);
                    return false;
                }

            }

            if (eventcatVal == 2) {
                var data = '1300';
                var currency = 'INR';
                var merchant = '99428';

            }

            if (eventcatVal == 3) {
                var data = '700';
                var currency = 'INR';
                var merchant = '99428';

            }
            if (eventcatVal == 4) {
                var data = '15';
                var currency = 'USD';
                var merchant = '99428';

            }
            if (eventcatVal == 5){
                var data = '20';
                var currency = 'USD';
                var merchant = '99428';
            }
            if (eventcatVal == 6){
                var data = '25';
                var currency = 'USD';
                var merchant = '99428';
            }

        }

    } else if (membershipstatus == 'Regular Quality Professional' || membershipstatus == 'Associate Quality Professional' || membershipstatus == 'International Individual Affiliation') {
        $('#choosedel').css('display', 'none');
        $('#delegate_dynamic_field_org').show();
        $('#delegate_dynamic_field').css('display', 'block');
        $('#contactinfo').css('display', 'none');
        $("#contact_title").removeAttr('required', true);
        $("#contact_first_name").removeAttr('required', true);
        $("#contact_last_name").removeAttr('required', true);
        $("#contact_designation").removeAttr('required', true);
        $("#billing_email").removeAttr('required', true);
        $("#billing_mobile").removeAttr('required', true);
        $("#total_no_attendees").removeAttr('required', true);
        var eventcatVal = $("#event-res-cat").val();
        var conferenceVal = $("#conference_name").val();

        if (conferenceVal == 'Only Pre-Conference (12th August 2022)') {

            $('#work').css('display','block');

            if (eventcatVal == 1) {

                var membershipstatus = $("#membershipstatus").val();
                var membershipno = $("#membershipno").val();

                if (membershipno != '') {
                    //alert(membershipstatus);
                    if (membershipstatus == 'Regular Quality Professional') {

                        var data = '400';

                    }
                    if (membershipstatus == 'Regular Healthcare Institution') {

                        var data = '400';

                    }
                    if (membershipstatus == 'Regular Diagnostic Institution') {

                        var data = '400';

                    }
                    if (membershipstatus == 'Associate Healthcare Institution') {

                        var data = '400';

                    }

                    if (membershipstatus == 'Associate Quality Professional') {

                        var data = '400';

                    }
                    if (membershipstatus == 'Associate Diagnostic Institution') {

                        var data = '400';

                    }
                    var currency = 'INR';
                    var merchant = '99428';

                } else {

                    alert('Please Enter Membership No.');
                    $('#total_no_attendees').prop('selectedIndex', 0);
                    return false;
                }

            }

            if (eventcatVal == 2) {
                var data = '600';
                var currency = 'INR';
                var merchant = '99428';

            }

            if (eventcatVal == 3) {
                var data = '250';
                var currency = 'INR';
                var merchant = '99428';

            }
            if (eventcatVal == 4) {
                var data = '5';
                var currency = 'USD';
                var merchant = '99428';

            }
            if (eventcatVal == 5){
                var data = '10';
                var currency = 'USD';
                var merchant = '99428';
            }
            if (eventcatVal == 6){
                var data = '15';
                var currency = 'USD';
                var merchant = '99428';
            }


        }

        if (conferenceVal == 'Only Conference (13th August 2022)') {

            $('#work').css('display','none');

            if (eventcatVal == 1) {

                var membershipstatus = $("#membershipstatus").val();
                var membershipno = $("#membershipno").val();

                if (membershipno != '') {
                    //alert(membershipstatus);
                    if (membershipstatus == 'Regular Quality Professional') {

                        var data = '600';

                    }
                    if (membershipstatus == 'Regular Healthcare Institution') {

                        var data = '600';

                    }
                    if (membershipstatus == 'Regular Diagnostic Institution') {

                        var data = '600';

                    }
                    if (membershipstatus == 'Associate Healthcare Institution') {

                        var data = '600';

                    }

                    if (membershipstatus == 'Associate Quality Professional') {

                        var data = '600';

                    }
                    if (membershipstatus == 'Associate Diagnostic Institution') {

                        var data = '600';

                    }
                    var currency = 'INR';
                    var merchant = '99428';

                } else {

                    alert('Please Enter Membership No.');
                    $('#total_no_attendees').prop('selectedIndex', 0);
                    return false;
                }

            }

            if (eventcatVal == 2) {
                var data = '800';
                var currency = 'INR';
                var merchant = '99428';

            }

            if (eventcatVal == 3) {
                var data = '500';
                var currency = 'INR';
                var merchant = '99428';

            }
            if (eventcatVal == 4) {
                var data = '10';
                var currency = 'USD';
                var merchant = '99428';

            }
            if (eventcatVal == 5){
                var data = '15';
                var currency = 'USD';
                var merchant = '99428';
            }
            if (eventcatVal == 6){
                var data = '20';
                var currency = 'USD';
                var merchant = '99428';
            }
        }



        if (conferenceVal == 'Both Conference & Pre Conference (12th & 13th August 2022)') {
            $('#work').css('display','block');
            if (eventcatVal == 1) {

                var membershipstatus = $("#membershipstatus").val();
                var membershipno = $("#membershipno").val();


                if (membershipno != '') {
                    //alert(membershipstatus);

                    if (membershipstatus == 'Regular Quality Professional') {

                        var data = '1000';

                    }

                    if (membershipstatus == 'Regular Healthcare Institution') {

                        var data = '1000';

                    }
                    if (membershipstatus == 'Regular Diagnostic Institution') {

                        var data = '1000';

                    }
                    if (membershipstatus == 'Associate Quality Professional') {

                        var data = '1000';

                    }
                    if (membershipstatus == 'Associate Healthcare Institution') {

                        var data = '1000';

                    }
                    if (membershipstatus == 'Associate Diagnostic Institution') {

                        var data = '1000';

                    }
                    var currency = 'INR';
                    var merchant = '99428';

                } else {

                    alert('Please Enter Membership No.');
                    $('#total_no_attendees').prop('selectedIndex', 0);
                    return false;
                }

            }

            if (eventcatVal == 2) {
                var data = '1300';
                var currency = 'INR';
                var merchant = '99428';

            }

            if (eventcatVal == 3) {
                var data = '700';
                var currency = 'INR';
                var merchant = '99428';

            }
            if (eventcatVal == 4) {
                var data = '15';
                var currency = 'USD';
                var merchant = '99428';

            }
            if (eventcatVal == 5){
                var data = '20';
                var currency = 'USD';
                var merchant = '99428';
            }
            if (eventcatVal == 6){
                var data = '25';
                var currency = 'USD';
                var merchant = '99428';
            }

        }
        var discount = 0;
        var totdata = data;
        var payble = totdata - discount;

        var idata = parseInt(payble);
        var totregfee = parseInt(totdata);
        $("#totaldiscountamount").val(discount);
        $("#total_reg_fee").val(totregfee);
        $('#amount').val(idata);
        $('#currency').val(currency);
        $('#merchant').val(merchant);
        $('.currtxt').html(currency);

        $('#selected_price_pay').html(data);

        var i = 1;
        var innerHtml = '';
        var outop = '<div class="flex d-form-outer">';
        var classw = 'd_form_left';
        var outcl = '</div>';

        if (eventcatVal == 1 || eventcatVal == 2 || eventcatVal == 3 ) {
            var countryhtml = '<select name="country[]" class="form-control form-control-lg form-control-sm countries country_id   country-dropdown-' + i + '" id="countryId" onChange="countrydata(this, ' + i + ')"><option value="101">India</option></select>';
            var statehtml = '<select name="state[]" class="form-control form-control-lg form-control-sm state_id state-dropdown state-dropdown-' + i + '" required="required" id="state_id"  onChange="statedata(this,' + i + ')"><option value="">Select State</option><option value="1">Andaman and Nicobar Islands</option><option value="2">Andhra Pradesh</option><option value="3">Arunachal Pradesh</option><option value="4">Assam</option><option value="5">Bihar</option><option value="6">Chandigarh</option><option value="7">Chhattisgarh</option><option value="8">Dadra and Nagar Haveli</option><option value="9">Daman and Diu</option><option value="10">Delhi</option><option value="11">Goa</option><option value="12">Gujarat</option><option value="13">Haryana</option><option value="14">Himachal Pradesh</option><option value="15">Jammu and Kashmir</option><option value="16">Jharkhand</option><option value="17">Karnataka</option><option value="19">Kerala</option><option value="20">Lakshadweep</option><option value="21">Madhya Pradesh</option><option value="22">Maharashtra</option><option value="23">Manipur</option><option value="24">Meghalaya</option><option value="25">Mizoram</option><option value="26">Nagaland</option><option value="29">Odisha</option><option value="31">Pondicherry</option><option value="32">Punjab</option><option value="33">Rajasthan</option><option value="34">Sikkim</option><option value="35">Tamil Nadu</option><option value="36">Telangana</option><option value="37">Tripura</option><option value="38">Uttar Pradesh</option><option value="39">Uttarakhand</option><option value="41">West Bengal</option></select>';
            var cityhtml = '<select name="city[]" class="form-control form-control-lg form-control-sm city_id city-dropdown city-dropdown-' + i + '" required="required" id="city_id"></select>';
        } else if (eventcatVal == 4 || eventcatVal == 5 || eventcatVal == 6 ) {
            var countryhtml = '<select name="country[]" class="form-control form-control-lg form-control-sm countries country_id   country-dropdown-' + i + '" id="countryId" onChange="countrydata(this, ' + i + ')"><option value="">Select Country</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua And Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas The</option><option value="17">Bahrain</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D Ivoire (Ivory Coast)</option><option value="54">Croatia (Hrvatska)</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="50">Democratic Republic Of The Congo</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">East Timor</option><option value="63">Ecuador</option><option value="64">Egypt</option><option value="65">El Salvador</option><option value="66">Equatorial Guinea</option><option value="67">Eritrea</option><option value="68">Estonia</option><option value="69">Ethiopia</option><option value="70">External Territories of Australia</option><option value="71">Falkland Islands</option><option value="72">Faroe Islands</option><option value="73">Fiji Islands</option><option value="74">Finland</option><option value="75">France</option><option value="76">French Guiana</option><option value="77">French Polynesia</option><option value="78">French Southern Territories</option><option value="79">Gabon</option><option value="80">Gambia The</option><option value="81">Georgia</option><option value="82">Germany</option><option value="83">Ghana</option><option value="84">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="91">Guernsey and Alderney</option><option value="92">Guinea</option><option value="93">Guinea-Bissau</option><option value="94">Guyana</option><option value="95">Haiti</option><option value="96">Heard and McDonald Islands</option><option value="97">Honduras</option><option value="98">Hong Kong S.A.R.</option><option value="99">Hungary</option><option value="100">Iceland</option><option value="102">Indonesia</option><option value="103">Iran</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Jamaica</option><option value="109">Japan</option><option value="110">Jersey</option><option value="111">Jordan</option><option value="112">Kazakhstan</option><option value="113">Kenya</option><option value="114">Kiribati</option><option value="115">Korea North</option><option value="116">Korea South</option><option value="117">Kuwait</option><option value="118">Kyrgyzstan</option><option value="119">Laos</option><option value="120">Latvia</option><option value="121">Lebanon</option><option value="122">Lesotho</option><option value="123">Liberia</option><option value="124">Libya</option><option value="125">Liechtenstein</option><option value="126">Lithuania</option><option value="127">Luxembourg</option><option value="128">Macau S.A.R.</option><option value="129">Macedonia</option><option value="130">Madagascar</option><option value="131">Malawi</option><option value="132">Malaysia</option><option value="134">Mali</option><option value="135">Malta</option><option value="136">Man (Isle of)</option><option value="137">Marshall Islands</option><option value="138">Martinique</option><option value="139">Mauritania</option><option value="140">Mauritius</option><option value="141">Mayotte</option><option value="142">Mexico</option><option value="143">Micronesia</option><option value="144">Moldova</option><option value="145">Monaco</option><option value="146">Mongolia</option><option value="147">Montserrat</option><option value="148">Morocco</option><option value="149">Mozambique</option><option value="150">Myanmar</option><option value="151">Namibia</option><option value="152">Nauru</option><option value="154">Netherlands Antilles</option><option value="155">Netherlands The</option><option value="156">New Caledonia</option><option value="157">New Zealand</option><option value="158">Nicaragua</option><option value="159">Niger</option><option value="160">Nigeria</option><option value="161">Niue</option><option value="162">Norfolk Island</option><option value="163">Northern Mariana Islands</option><option value="164">Norway</option><option value="165">Oman</option><option value="167">Palau</option><option value="168">Palestinian Territory Occupied</option><option value="169">Panama</option><option value="170">Papua new Guinea</option><option value="171">Paraguay</option><option value="172">Peru</option><option value="173">Philippines</option><option value="174">Pitcairn Island</option><option value="175">Poland</option><option value="176">Portugal</option><option value="177">Puerto Rico</option><option value="178">Qatar</option><option value="49">Republic Of The Congo</option><option value="179">Reunion</option><option value="180">Romania</option><option value="181">Russia</option><option value="182">Rwanda</option><option value="183">Saint Helena</option><option value="184">Saint Kitts And Nevis</option><option value="185">Saint Lucia</option><option value="186">Saint Pierre and Miquelon</option><option value="187">Saint Vincent And The Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Smaller Territories of the UK</option><option value="200">Solomon Islands</option><option value="201">Somalia</option><option value="202">South Africa</option><option value="203">South Georgia</option><option value="204">South Sudan</option><option value="205">Spain</option><option value="207">Sudan</option><option value="208">Suriname</option><option value="209">Svalbard And Jan Mayen Islands</option><option value="210">Swaziland</option><option value="211">Sweden</option><option value="212">Switzerland</option><option value="213">Syria</option><option value="214">Taiwan</option><option value="215">Tajikistan</option><option value="216">Tanzania</option><option value="217">Thailand</option><option value="218">Togo</option><option value="219">Tokelau</option><option value="220">Tonga</option><option value="221">Trinidad And Tobago</option><option value="222">Tunisia</option><option value="223">Turkey</option><option value="224">Turkmenistan</option><option value="225">Turks And Caicos Islands</option><option value="226">Tuvalu</option><option value="227">Uganda</option><option value="228">Ukraine</option><option value="229">United Arab Emirates</option><option value="230">United Kingdom</option><option value="231">United States</option><option value="232">United States Minor Outlying Islands</option><option value="233">Uruguay</option><option value="234">Uzbekistan</option><option value="235">Vanuatu</option><option value="236">Vatican City State (Holy See)</option><option value="237">Venezuela</option><option value="238">Vietnam</option><option value="239">Virgin Islands (British)</option><option value="240">Virgin Islands (US)</option><option value="241">Wallis And Futuna Islands</option><option value="242">Western Sahara</option><option value="243">Yemen</option><option value="244">Yugoslavia</option><option value="245">Zambia</option><option value="246">Zimbabwe</option></select>';
            var statehtml = '<select name="state[]" class="form-control form-control-lg form-control-sm state_id state-dropdown state-dropdown-' + i + '" required="required" id="state_id"  onChange="statedata(this,' + i + ')"></select>';
            var cityhtml = '<select name="city[]" class="form-control form-control-lg form-control-sm city_id city-dropdown city-dropdown-' + i + '" required="required" id="city_id"></select>';
        }
        innerHtml += '' + outop + '<div class="' + classw + '"><h3>Delegate ' + i + '</h3><div class="d_form"><div class="form-group"><label>Title<span>*</span></label><select name="nametitle[]" class="form-control form-control-lg form-control-sm" required="required" id="nametitle"><option value="Mr"  >Mr.</option><option value="Ms">Ms.</option><option value="Dr" >Dr.</option><option value="Mrs">Mrs.</option><option value="Prof" >Prof.</option></select></div><div class="form-group"><label>First Name<span>*</span></label><input name="first_name[]" class="form-control form-control-lg form-control-sm first_name" required="required" id="first_name"  type="text" class="first_name"></div><div class="form-group"><label>Last Name<span>*</span></label><input name="last_name[]" required="required"  class="form-control form-control-lg form-control-sm last_name" id="last_name" class="last_name" type="text"></div><div class="form-group"><label>Mobile <span>*</span></label><input name="mobile[]" class="form-control form-control-lg form-control-sm mobile" required="required" id="mobile"  type="tel"  maxlength="15" minlength="10" ></div><div class="form-group"><label>Email<span>*</span></label><input name="email[]" required="required" class="form-control form-control-lg form-control-sm email" id="email"  type="email"></div><div class="form-group"><label>Domain<span>*</span></label><select name="domain[]" class="form-control form-control-lg form-control-sm" required><option value="Doctor">Doctor</option><option value="Nurse">Nurse</option><option value="Administrator">Administrator</option><option value="Pathologist">Pathologist</option><option value="Microbiologist">Microbiologist</option><option value="Biochemist">Biochemist</option><option value="Geneticist">Geneticist</option><option value="Microbiologist">Microbiologist</option><option value="Lab Technician">Lab Technician</option><option value="Clinical Research Personnel">Clinical Research Personnel</option><option value="Allied Services">Allied Services</option><option value="Student">Student</option><option value="Others">Others</option></select></div><div class="form-group"><label>Designation<span></span></label><input name="designation[]"  id="designation" class="form-control form-control-lg form-control-sm"  type="text"></div><div class="form-group"><label>Organisation<span>*</span></label><input name="organisation[]" required class="form-control form-control-lg form-control-sm organisation" id="organisation"  type="text"></div><div class="form-group"><label>Country<span></span></label>' + countryhtml + '</div><div class="form-group"><label>State </label>' + statehtml + '</div><div class="form-group"><label>City</label>' + cityhtml + '</div></div><div class="form-group workshop" syle="display:none" id="work"><label>Select Workshop <span>*</span></label><select name="workshop[]" class="form-control form-control-lg form-control-sm" id="workshop"><option value="">--Select--</option><option value="Financial Operations in a Hospital (IIHMR Bangalore)">Financial Operations in a Hospital (IIHMR Bangalore)</option><option value="Clinical Efficiency & Excellence (MSRMH, Bangalore)">Clinical Efficiency & Excellence (MSRMH, Bangalore)</option><option value="Digital Systems for Facility Management in Hospitals (St. John\'s Medical College, Bangalore)">Digital Systems for Facility Management in Hospitals (St. John\'s Medical College, Bangalore)</option></select></div></div>' + outcl + '';






        /*    if(eventcatVal==1 || eventcatVal==2){

    var countryhtml='<select name="country[]" class="form-control form-control-lg form-control-sm countries country-dropdown" id="countryId"><option value="India" countryid="IN">India</option></select>';

    }
    else{

    var countryhtml='<select name="country[]" class="form-control form-control-lg form-control-sm countries country-dropdown" id="countryId"><option value="Afghanistan" countryid="AF">Afghanistan</option><option value="Albania" countryid="AL">Albania</option><option value="Algeria" countryid="DZ">Algeria</option><option value="Andorra" countryid="AD">Andorra</option><option value="Angola" countryid="AO">Angola</option><option value="Anguilla" countryid="AI">Anguilla</option><option value="Antigua and Barbuda" countryid="AG">Antigua and Barbuda</option><option value="Argentina" countryid="AR">Argentina</option><option value="Armenia" countryid="AM">Armenia</option><option value="Australia" countryid="AU">Australia</option><option value="Austria" countryid="AT">Austria</option><option value="Azerbaijan" countryid="AZ">Azerbaijan</option><option value="Bahamas" countryid="BS">Bahamas</option><option value="Bahrain" countryid="BH">Bahrain</option><option value="Bangladesh" countryid="BD">Bangladesh</option><option value="Barbados" countryid="BB">Barbados</option><option value="Belarus" countryid="BY">Belarus</option><option value="Belgium" countryid="BE">Belgium</option><option value="Belize" countryid="BZ">Belize</option><option value="Benin" countryid="BJ">Benin</option><option value="Bermuda" countryid="BM">Bermuda</option><option value="Bhutan" countryid="BT">Bhutan</option><option value="Bolivia" countryid="BO">Bolivia</option><option value="Bosnia and Herzegovina" countryid="BA">Bosnia and Herzegovina</option><option value="Botswana" countryid="BW">Botswana</option><option value="Brazil" countryid="BR">Brazil</option><option value="Brunei Darussalam" countryid="BN">Brunei Darussalam</option><option value="Bulgaria" countryid="BG">Bulgaria</option><option value="Burkina Faso" countryid="BF">Burkina Faso</option><option value="Burundi" countryid="BI">Burundi</option><option value="Cambodia" countryid="KH">Cambodia</option><option value="Cameroon" countryid="CM">Cameroon</option><option value="Canada" countryid="CA">Canada</option><option value="Cape Verde" countryid="CV">Cape Verde</option><option value="Cayman Islands" countryid="KY">Cayman Islands</option><option value="Central African Republic" countryid="CF">Central African Republic</option><option value="Chad" countryid="TD">Chad</option><option value="Chile" countryid="CL">Chile</option><option value="China" countryid="CN">China</option><option value="Colombia" countryid="CO">Colombia</option><option value="Comoros" countryid="KM">Comoros</option><option value="Congo" countryid="CG">Congo</option><option value="Costa Rica" countryid="CR">Costa Rica</option><option value="Croatia (Hrvatska)" countryid="HR">Croatia (Hrvatska)</option><option value="Cuba" countryid="CU">Cuba</option><option value="Cyprus" countryid="CY">Cyprus</option><option value="Czech Republic" countryid="CZ">Czech Republic</option><option value="Denmark" countryid="DK">Denmark</option><option value="Djibouti" countryid="DJ">Djibouti</option><option value="Dominica" countryid="DM">Dominica</option><option value="Dominican Republic" countryid="DO">Dominican Republic</option><option value="Ecuador" countryid="EC">Ecuador</option><option value="Egypt" countryid="EG">Egypt</option><option value="El Salvador" countryid="SV">El Salvador</option><option value="Equatorial Guinea" countryid="GQ">Equatorial Guinea</option><option value="Eritrea" countryid="ER">Eritrea</option><option value="Estonia" countryid="EE">Estonia</option><option value="Ethiopia" countryid="ET">Ethiopia</option><option value="Faroe Islands" countryid="FO">Faroe Islands</option><option value="Fiji" countryid="FJ">Fiji</option><option value="Finland" countryid="FI">Finland</option><option value="France" countryid="FR">France</option><option value="French Guiana" countryid="GF">French Guiana</option><option value="French Polynesia" countryid="PF">French Polynesia</option><option value="French Southern Territories" countryid="TF">French Southern Territories</option><option value="Gabon" countryid="GA">Gabon</option><option value="Gambia" countryid="GM">Gambia</option><option value="Georgia" countryid="GE">Georgia</option><option value="Germany" countryid="DE">Germany</option><option value="Ghana" countryid="GH">Ghana</option><option value="Greece" countryid="GR">Greece</option><option value="Greenland" countryid="GL">Greenland</option><option value="Grenada" countryid="GD">Grenada</option><option value="Guadeloupe" countryid="GP">Guadeloupe</option><option value="Guam" countryid="GU">Guam</option><option value="Guatemala" countryid="GT">Guatemala</option><option value="Guinea" countryid="GN">Guinea</option><option value="Guinea-Bissau" countryid="GW">Guinea-Bissau</option><option value="Guyana" countryid="GY">Guyana</option><option value="Haiti" countryid="HT">Haiti</option><option value="Honduras" countryid="HN">Honduras</option><option value="Hong Kong" countryid="HK">Hong Kong</option><option value="Hungary" countryid="HU">Hungary</option><option value="Iceland" countryid="IS">Iceland</option><option value="Isle of Man" countryid="IM">Isle of Man</option><option value="Indonesia" countryid="ID">Indonesia</option><option value="Iran" countryid="IR">Iran</option><option value="Iraq" countryid="IQ">Iraq</option><option value="Ireland" countryid="IE">Ireland</option><option value="Israel" countryid="IL">Israel</option><option value="Italy" countryid="IT">Italy</option><option value="Ivory Coast" countryid="CI">Ivory Coast</option><option value="Jersey" countryid="JE">Jersey</option><option value="Jamaica" countryid="JM">Jamaica</option><option value="Japan" countryid="JP">Japan</option><option value="Jordan" countryid="JO">Jordan</option><option value="Kazakhstan" countryid="KZ">Kazakhstan</option><option value="Kenya" countryid="KE">Kenya</option><option value="Kiribati" countryid="KI">Kiribati</option><option value="North Korea" countryid="KP">North Korea</option><option value="South Korea" countryid="KR">South Korea</option><option value="Kosovo" countryid="XK">Kosovo</option><option value="Kuwait" countryid="KW">Kuwait</option><option value="Kyrgyzstan" countryid="KG">Kyrgyzstan</option><option value="Lao" countryid="LA">Lao</option><option value="Latvia" countryid="LV">Latvia</option><option value="Lebanon" countryid="LB">Lebanon</option><option value="Lesotho" countryid="LS">Lesotho</option><option value="Liberia" countryid="LR">Liberia</option><option value="Libyan Arab Jamahiriya" countryid="LY">Libyan Arab Jamahiriya</option><option value="Liechtenstein" countryid="LI">Liechtenstein</option><option value="Lithuania" countryid="LT">Lithuania</option><option value="Luxembourg" countryid="LU">Luxembourg</option><option value="Macedonia" countryid="MK">Macedonia</option><option value="Madagascar" countryid="MG">Madagascar</option><option value="Malawi" countryid="MW">Malawi</option><option value="Malaysia" countryid="MY">Malaysia</option><option value="Maldives" countryid="MV">Maldives</option><option value="Mali" countryid="ML">Mali</option><option value="Malta" countryid="MT">Malta</option><option value="Marshall Islands" countryid="MH">Marshall Islands</option><option value="Martinique" countryid="MQ">Martinique</option><option value="Mauritania" countryid="MR">Mauritania</option><option value="Mauritius" countryid="MU">Mauritius</option><option value="Mexico" countryid="MX">Mexico</option><option value="Micronesia, Federated States of" countryid="FM">Micronesia, Federated States of</option><option value="Moldova, Republic of" countryid="MD">Moldova, Republic of</option><option value="Monaco" countryid="MC">Monaco</option><option value="Mongolia" countryid="MN">Mongolia</option><option value="Montenegro" countryid="ME">Montenegro</option><option value="Montserrat" countryid="MS">Montserrat</option><option value="Morocco" countryid="MA">Morocco</option><option value="Mozambique" countryid="MZ">Mozambique</option><option value="Myanmar" countryid="MM">Myanmar</option><option value="Namibia" countryid="NA">Namibia</option><option value="Nauru" countryid="NR">Nauru</option><option value="Nepal" countryid="NP">Nepal</option><option value="Netherlands" countryid="NL">Netherlands</option><option value="Netherlands Antilles" countryid="AN">Netherlands Antilles</option><option value="New Caledonia" countryid="NC">New Caledonia</option><option value="New Zealand" countryid="NZ">New Zealand</option><option value="Nicaragua" countryid="NI">Nicaragua</option><option value="Niger" countryid="NE">Niger</option><option value="Nigeria" countryid="NG">Nigeria</option><option value="Northern Mariana Islands" countryid="MP">Northern Mariana Islands</option><option value="Norway" countryid="NO">Norway</option><option value="Oman" countryid="OM">Oman</option><option value="Pakistan" countryid="PK">Pakistan</option><option value="Palau" countryid="PW">Palau</option><option value="Palestine" countryid="PS">Palestine</option><option value="Panama" countryid="PA">Panama</option><option value="Papua New Guinea" countryid="PG">Papua New Guinea</option><option value="Paraguay" countryid="PY">Paraguay</option><option value="Peru" countryid="PE">Peru</option><option value="Philippines" countryid="PH">Philippines</option><option value="Poland" countryid="PL">Poland</option><option value="Portugal" countryid="PT">Portugal</option><option value="Puerto Rico" countryid="PR">Puerto Rico</option><option value="Qatar" countryid="QA">Qatar</option><option value="Reunion" countryid="RE">Reunion</option><option value="Romania" countryid="RO">Romania</option><option value="Russian Federation" countryid="RU">Russian Federation</option><option value="Rwanda" countryid="RW">Rwanda</option><option value="Saint Kitts and Nevis" countryid="KN">Saint Kitts and Nevis</option><option value="Saint Lucia" countryid="LC">Saint Lucia</option><option value="Saint Vincent and the Grenadines" countryid="VC">Saint Vincent and the Grenadines</option><option value="Samoa" countryid="WS">Samoa</option><option value="San Marino" countryid="SM">San Marino</option><option value="Sao Tome and Principe" countryid="ST">Sao Tome and Principe</option><option value="Saudi Arabia" countryid="SA">Saudi Arabia</option><option value="Senegal" countryid="SN">Senegal</option><option value="Serbia" countryid="RS">Serbia</option><option value="Seychelles" countryid="SC">Seychelles</option><option value="Sierra Leone" countryid="SL">Sierra Leone</option><option value="Singapore" countryid="SG">Singapore</option><option value="Slovakia" countryid="SK">Slovakia</option><option value="Slovenia" countryid="SI">Slovenia</option><option value="Solomon Islands" countryid="SB">Solomon Islands</option><option value="Somalia" countryid="SO">Somalia</option><option value="South Africa" countryid="ZA">South Africa</option><option value="Spain" countryid="ES">Spain</option><option value="Sri Lanka" countryid="LK">Sri Lanka</option><option value="St. Helena" countryid="SH">St. Helena</option><option value="St. Pierre and Miquelon" countryid="PM">St. Pierre and Miquelon</option><option value="Sudan" countryid="SD">Sudan</option><option value="Suriname" countryid="SR">Suriname</option><option value="Svalbard and Jan Mayen Islands" countryid="SJ">Svalbard and Jan Mayen Islands</option><option value="Swaziland" countryid="SZ">Swaziland</option><option value="Sweden" countryid="SE">Sweden</option><option value="Switzerland" countryid="CH">Switzerland</option><option value="Syrian Arab Republic" countryid="SY">Syrian Arab Republic</option><option value="Taiwan" countryid="TW">Taiwan</option><option value="Tajikistan" countryid="TJ">Tajikistan</option><option value="Tanzania" countryid="TZ">Tanzania</option><option value="Thailand" countryid="TH">Thailand</option><option value="Togo" countryid="TG">Togo</option><option value="Tokelau" countryid="TK">Tokelau</option><option value="Tonga" countryid="TO">Tonga</option><option value="Trinidad and Tobago" countryid="TT">Trinidad and Tobago</option><option value="Tunisia" countryid="TN">Tunisia</option><option value="Turkey" countryid="TR">Turkey</option><option value="Turkmenistan" countryid="TM">Turkmenistan</option><option value="Tuvalu" countryid="TV">Tuvalu</option><option value="Uganda" countryid="UG">Uganda</option><option value="Ukraine" countryid="UA">Ukraine</option><option value="United Arab Emirates" countryid="AE">United Arab Emirates</option><option value="United Kingdom" countryid="GB">United Kingdom</option><option value="United States" countryid="US">United States</option><option value="United States minor outlying islands" countryid="UM">United States minor outlying islands</option><option value="Uruguay" countryid="UY">Uruguay</option><option value="Uzbekistan" countryid="UZ">Uzbekistan</option><option value="Vanuatu" countryid="VU">Vanuatu</option><option value="Venezuela" countryid="VE">Venezuela</option><option value="Vietnam" countryid="VN">Vietnam</option><option value="Virgin Islands (U.S.)" countryid="VI">Virgin Islands (U.S.)</option><option value="Wallis and Futuna Islands" countryid="WF">Wallis and Futuna Islands</option><option value="Yemen" countryid="YE">Yemen</option><option value="Zambia" countryid="ZM">Zambia</option><option value="Zimbabwe" countryid="ZW">Zimbabwe</option></select>';
    }



    var innerHtml= '<div class="flex d-form-outer"><div class="d_form_left"><h3>Delegate </h3><div class="form-group"><label>Title<span>*</span></label><select name="nametitle[]" class="form-control form-control-lg form-control-sm" required="required" id="nametitle"><option value="Mr"  >Mr.</option><option value="Ms">Ms.</option><option value="Dr" >Dr.</option><option value="Mrs">Mrs.</option><option value="Prof" >Prof.</option></select></div><div class="form-group"><label>First Name<span>*</span></label><input name="first_name[]" class="form-control form-control-lg form-control-sm first_name" required="required" id="first_name"  type="text" class="first_name"></div><div class="form-group"><label>Last Name<span>*</span></label><input name="last_name[]" required="required"  class="form-control form-control-lg form-control-sm" id="last_name" class="last_name" type="text"></div><div class="form-group"><label>Mobile <span>*</span></label><input name="mobile[]" class="form-control form-control-lg form-control-sm mobile" required="required" id="mobile"  type="tel" maxlength="15" minlength="10" ></div><div class="form-group"><label>Email<span>*</span></label><input name="email[]" required="required" class="form-control form-control-lg form-control-sm" id="email"  type="email"></div><div class="form-group"><label>Domain<span>*</span></label><select name="domain[]" class="form-control form-control-lg form-control-sm" required><option value="Doctor">Doctor</option><option value="Nurse">Nurse</option><option value="Paramedics">Paramedics</option><option value="Administrative">Administrative</option><option value="Allied Services">Allied Services</option><option value="Others">Others</option></select></div><div class="form-group"><label>Designation<span></span></label><input name="designation[]"  id="designation" class="form-control form-control-lg form-control-sm"  type="text"></div><div class="form-group"><label>Organisation<span>*</span></label><input name="organisation[]" required class="form-control form-control-lg form-control-sm organisation" id="organisation"  type="text"></div><div class="form-group"><label>Country<span></span></label>'+countryhtml+'</div><div class="form-group"><label>State </label><input type="text" name="state[]" class="form-control form-control-lg form-control-sm states"    placeholder="State"></div><div class="form-group"><label>City</label><input type="text" name="city[]" class="form-control form-control-lg form-control-sm cities"   placeholder="City" ></div></div></div>';
    */


        $('#delegate_dynamic_field').append(innerHtml);

    } else {
        $('#delegate_dynamic_field_org').hide();
        $('#delegate_dynamic_field').css('display', 'block');
        $('#choosedel').css('display', 'block');
        $("#total_no_attendees").attr('required', true);


        $("#contact_title").attr('required', true);
        $("#contact_first_name").attr('required', true);
        $("#contact_last_name").attr('required', true);
        $("#contact_designation").attr('required', true);
        $("#billing_email").attr('required', true);
        $("#billing_mobile").attr('required', true);
        $('#contactinfo').css('display', 'block');
    }
    $('#total_no_attendees').prop('selectedIndex', 0);


    //  $("#discountbox").css('display','none');
    //  $('#selected_price_pay').html('');
    //   $('#currency').val();
    // $('#merchant').val();
    //  $('.currtxt').html('');
    // $('#amount').val();





}


function checkmembershipnumber() {
    $('.membershipinfo').html(' ');
    $('#total_no_attendees').prop('selectedIndex', 0);
    $("#discountbox").css('display', 'none');
    $('#selected_price_pay').html('');
    $('#currency').val();
    $('#merchant').val();
    $('.currtxt').html('');
    $('#amount').val();
    var membershipstatus = $("#membershipstatus").val();
    var membershipno = $("#membershipno").val();
    var mtype = $('#membershipstatus').find(':selected').attr('vaid');
    if (membershipstatus != '' && membershipno != '') {

        $.ajax({
            type: "POST",
            url: "https://www.caho.in/caho-member-verification-by-category",
            data: 'RegistrationNO=' + membershipno + '&membershiptype=' + mtype,
            success: function(data) {
                if(data[2] == "Expired"){
                    $('.membershipinfosuccs').css('display', 'none');
                    $('.membershipinfo').html('<span style="color:red;">Your Membership has been Expired.</span> Please check your membership number & validity @ +91-8130770805.').fadeIn(1000);
                }
                if(data[2] != "Active"){
                    $('.membershipinfosuccs').css('display', 'none');
                    $('.membershipinfo').html('<span style="color:red;">Your Membership has been Expired.</span> Please check your membership number & validity @ +91-8130770805.').fadeIn(1000);
                }
                if(data[0] == "membership_registrations" && data[2] == "Active"){
                    $('.membershipinfo').css('display', 'none');
                    $('.membershipinfosuccs').html('Your Membership No. has been Successfully Verified').fadeIn(1000);
                }
                if(data[0] == "international_members" && data[2] == "Active"){
                    $('.membershipinfo').css('display', 'none');
                    $('.membershipinfosuccs').html('Your Membership No. has been Successfully Verified').fadeIn(1000);
                }
                if(data[0] == "error"){
                    $('.membershipinfosuccs').css('display', 'none');
                    $('.membershipinfo').html('<span style="color:red;">Membership No. not found.</span> Please check your membership number & validity @ +91-8130770805.').fadeIn(1000);
                }
            }
        });
    }
}



/*
if (!!window.performance && window.performance.navigation.type === 2) {
// value 2 means"The page was accessed by navigating into the history"
console.log('Reloading');

window.location.reload(); // reload whole page

}

if (window.history.replaceState) {
window.history.replaceState(null, null, window.location.href);
}

*/

$(document).ready(function() {
    $(".slide-btn").click(function() {
        $(".back-dropdown ul").slideToggle();
    })
})