$(document).ready(function() {
    
    $('#wilayah').change(function() {

        var localiti = $('#data_lokaliti');
        var options = "";
        
        $.ajax({
            type: "GET",
            url: "/user/API/getLokaliti/" + $("#wilayah").val(),
            success: function(localities) {

                $('#data_lokaliti').empty();

                $.each(localities, function(i, locality) {
                   options += "<option value='" + locality.id + "'>" + locality.code + "</option>";
                });

                localiti.append(
                    "<select name='lokaliti_id' class='form-control' id='lokaliti'>" +
                    "<option value=''>Lokaliti</option>" +
                    options +
                    "</select>"
                );
            }
        });
    });

    $('#lokaliti').change(function() {
        alert('this');
    });

});