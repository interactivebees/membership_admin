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
    <section class="form-type-page membership-bg">
        <div class="container">
            <div class="tabbing-sec">

                <div class="inner-sec">
                    <form class="membership-form" method="POST" action="{{ route('membership.register.store') }}" enctype='multipart/form-data'>
                        @csrf

                        <div class="inner active">
                            <div class="membership-process">
                                <ul>
                                    <li class="organization-det active"></li>
                                    <li class="organization-det org-info"></li>
                                    <li class="organization-det org-head"></li>
                                    <li class="organization-det cont-per-org1"></li>
                                    <li class="organization-det final-view"></li>
                                </ul>
                            </div>
                            @include('membership.membership-front.diagnostic-centre.block.step1')
                        </div>

                        @include('membership.membership-front.diagnostic-centre.block.step2')

                        @include('membership.membership-front.diagnostic-centre.block.step3')

                        @include('membership.membership-front.diagnostic-centre.block.step4')

                        @include('membership.membership-front.diagnostic-centre.block.final')
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).on('change', 'input[name=group_hospital_name]', function(){
            var group_hospital_name = $(this).val();
            $("input[name=organization_name]").val(group_hospital_name);
        });

        $(document).ready(function() {

            function checkInput(present,next,top) {
                var emptyFields = [];
                var allFieldsValid = true;

                $(present+" input[required], "+present+" select[required]").each(function() {
                // $(present+" input[required]").each(function() {
                    var inputName = this.name;
                    if ($(this).val() === "") {
                        emptyFields.push(inputName);
                        allFieldsValid = false;
                    }

                    if(this.type == 'email'){
                        if ($(this).val() != "") {
                            var isValid = validateEmail($(this).val());
                            if (isValid) {
                            } else {
                                emptyFields.push(inputName);
                                allFieldsValid = false;
                            }
                        }
                    }
                });

                $(present+" input").each(function() {
                    if(this.type == 'email'){
                        if ($(this).val() != "") {
                            var isValid = validateEmail($(this).val());
                            if (isValid) {
                            } else {
                                emptyFields.push(this.name);
                                allFieldsValid = false;
                            }
                        }
                    }
                });

                if (!allFieldsValid) {
                    $(present+" input, "+present+" select").each(function() {
                        $(this).removeClass("is-invalid");
                    });

                    $(present+" input, "+present+" select").each(function() {
                        if (emptyFields.includes(this.name)) {
                            $(this).addClass("is-invalid");
                        }
                    });
                } else {
                    $(present+" input, "+present+" select").each(function() {
                        $(this).removeClass("is-invalid");
                    });
                    $(present).removeClass('active');
                    $(next).addClass('active');
                    $(top).addClass('active');
                }
            }

            function backStep(present,next,top) {
                $(present).addClass('active');
                $(next).removeClass('active');
                $(top).removeClass('active');
            }

            function validateEmail(email) {
                var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return pattern.test(email);
            }

            function isNullOrEmpty(value) {
                return value === null || value === '';
            }



            $("#hospital_logo_input").on("change", function(event) {
                var selectedFile = event.target.files[0];

                if (selectedFile) {
                    var objectURL = URL.createObjectURL(selectedFile);
                    $("#hospital_logo").attr("src", objectURL);
                } else {
                    $("#hospital_logo").attr("src", ""); // Clear preview if no file selected
                }
            });


            $("#step1").on("click", function() {
                checkInput('#organization-details','#organization-head','.org-info')
            });

            $("#back-step-1").on("click", function() {
                backStep('#organization-details','#organization-head','.org-info')
            });

            $('#step2').click(function(){
                checkInput('#organization-head','#contact-person1','.org-head')
            })

            $("#back-step-2").on("click", function() {
                backStep('#organization-head','#contact-person1','.org-head')
            });

            $('#step3').click(function(){
                checkInput('#contact-person1','#about-healthcare','.cont-per-org1')
            })

            $("#back-step-3").on("click", function() {
                backStep('#contact-person1','#about-healthcare','.cont-per-org1')
            });


            $('#step4').click(function(){
                var formData = {};

                formData["gp_hospital_name"] = [];
                formData["gp_hospital_categories_id"] = [];
                formData["gp_hospital_email"] = [];
                formData["gp_hospital_mobile"] = [];
                formData["cs_core_service_name"] = [];
                formData["cs_name"] = [];
                formData["cs_designation"] = [];
                formData["cs_email"] = [];
                formData["cs_mobile"] = [];
                formData["cs_status"] = [];

                $(".membership-form input[type='number'], .membership-form input[type='text'], .membership-form input[type='email'], .membership-form select").each(function() {
                    var inputName = this.name;
                    var inputValue = $(this).val();
                    var inputText = $(this).text();

                    if(inputName == 'gp_hospital_name[]' || inputName == 'gp_hospital_categories_id[]' || inputName == 'gp_hospital_email[]' || inputName == 'gp_hospital_mobile[]' || inputName == 'cs_core_service_name[]' || inputName == 'cs_name[]' || inputName == 'cs_designation[]' || inputName == 'cs_email[]' || inputName == 'cs_mobile[]' || inputName == 'cs_status[]'){
                        if(this.name == 'gp_hospital_name[]'){
                            formData["gp_hospital_name"].push(inputValue);
                        }

                        if(this.name == 'gp_hospital_categories_id[]'){
                            formData["gp_hospital_categories_id"].push(inputText);
                        }

                        if(this.name == 'gp_hospital_email[]'){
                            formData["gp_hospital_email"].push(inputValue);
                        }

                        if(this.name == 'gp_hospital_mobile[]'){
                            formData["gp_hospital_mobile"].push(inputValue);
                        }

                        if(this.name == 'cs_core_service_name[]'){
                            formData["cs_core_service_name"].push(inputValue);
                        }

                        if(this.name == 'cs_name[]'){
                            formData["cs_name"].push(inputValue);
                        }

                        if(this.name == 'cs_designation[]'){
                            formData["cs_designation"].push(inputText);
                        }

                        if(this.name == 'cs_email[]'){
                            formData["cs_email"].push(inputValue);
                        }

                        if(this.name == 'cs_mobile[]'){
                            formData["cs_mobile"].push(inputValue);
                        }

                        if(this.name == 'cs_status[]'){
                            formData["cs_status"].push(inputValue);
                        }
                    }else{
                        if(inputName == 'hospital_category_id'){
                            formData[inputName] = inputText;
                        }else{
                            formData[inputName] = inputValue;
                        }

                    }

                })

                formData["support_services_hospital"] = [];
                formData["core_services_hospital"] = [];

                $(".membership-form input[type='checkbox']:checked").each(function() {
                    if(this.name == 'support_services_hospital[]'){
                        formData["support_services_hospital"].push($(this).val());
                    }
                    if(this.name == 'core_services_hospital[]'){
                        formData["core_services_hospital"].push($(this).val());
                    }
                });

                formData["support_services_hospital"].toString();
                formData["core_services_hospital"].toString();

                getAmountDetail(
                    $("input[name='membership_category_id']").val(),
                    $("select[name='hospital_category_id']").val(),
                    formData["gp_hospital_categories_id"]
                );

                for (var id in formData) {
                    id = id.replace('[]', '');
                    $("#" + id).text( isNullOrEmpty(formData[id]) ? 'Empty' : formData[id]);
                }
                checkInput('#about-healthcare','#final-preview-membership','.final-view')
                var table = $('#core_table');
                var newRow = $('<tr>');
                newRow.append('<td>' + formData["cs_core_service_name"].join(', ') + '</td>');
                newRow.append('<td>' + formData["cs_name"].join(', ') + '</td>');
                newRow.append('<td>' + formData["cs_designation"].join(', ') + '</td>');
                newRow.append('<td>' + formData["cs_email"].join(', ') + '</td>');
                newRow.append('<td>' + formData["cs_mobile"].join(', ') + '</td>');
                newRow.append('<td>' + formData["cs_status"].join(', ') + '</td>');
                table.append(newRow);
            })

            $("#back-step-5").on("click", function() {
                backStep('#about-healthcare','#final-preview-membership','.final-view')
            });
        });

        function getAmountDetail(membership_category_id,hospital_category_id,gp_hospital_categories_id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('payable.amount') }}',
                data: {
                    membership_category_id : membership_category_id,
                    hospital_category_id : hospital_category_id,
                    gp_hospital_categories_id : gp_hospital_categories_id
                },
                success: function(response) {
                    $("#payabalAmount").text(response.data.payable_amount +''+ response.data.currency_symbol);
                    if(response.data.total_discount != 0){
                        $("#discountedAmount").text(response.data.total_discount +''+ response.data.currency_symbol);
                    }else{
                        $("#discountedAmount").hide();
                    }

                    console.log(response.data);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

    </script>
@endsection
