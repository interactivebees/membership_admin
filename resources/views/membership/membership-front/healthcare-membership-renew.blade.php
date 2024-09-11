@php
    $hospitalCategories = DB::table('hospital_categories')
    ->where('status',1)->where('membership_category_id', request()->get('membership'))
    ->orderBy('sort')->get();
    $membershipCategorie = DB::table('membership_categories')->where('id',request()->get('membership'))->first();
@endphp

@extends('layouts.guest')
@section('content')
    @include('common.toastrJs')
    
    <section class="inner-banner-sec image">
        <img src="https://www.caho.in/images/fa41649f10bf6475e8fa0a922a3245f3.jpg" alt="" class="show-desk">
        <img src="images/HEALTHCARE INSTITUTIONS-mob.jpg" alt="" class="show-mob">
        <div class="container">
            <div class="heading ub">{{ $membershipCategorie->name }} <b>{{ $membershipCategorie->type }}</b></div>
            <h4>Hospitals, medical or teaching institutions, clinics etc</h4>
            <ul class="breadcrumb flex-view fc">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>{{ $membershipCategorie->name .' '. $membershipCategorie->type }}</li>
            </ul>
        </div>
    </section>
    <style>
        #group_hospital_detail{
            display: none;
        }
        .delete-coauthor {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #9b1c53;
            color: #fff;
            padding: 5px 8px;
            border-radius: 50%;
            cursor: pointer;
        }
        .group-hospital{
            position: relative;
        }
    </style>
    <section class="form-type-page membership-bg">
        <div class="container">
            <div class="tabbing-sec">

                <div class="inner-sec">
                    <form class="membership-form" method="POST" action="{{ route('membership.register.store') }}" id="paymentForm" enctype='multipart/form-data'>
                        @csrf

                        <div class="inner active">
                            <div class="membership-process">
                                <ul>
                                    <li class="organization-det starting"></li>
                                    <li class="organization-det org-info"></li>
                                    <li class="organization-det org-head"></li>
                                    <li class="organization-det cont-per-org1"></li>
                                    <!--<li class="organization-det cont-per-org2"></li>-->
                                    <li class="organization-det final-view"></li>
                                </ul>
                            </div>
                            @include('membership.membership-front.block.step1')
                        </div>

                        @include('membership.membership-front.block.step2')

                        @include('membership.membership-front.block.step3')

                        @include('membership.membership-front.block.step4')

                        @include('membership.membership-front.block.step5')

                        @include('membership.membership-front.block.final')
                    </form>
                </div>
            </div>
        </div>
    </section>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).on('change', 'input[name=group_hospital_name]', function() {
            var group_hospital_name = $(this).val();
            $("input[name=organization_name]").val(group_hospital_name);
        });



