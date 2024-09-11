<div class="hospital-selection">
    <div class="input-group select-cat">
        <label>Are you a Group of Diagnostic Centre or Single Diagnostic Centre</label>
        <select name="hospital_type" class="classification @error('hospital_type') is-invalid @enderror" required>
            <option value="Single Diagnostic Centre">Single Diagnostic Centre</option>
            <option value="Group of Diagnostic Centre">Group of Diagnostic Centre</option>
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
        <label>Select Category</label>
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
        group += '    <h4 class="membership-heading">Group Diagnostic Details</h4>';
        group += '        <ul class="full-form">';
        group += '            <li>';
        group += '                <div class="input-group">';
        group += '                    <label>Group Diagnostic Centre Name</label>';
        group += '                    <input type="text" class="" name="group_hospital_name" value="{{ old('group_hospital_name') }}" required>';
        group += '                </div>';
        group += '            </li>';

        group += '                        <li>';
        group += '                            <div class="input-group">';
        group += '                            <label>Select Category</label>';
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
        group += '                        <label>No. of Hospitals in the Group</label>';
        group += '                        <input type="number" class="" name="no_of_hospital_in_the_group" value="{{ old('no_of_hospital_in_the_group',1) }}" required>';
        group += '                    </div>';
        group += '                </li>';
        group += '                <div class="group-hospital w-100 d-flex justify-content-between flex-wrap">';
        group += '                    <li>';
        group += '                        <div class="input-group">';
        group += '                            <label>Diagnostic Centre 1</label>';
        group += '                                <input type="text" class="" name="gp_hospital_name[]" required>';
        group += '                            </div>';
        group += '                        </li>';


        group += '                        <li>';
        group += '                            <div class="input-group">';
        group += '                            <label>Select Category</label>';
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
        group += '                    <label>Email</label>';
        group += '                    <input type="email" class="" name="gp_hospital_email[]" value="" required>';
        group += '                </div>';
        group += '            </li>';
        group += '            <li>';
        group += '                <div class="input-group">';
        group += '                    <label>Phone No.</label>';
        group += '                    <input type="text" class="" name="gp_hospital_mobile[]" value="" required>';
        group += '                </div>';
        group += '            </li>';
        group += '            </div>';
        group += '            <div class="append-div w-100"></div>';

        group += '       </ul>';
        group += '    </div>';


        let single = '';
        single += '<div class="input-group select-cat mt-5" >';
        single += '<label>Select Category</label>';
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
            if (selectedValue === 'Group of Diagnostic Centre') {
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
                div += '<div class="group-hospital w-100 d-flex justify-content-between flex-wrap">';
                div += '    <li>';
                div += '        <div class="input-group">';
                div += '             <label>Diagnostic Centre '+i+'</label>';
                div += '             <input type="text" class="" name="gp_hospital_name[]" required>';
                div += '        </div>';
                div += '    </li>';
                div += '    <li>';
                div += '         <div class="input-group">';
                div += '              <label>Select Category</label>';
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
                div += '                    <label>Email</label>';
                div += '                    <input type="email" class="" name="gp_hospital_email[]" value="" required>';
                div += '                </div>';
                div += '            </li>';
                div += '            <li>';
                div += '                <div class="input-group">';
                div += '                    <label>Phone No.</label>';
                div += '                    <input type="text" class="" name="gp_hospital_mobile[]" value="" required>';
                div += '                </div>';
                div += '            </li>';
                div += '       </div>';
                $(".append-div").append(div);
                i++;
            }
        });
    });
</script>
