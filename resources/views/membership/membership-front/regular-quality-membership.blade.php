@php
    $hospitalCategories = DB::table('hospital_categories')
    ->where('status',1)->where('membership_category_id', request()->get('membership'))
    ->orderBy('sort')->get();
    $membershipCategorie = DB::table('membership_categories')->where('id',request()->get('membership'))->first();
@endphp

@extends('layouts.guest')
@section('content')
    <section class="inner-banner-sec image">
        <img src="https://www.caho.in/images/fa41649f10bf6475e8fa0a922a3245f3.jpg" alt="" class="show-desk">
        <img src="images/HEALTHCARE INSTITUTIONS-mob.jpg" alt="" class="show-mob">
        <div class="container">
            <div class="heading ub">{{ $membershipCategorie->name }} <b>{{ $membershipCategorie->type }}</b></div>
            <h4>Any professional engaged in healthcare quality</h4>
            <ul class="breadcrumb flex-view fc">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>{{ $membershipCategorie->name .' '. $membershipCategorie->type }} </li>
            </ul>
        </div>
    </section>
    <section class="form-type-page membership-bg">
        <div class="container">
            <div class="tabbing-sec">

                <div class="inner-sec">
                    <form class="membership-form" method="POST" action="{{ route('membership.register.individual.store') }}" enctype='multipart/form-data'>
                        @csrf

                        <input type="text" name="form_type" placeholder="" value="personal" required hidden>

                        <div class="inner active">
                            <div class="membership-process">
                                <ul>
                                    <li class="organization-det active"></li>
                                    <li class="organization-det org-info"></li>
                                    <li class="organization-det final-view"></li>
                                </ul>
                            </div>
                            @include('membership.membership-front.block.personal-details')
                        </div>

                        @include('membership.membership-front.block.regular-quality-step-2')

                        @include('membership.membership-front.block.quality-final-step')

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            function checkInput(present,next,top) {
                var emptyFields = [];
                var allFieldsValid = true;

                $(present+" input[required], "+present+" select[required]").each(function() {
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


                $(present+" textarea").each(function() {
                    if($(this).data('type') == 'textarea'){
                        if ($(this).val() != "") {
                            var isValid = lengthValidator($(this).val(),100);
                            if (isValid) {
                            } else {
                                emptyFields.push(this.name);
                                allFieldsValid = false;
                            }
                        }
                    }
                });

                $(present+" textarea[required]").each(function() {
                    if ($(this).val() === "") {
                        emptyFields.push(this.name);
                        allFieldsValid = false;
                    }
                });

                if (!allFieldsValid) {
                    $(present+" input, "+present+" select,"+ present+" textarea").each(function() {
                        $(this).removeClass("is-invalid");
                    });

                    $(present+" input, "+present+" select,"+ present+" textarea").each(function() {
                        if (emptyFields.includes(this.name)) {
                            $(this).addClass("is-invalid");
                        }
                    });
                } else {
                    $(present+" input, "+present+" select,"+ present+" textarea").each(function() {
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


            function lengthValidator(value,max_length = null) {
                const myArray = value.split(" ");
                var val_len = myArray.length;
                if(val_len > max_length){
                    return false;
                }else{
                    return true;
                }
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

            $("#quality-step-2").on("click", function() {
                checkInput('#personal-details','#quality-organization-detail','.org-info')
            });

            $("#back-step-1").on("click", function() {
                backStep('#personal-details','#quality-organization-detail','.org-info')
            });

            $('#step-final').click(function(){
                var formData = {};
                $(".membership-form input, .membership-form select, .membership-form textarea").each(function() {
                    var inputName = this.name;
                    var inputValue = $(this).val();
                    formData[inputName] = inputValue;
                })
                getAmountDetail(
                    $("input[name='membership_category_id']").val(),
                    $("select[name='hospital_category_id']").val()
                );

                for (var id in formData) {
                    console.log(id);
                    if(id.indexOf('[]') !== -1){
                        console.log('[]');
                        var array_id = id.replace(/\[\]/g, '\\[\\]');
                        $("#" + array_id).text( isNullOrEmpty(formData[id]) ? 'Empty' : formData[id]);
                    }else{
                        $("#" + id).text( isNullOrEmpty(formData[id]) ? 'Empty' : formData[id]);
                    }

                }
                checkInput('#quality-organization-detail', '#quality-final-preview','.final-view')
            })

            $("#back-step-2").on("click", function() {
                backStep('#quality-organization-detail', '#quality-final-preview','.final-view')
            });
        });



        function getAmountDetail(membership_category_id,hospital_category_id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('payable.amount') }}',
                data: {
                    membership_category_id : membership_category_id,
                    hospital_category_id : hospital_category_id
                },
                success: function(response) {
                    $("#payabalAmount").text(response.data.currency_symbol + response.data.payable_amount);
                    if(response.data.total_discount != 0){
                        $("#discountedAmount").text(response.data.currency_symbol + response.data.total_discount);
                    }else{
                        $("#discountedAmount").hide();
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

    </script>
@endsection
