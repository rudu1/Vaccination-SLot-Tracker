<script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

function getDistricts(state){
    console.log(state)
}

{/* 
$(document).ready(function() {
    $('#district').click(function() {
        $.post('https://cdn-api.co-vin.in/api/v2/admin/location/districts/', 12, function(data) {
            $.each(data.Destinations, function(i, v) {
                $('#state').append('<option value="' + v.destinationID + '">' + v.destinationName + '</option>');
            });
        });
    })
}); */}

$(document).ready(function() {
    $('#state').change(function() { 
        var selectedState=this.value;
        $.post('https://cdn-api.co-vin.in/api/v2/admin/location/districts/', selectedState, function(data) {
            {/* $.each(data.Destinations, function(i, v) {
                $('#state').append('<option value="' + v.destinationID + '">' + v.destinationName + '</option>');
            }); */}
        console.log(data);
        });
    })
});


</script>