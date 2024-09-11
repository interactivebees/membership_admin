
 
  $(document).delegate("[name='state']", 'change', function() {
        el = $(this);
        let state= $(this).find(':selected').data('id')
        $.get("https://www.caho.in/citybystate", "state_id=" + state, function(
            data) {
            $("[name='city']").html(data);
        })
    });
    
    
    $(document).ready(function(){
        $.get("https://www.caho.in/countrydata", "", function(data) {
            $("[name='country']").html(data);   
        });
        $(document).delegate("[name='country']", 'change', function() {
        el = $(this);
         let country= $(this).find(':selected').data('id')
        $.get("https://www.caho.in/statesbycountry", "country_id=" + country, function(
            data) {
            $("[name='state']").html(data);
        })
 });
    });