<div class="hospital-selection">
    <div class="input-group select-cat">
        <label>Are you a Group of Hospitals or Single Hospital*</label>
        <select name="hospital_type" class="classification @error('hospital_type') is-invalid @enderror" required>
            <option value="Single Hospital">Single Hospital</option>
            <option value="Group of Hospitals">Group of Hospitals</option>
        </select>
    </div>
</div>


{{-- For Group selection --}}
<div class="" id="group_hospital_details"></div>
<div class="group-hospital w-100 text-end border-0 p-0 mt-3" id="addMoreButton" style="display: none">
    <a href="javascript:void(0)" class="common-btn mt-4 add-more-hosp">Add More Hospitals +</a>
</div>

{{-- For Single selection --}}
<div id="single_hospital_details">
    <div class="input-group select-cat mt-5" >
        <label>Select Category*</label>
        <select name="hospital_category_id" class="classification @error('hospital_category_id') is-invalid @enderror" required>
            <option value="">Select</option>
            @foreach ($hospitalCategories as $hospitalCategorie)
                <option value="{{ $hospitalCategorie->id }}" {{ old('hospital_category_id') === $hospitalCategorie->id ? 'selected' : '' }}>{{ $hospitalCategorie->name }}</option>
            @endforeach
        </select>
    </div>
</div>


