$(document).on('change',"[name='state']",  function() {
    
    let state= $(this).find(':selected').data('id')
    
        el = $(this);
        $.get("https://www.caho.in/citybystate", "state_id=" + state, function(
            data) {
            $("[name='city']").html(data);
        })
    });
    
    $(document).ready(function()
{
    
     $.get("https://www.caho.in/statesbycountry", "country_id=101" , function(
            data) {
            $("[name='state']").html(data);
        })
})