$(document).ready(function() {
    // Function to handle mobile number validation
    $("input[type='tel']").on('change', function() {
        var isValidMobile = validateMobile($(this).val());
        if (!isValidMobile) {
            Swal.fire({
                text: 'Mobile Number must be of 10 digits',
                icon: 'error',
                confirmButtonText: 'Okay'
            });
            $(this).addClass("is-invalid");
            allFieldsValid = false;
        } else {
            // Swal.fire({
            //     text: 'Mobile Number is valid',
            //     icon: 'success',
            //     confirmButtonText: 'Okay'
            // });
            $("#mobileValidationMessage").text('');
            $(this).removeClass("is-invalid");
        }
    });
    $(document).on('change', "input[name='no_of_hospital_in_the_group']", function() {
        if ($(this).val() < 2) {
            Swal.fire({
                text: 'Number of hospital should be at least 2.',
                icon: 'error',
                confirmButtonText: 'Okay'
            });
            $(this).addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid");
        }
    });
    $("input[name='hospital_mobile']").on('change', function() {
        var isValidMobile = $(this).val().length;
        if (isValidMobile!='10' && isValidMobile!='11') {
            Swal.fire({
                text: 'Mobile Number must be of 10 or 11 digits',
                icon: 'error',
                confirmButtonText: 'Okay'
            });
            $(this).addClass("is-invalid");
            allFieldsValid = false;
        } else {
            // Swal.fire({
            //     text: 'Mobile Number is valid',
            //     icon: 'success',
            //     confirmButtonText: 'Okay'
            // });
            $("#mobileValidationMessage").text('');
            $(this).removeClass("is-invalid");
        }
    });
    $("input[name='hospital_email']").on('change', function() {
        var isValidemail = validateEmail($(this).val());
        $(this).removeClass("is-invalid");
        if (!isValidemail) {
            // Swal.fire({
            //     text: 'Email is not correct',
            //     icon: 'error',
            //     confirmButtonText: 'Okay'
            // });
            // $(this).addClass("is-invalid");
            // allFieldsValid = false;
        } else {
            let email = $(this).val();
            $("#mobileValidationMessage").text('');
            $(this).removeClass("is-invalid");
            // alert(isValidemail)
            $.ajax({
                url : "{{ url('/membership-form/hospital-email-check') }}",
                method : "POST",
                data : {
                    email : email,
                     "_token": "{{ csrf_token() }}",
                },
                success : function(data){
                    Swal.fire({
                        text: data.message,
                        // icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                    $('#email_error_hospital').text(data.status);
                }
            })
        }
    });
    $("input[name='hospital_email']").on('keyup', function() {
        var isValidemail = validateEmail($(this).val());
        $(this).removeClass("is-invalid");
        if (!isValidemail) {
            
        } else {
            let email = $(this).val();
            $.ajax({
                url : "{{ url('/membership-form/hospital-email-check') }}",
                method : "POST",
                data : {
                    email : email,
                     "_token": "{{ csrf_token() }}",
                },
                success : function(data){
                    $('#email_error_hospital').text(data.status);
                }
            })
        }
    });

    

    function checkInput(present, next, top) {
        var emptyFields = [];
        var allFieldsValid = true;

        $(present + " input[required], " + present + " select[required]").each(function() {
            var inputName = this.name;
            if ($(this).val() === "") {
                emptyFields.push(inputName);
                allFieldsValid = false;
            }

            if (this.type == 'email') {
                if ($(this).val() != "") {
                    var isValid = validateEmail($(this).val());
                    if (!isValid) {
                        emptyFields.push(inputName);
                        allFieldsValid = false;
                    }
                }
            }
            if (this.name == 'pan_no') {
                if ($(this).val() != "") {
                    var isValid = validatePAN($(this).val());
                    if (!isValid) {
                        emptyFields.push(inputName);
                        allFieldsValid = false;
                    }
                }
            }
            
            if (this.type == 'tel') {
                if ($(this).val() != "") {
                    var isValid = validateMobile($(this).val());
                    if (!isValid) {
                        emptyFields.push(inputName);
                        allFieldsValid = false;
                    }
                }
            }
            
            if (this.name == 'organization_name') {
                if ($(this).val() != "") {
                    $(this).val($(this).val().trim());
                    var ISValidName = validateName($(this).val());
                    if (!ISValidName) {
                        emptyFields.push(inputName);
                        allFieldsValid = false;
                    }
                }
            }
            if (this.name == 'hospital_email') {
                let value=$('#email_error_hospital').text();
                if (value != '' && value != null && value != '1') {
                    emptyFields.push(inputName);
                    allFieldsValid = false;
                }
            }
            if (this.name == 'group_hospital_name') {
                if ($(this).val() != "") {
                    $(this).val($(this).val().trim());
                    var isValidSpace = validSpace($(this).val());
                    if (!isValidSpace) {
                        emptyFields.push(inputName);
                        allFieldsValid = false;
                    }
                    else
                    {
                        var isValidCondition = validDistrict($(this).val());
                        if (!isValidCondition) {
                            emptyFields.push(inputName);
                            allFieldsValid = false;
                        }
                    }
                }
            }
            
            if (this.type == 'text' && inputName === 'gst_registration_number') {
                if ($(this).val() != "") {
                    var isValidPAN = validateGST($(this).val());
                    if (!isValidPAN) {
                        emptyFields.push(inputName);
                        allFieldsValid = false;
                    }
                }
            }
            if (this.type == 'number' && inputName === 'no_of_hospital_in_the_group') {
                if ($(this).val() < 2) {
                    emptyFields.push(inputName);
                    allFieldsValid = false;
                }
            }
            if (this.name == 'district') {
                if ($(this).val() != "") {
                    
                    $(this).val($(this).val().trim());
                    var isValidSpace = validSpace($(this).val());
                    if (!isValidSpace) {
                        emptyFields.push(inputName);
                        allFieldsValid = false;
                    }
                    else
                    {
                        var isValidDistrict = validDistrict($(this).val());
                        if (!isValidDistrict) {
                            emptyFields.push(inputName);
                            allFieldsValid = false;
                        }
                    }    
                }
            }
            if (this.name == 'oh_first_name' || this.name == 'oh_last_name' || this.name == 'oh_designation' || this.name == 'one_first_name' || this.name == 'one_last_name' || this.name == 'one_designation' || this.name == 'two_first_name' || this.name == 'two_last_name' || this.name == 'two_designation') {
                if ($(this).val() != "") {
                    var isValidSpace = validSpace($(this).val());
                    if (!isValidSpace) {
                        emptyFields.push(inputName);
                        allFieldsValid = false;
                    }
                    else
                    {
                        var isValidCondition = validateName($(this).val());
                        if (!isValidCondition) {
                            emptyFields.push(inputName);
                            allFieldsValid = false;
                        }
                    }
                }
            }
            if (this.name == 'hospital_category_id') {
                let min_bed,max_bed;
                let hospital_category_id_val=$(this).find('option:selected').text();
                if (hospital_category_id_val == "1-100 bedded hospital" || hospital_category_id_val == "101-300 bedded hospital" || hospital_category_id_val == "300 + bedded hospital") {
                    let arr_str = hospital_category_id_val.split(' ')[0];
                    let arr_str1 = arr_str.split('-');
                    min_bed= parseInt(arr_str1[0]);
                    max_bed= parseInt(arr_str1[1]);
                    if (isNaN(max_bed)) {
                        min_bed= parseInt(arr_str1[0])+1;
                        max_bed=5000;
                    }
                }
                else
                {
                    min_bed= 1;
                    max_bed= 5000;
                }
                var isvalidBeds = validBeds(min_bed,max_bed);
                if (!isvalidBeds) {
                    Swal.fire({
                        text: `The number of beds must be between ${min_bed} to ${max_bed}.`,
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                    emptyFields.push('numbers_of_beds_in_hospital');
                    allFieldsValid = false;
                }
            }
            if (this.name == 'pin_code') {
                if ($(this).val() != "") {
                    var isValidPin = validPin($(this).val());
                    if (!isValidPin) {
                        emptyFields.push(inputName);
                        allFieldsValid = false;
                    }
                }
            }
        });
        
        $('[name="oh_mobile_no"], [name="two_mobile_no"], [name="one_mobile_no"], [name="hospital_mobile"]').each(function() {
            if ($(this).val() != "") {
                if($(this).attr('name')=='hospital_mobile')
                {
                    var isValidMobile = $(this).val().length;
                    if (isValidMobile!='10' && isValidMobile!='11') {    
                        emptyFields.push($(this).attr('name'));
                        allFieldsValid = false;
                    }    
                }else{
                    var isValid = validateMobile($(this).val());
                    if (!isValid) {
                        emptyFields.push($(this).attr('name'));
                        allFieldsValid = false;
                    }
                }    
            }
        });
        
        $('[name="gp_hospital_mobile[]"]').each(function() {
            var isValid = validateMobile($(this).val());
            if (!isValid) {
                allFieldsValid = false;
            }
        });
        $('[name="gp_hospital_email[]').each(function() {
            var isValid = validateEmail($(this).val());
            if (!isValid) {
                allFieldsValid = false;
            }
        });
        $('[name="gp_hospital_categories_id[]').each(function() {
            
            if ($(this).val()=='' || $(this).val()==null) {
                allFieldsValid = false;
            }
        });
        $('[name="gp_hospital_name[]"]').each(function() {
            var isValidSpace = validSpace($(this).val());
            if (!isValidSpace) {
                allFieldsValid = false;
            } else {
                var isValidCondition = validDistrict($(this).val());
                if (!isValidCondition) {
                    allFieldsValid = false;
                }
            }
        });
        
        if (!allFieldsValid) {
            $(present + " input, " + present + " select").each(function() {
                $(this).removeClass("is-invalid");
            });

            $(present + " input, " + present + " select").each(function() {
                if (emptyFields.includes(this.name)) {
                    $(this).addClass("is-invalid");
                }
            });
           
            $('[name="gp_hospital_mobile[]"]').each(function() {
                var isValid = validateMobile($(this).val());
                $(this).removeClass("is-invalid");
                if (!isValid) {
                    $(this).addClass("is-invalid");
                }
            });
            $('[name="gp_hospital_email[]').each(function() {
                var isValid = validateEmail($(this).val());
                $(this).removeClass("is-invalid");
                if (!isValid) {
                    $(this).addClass("is-invalid");
                }
            });
            $('[name="gp_hospital_categories_id[]').each(function() {
                $(this).removeClass("is-invalid");
                if ($(this).val()=='' || $(this).val()==null) {
                    $(this).addClass("is-invalid");
                }
            });
            $('[name="gp_hospital_name[]"]').each(function() {
                var isValidSpace = validSpace($(this).val());
                $(this).removeClass("is-invalid");
                if (!isValidSpace) {
                    $(this).addClass("is-invalid");
                } else {
                    var isValidCondition = validDistrict($(this).val());
                    if (!isValidCondition) {
                        $(this).addClass("is-invalid");
                    }
                }
            });
        } else {
            $(present + " input, " + present + " select").each(function() {
                $(this).removeClass("is-invalid");
            });
            $(present).removeClass('active');
            $(next).addClass('active');
            $(top).addClass('active');
        }
    }

    function backStep(present, next, top) {
        $(present).addClass('active');
        $(next).removeClass('active');
        $(top).removeClass('active');
    }

    function validateEmail(email) {
        var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        return pattern.test(email);
    }
    
    function validatePAN(pan) {
        var pattern = /^[A-Z]{5}[0-9]{4}[A-Z]$/;
        return pattern.test(pan);
    }
    function validateGST(gst) {
        var pattern = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}[Z]{1}[0-9A-Z]{1}$/;
        return pattern.test(gst);
    }
    function validateName(name) {
        var pattern = /^[a-zA-Z_ ]+$/;
        return pattern.test(name);
    }
    function validDistrict(name) {
        var pattern = /^[a-zA-Z_ ]+$/;
        return pattern.test(name);
    }
    function validateMobile(mobile) {
        var pattern = /^\d{10}$/; // Matches a 10-digit number (e.g., 1234567890)
        return pattern.test(mobile);
    }
    function validSpace(val) {
        var pattern = /^\s*$/;
        return !pattern.test(val);
    }
    function validPin(val)
    {
        if(val.length==6)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function isNullOrEmpty(value) {
        return value === null || value === '';
    }
    function validBeds(min_bed,max_bed)
    {
        let bed_value=$('[name="numbers_of_beds_in_hospital"]').val();
        
        let bed_value_int = parseInt(bed_value);
        if (!isNaN(bed_value_int) && bed_value_int >= min_bed && bed_value_int <= max_bed) {
            return true;
        } else {
            return false;
        }
    }
    $("#hospital_logo_input").on("change", function(event) {
        var selectedFile = event.target.files[0];

        if (selectedFile) {
            var objectURL = URL.createObjectURL(selectedFile);
            let img ='<img id="hospital_logo" src="'+objectURL+'" alt="Image Preview" style="max-width: 125px;">';
            
            $("#hospital_logo").html(img);
        } else {
            $("#hospital_logo").text("N.A"); // Clear preview if no file selected
        }
    });

    $("#step1").on("click", function() {
        if(!$("#step1").hasClass("is-invalid")) {
            checkInput('#organization-details', '#about-healthcare', '.starting');
        }
    });

    $("#back-step-1").on("click", function() {
        backStep('#organization-details', '#about-healthcare', '.starting');
    });

    $('#step2').click(function() {
        checkInput('#about-healthcare', '#organization-head', '.org-info');
    });

    $("#back-step-2").on("click", function() {
        backStep('#about-healthcare', '#organization-head', '.org-info');
    });

    $('#step3').click(function() {
        checkInput('#organization-head', '#contact-person1', '.org-head');
    });

    $("#back-step-3").on("click", function() {
        backStep('#organization-head', '#contact-person1', '.org-head');
    });

    $('#step4').click(function() {
        checkInput('#contact-person1', '#contact-person2', '.cont-per-org1');
    });

    $("#back-step-4").on("click", function() {
        backStep('#contact-person1', '#contact-person2', '.cont-per-org1');
    });

    // Process dynamic inputs
    // $(".dynamic-input").each(function() {
    //     var inputDataObject = new FormData();
    //     var fieldName = $(this).attr('name');
    //     var fieldType = $(this).attr('type');

    //     if (fieldType === "tel") {
    //         var isValidMobile = validateMobile($(this).val());
    //         if (!isValidMobile) {
    //             $("#mobileValidationMessage").text('Mobile Number must be of 10 digits').show();
    //             $(this).addClass("is-invalid");
    //             inputMobile = false;
    //             allFieldsValid = false;
    //         } else {
    //             $("#mobileValidationMessage").text('');
    //             inputMobile = true;
    //             var fieldValue = $(this).val();
    //             inputDataObject.append(fieldName, fieldValue);
    //             $(this).removeClass("is-invalid");
    //         }
    //     } else if (fieldType === "file") {
    //         var files = $(this)[0].files;
    //         for (var i = 0; i < files.length; i++) {
    //             inputDataObject.append(fieldName + '[' + i + ']', files[i]);
    //         }
    //     } else {
    //         var fieldValue = $(this).val();
    //         inputDataObject.append(fieldName, fieldValue);
    //     }
    // });

    $('#step5').click(function() {
        var formData = {};

        formData["gp_hospital_name"] = [];
        formData["gp_hospital_categories_id"] = [];
        formData["gp_hospital_email"] = [];
        formData["gp_hospital_mobile"] = [];

        $(".membership-form input[type='number'], .membership-form input[type='text'], .membership-form input[type='email'], .membership-form select, .membership-form input[type='tel']").each(function() {
            var inputName = this.name;
            var inputValue = $(this).val();
            var inputText = $(this).text();
            if (inputName == 'gp_hospital_name[]' || inputName == 'gp_hospital_categories_id[]' || inputName == 'gp_hospital_email[]' || inputName == 'gp_hospital_mobile[]') {
                if (this.name == 'gp_hospital_name[]') {
                    formData["gp_hospital_name"].push(inputValue);
                }

                if (this.name == 'gp_hospital_categories_id[]') {
                    formData["gp_hospital_categories_id"].push($(this).find('option:selected').text());
                }

                if (this.name == 'gp_hospital_email[]') {
                    formData["gp_hospital_email"].push(inputValue);
                }

                if (this.name == 'gp_hospital_mobile[]') {
                    formData["gp_hospital_mobile"].push(inputValue);
                }
            } else {
                if (inputName == 'hospital_category_id') {
                    formData[inputName] = $(this).find('option:selected').text();
                } else {
                    if (inputName == 'oh_title' || inputName == 'one_title' || inputName == 'two_title') {
                        formData[inputName] = inputValue.charAt(0).toUpperCase() + inputValue.slice(1)+'.';
                    }else{
                        formData[inputName] = inputValue;
                    } 
                }
            }
        });

        formData["support_services_hospital"] = [];
        formData["core_services_hospital"] = [];

        $(".membership-form input[type='checkbox']:checked").each(function() {
            if (this.name == 'support_services_hospital[]') {
                formData["support_services_hospital"].push($(this).val());
            }
            if (this.name == 'core_services_hospital[]') {
                formData["core_services_hospital"].push($(this).val());
            }
        });

        formData["support_services_hospital"]=formData["support_services_hospital"].join(", ");
        formData["core_services_hospital"]=formData["core_services_hospital"].join(", ");

        getAmountDetail(
            $("input[name='membership_category_id']").val(),
            $("select[name='hospital_category_id']").val(),
            formData["gp_hospital_categories_id"]
        );

        for (var id in formData) {
            id = id.replace('[]', '');
            $("#" + id).text(isNullOrEmpty(formData[id]) ? 'NA' : formData[id]);
        }
         // Loop through the group hospital data and append to the divs
    var groupHospitalDetail = $('#hospital-detail-data ul.full-form');
    groupHospitalDetail.empty(); // Clear existing data

    for (var i = 0; i < formData["gp_hospital_name"].length; i++) {
        var hospitalName = formData["gp_hospital_name"][i];
        var hospitalCategory = formData["gp_hospital_categories_id"][i];
        var hospitalEmail = formData["gp_hospital_email"][i];
        var hospitalMobile = formData["gp_hospital_mobile"][i];

        groupHospitalDetail.append(`
            <li>
                <div class="input-group">
                    <label>Hospital Name ${i + 1}</label>
                    <p>${hospitalName}</p>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Select Category</label>
                    <p>${hospitalCategory}</p>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Email</label>
                    <p>${hospitalEmail}</p>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Phone No.</label>
                    <p>${hospitalMobile}</p>
                </div>
            </li>
        `);
    }
    
        checkInput('#contact-person2', '#final-preview-membership', '.final-view');
        // Hide or show the divs based on whether they contain data
        
        
         $('#group_hospital_detail p, #hospital-detail-data p').each(function() {
            var coAuthor1Text = $(this).text();
            if (!coAuthor1Text.trim()) {
              $(this).closest("ul.full-form").hide();
            }
            else{
                $(this).closest("ul.full-form").show();
            }
        });
         
            if ($('#hospital-detail-data ul.full-form').text().trim() === "") {
                $('#hospital-detail-data').hide();
            } else {
                $('#hospital-detail-data').show();
            }
        
    });

    $("#back-step-5").on("click", function() {
        backStep('#contact-person2', '#final-preview-membership', '.final-view');
    });
     // Hide or show the divs based on whether they contain data
            if ($('#group_hospital_detail ul.full-form').text().trim() === "") {
                $('#group_hospital_detail').hide();
            }
});

function getAmountDetail(membership_category_id, hospital_category_id, gp_hospital_categories_id) {
    $.ajax({
        type: 'POST',
        url: '{{ route('payable.amount') }}',
        data: {
            membership_category_id: membership_category_id,
            hospital_category_id: hospital_category_id,
            gp_hospital_categories_id: gp_hospital_categories_id
        },
        success: function(response) {
            $("#payabalAmount").text(response.data.payable_amount + '' + response.data.currency_symbol);
            if (response.data.total_discount != 0) {
                $("#discountedAmount").text(response.data.total_discount + '' + response.data.currency_symbol);
            } else {
                $("#discountedAmount").hide();
            }

            console.log(response.data);
        },
        error: function(error) {
            console.log(error);
        }
    });
}
document.getElementById("paymentForm").addEventListener("submit", function(event) {
    
    let paymentModes = document.getElementsByName("payment_mode");
    let isPaymentModeSelected = false;

    // Check if any radio button is checked
    for (let i = 0; i < paymentModes.length; i++) {
        if (paymentModes[i].checked) {
            isPaymentModeSelected = true;
            break;
        }
    }
    if (!isPaymentModeSelected) {
        // Prevent form submission if no payment mode is selected
        event.preventDefault();
        Swal.fire({
            text: 'Please select payment mode',
            // icon: 'error',
            confirmButtonText: 'Okay'
        });
    }
});
    </script>
@endsection