<script   src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        let group = '';
        group += '<div class="inner-box">';
        group += '    <h4 class="membership-heading">Group Hospitals Details</h4>';
        group += '        <ul class="full-form">';
        group += '            <li>';
        group += '                <div class="input-group">';
        group += '                    <label>Group Hospital Name*</label>';
        group += '                    <input type="text" class="" name="group_hospital_name" value="{{ old('group_hospital_name') }}" required>';
        group += '                </div>';
        group += '            </li>';

        group += '                        <li>';
        group += '                            <div class="input-group">';
        group += '                            <label>Select Category*</label>';
        group += '                        <select name="hospital_category_id" class="" required>';
        group += '                            <option value="">Select</option>';
                                    @foreach ($hospitalCategories as $hospitalCategorie)
        group += '                         <option value="{{ $hospitalCategorie->id }}" {{ old('hospital_category_id') === $hospitalCategorie->id ? 'selected' : '' }}>{{ $hospitalCategorie->name }}</option>';

                                    @endforeach
        group += '                        </select>';
        group += '                    </div>';
        group += '                </li>';


        group += '                <li>';
        group += '                    <div class="input-group">';
        group += '                        <label>No. of Hospitals in the Group*</label>';
        group += '                        <input type="number" class="" name="no_of_hospital_in_the_group" value="{{ old('no_of_hospital_in_the_group',2) }}" required>';
        group += '                    </div>';
        group += '                </li>';
        group += '                <div class="group-hospital w-100 d-flex justify-content-between flex-wrap group-hospital-div">';
        group += '                    <li>';
        group += '                        <div class="input-group">';
        group += '                            <label>Hospital Name <span>1</span>*</label>';
        group += '                                <input type="text" class="" name="gp_hospital_name[]" required>';
        group += '                            </div>';
        group += '                        </li>';


        group += '                        <li>';
        group += '                            <div class="input-group">';
        group += '                            <label>Select Category*</label>';
        group += '                        <select name="gp_hospital_categories_id[]" class="" required>';
        group += '                            <option value="">Select</option>';
                                    @foreach ($hospitalCategories as $hospitalCategorie)
        group += '                         <option value="{{ $hospitalCategorie->id }}" {{ old('gp_hospital_categories_id') === $hospitalCategorie->id ? 'selected' : '' }}>{{ $hospitalCategorie->name }}</option>';
                                    @endforeach
        group += '                        </select>';
        group += '                    </div>';
        group += '                </li>';
        group += '            <li>';
        group += '                <div class="input-group">';
        group += '                    <label>Email*</label>';
        group += '                    <input type="email" class="" name="gp_hospital_email[]" value="{{ old('gp_hospital_email') }}" required>';
        group += '                </div>';
        group += '            </li>';
        group += '            <li>';
        group += '                <div class="input-group">';
        group += '                    <label>Phone No.*</label>';
        group += '                    <input type="tel" class="" name="gp_hospital_mobile[]" value="{{ old('group_hospital_mobile') }}" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" minlength="10" maxlength="10" required>';
        group += '                </div>';
        group += '            </li>';
        group += '            </div>';
        group += '            <div class="append-div w-100"></div>';

        group += '       </ul>';
        group += '    </div>';


        let single = '';
        single += '<div class="input-group select-cat mt-5" >';
        single += '<label>Select Category*</label>';
        single += '<select name="hospital_category_id" class="classification @error('hospital_category_id') is-invalid @enderror" required>';
        single += '<option value="">Select</option>';
            @foreach ($hospitalCategories as $hospitalCategorie)
        single += '    <option value="{{ $hospitalCategorie->id }}" {{ old('hospital_category_id') === $hospitalCategorie->id ? 'selected' : '' }}>{{ $hospitalCategorie->name }}</option>';
            @endforeach
        single += '</select>';
        single += '</div>';

        let i = 2;
        $("select[name='hospital_type']").on("change", function() {
            const selectedValue = $(this).val();
            if (selectedValue === 'Group of Hospitals') {
                $('#group_hospital_detail').show(); // In Preview page Group Hospital Detail section Show
                $('#addMoreButton').show();
                $('#group_hospital_details').append(group);
                $('#single_hospital_details div').remove();
            } else {
                $('#group_hospital_detail').hide(); // In Preview page Group Hospital Detail section Hide
                $('#addMoreButton').hide();
                $('#group_hospital_details div:first').remove();
                $('#single_hospital_details').append(single);
            }
        });

        $('.add-more-hosp').click(function(){
            let numberOfHospital = $("input[name='no_of_hospital_in_the_group']").val();
            if(numberOfHospital === null || numberOfHospital.trim() === '' ){
                alert('Please Enter No. of Hospitals in the Group');
            }
            if(numberOfHospital >= i){
                let div ='';
                div += '<div class="group-hospital w-100 d-flex justify-content-between flex-wrap group-hospital-div">';
                div += '    <ul class="w-100 d-flex justify-content-between flex-wrap">';
                div += '    <li>';
                div += '        <div class="input-group">';
                div += '             <label>Hospital Name <span>'+i+'</span>*</label>';
                div += '             <input type="text" class="" name="gp_hospital_name[]" required>';
                div += '        </div>';
                div += '    </li>';
                div += '    <li>';
                div += '         <div class="input-group">';
                div += '              <label>Select Category*</label>';
                div += '              <select name="gp_hospital_categories_id[]" class="" required>';
                div += '                    <option value="">Select</option>'

                @foreach ($hospitalCategories as $hospitalCategorie)
                div +=                      '<option value="{{ $hospitalCategorie->id }}" {{ old('gp_hospital_categories_id') === $hospitalCategorie->id ? 'selected' : '' }}>{{ $hospitalCategorie->name }}</option>';
                @endforeach

                div += '              </select>';
                div += '         </div>';
                div += '    </li>';


                div += '            <li>';
                div += '                <div class="input-group">';
                div += '                    <label>Email*</label>';
                div += '                    <input type="email" class="" name="gp_hospital_email[]" value="{{ old('gp_hospital_email') }}" required>';
                div += '                </div>';
                div += '            </li>';
                div += '            <li>';
                div += '                <div class="input-group">';
                div += '                    <label>Phone No.*</label>';
                div += '                    <input type="tel" class="" name="gp_hospital_mobile[]" value="{{ old('group_hospital_mobile') }}" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" minlength="10" maxlength="10" required>';
                div += '                </div>';
                div += '            </li>';
                div += '            </ul>';
                div += '       <div class="delete-coauthor"><i class="fa fa-trash"></i></div>';
                div += '       </div>';
                
                $(".append-div").append(div);
                i++;
            }
            else{
                Swal.fire({
                    text: 'Please Add More Number for adding the Hospitals',
                    icon: 'warning',
                    confirmButtonText: 'Okay'
                });
            }
        });
        $(document).on('click', '.delete-coauthor', function(){
            $(this).closest('.group-hospital').remove(); // Remove the corresponding hospital group
            $(this).remove(); // Remove the delete button itself
            i--; // Decrement the counter
            
            let init = 0;
            $(".group-hospital-div").each(function () {
                $(this).find("span").text(++init);
            });
        });
    });
</script>
