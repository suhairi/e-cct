$(document).ready(function() {
    
    $('#wilayah').change(function() {

        var localiti = $('#text_lokaliti');
        var options = "";
        
        $.ajax({
            type: "GET",
            url: "/user/API/getLokaliti/" + $("#wilayah").val(),
            success: function(localities) {

                $('#text_lokaliti').empty();

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

    $('#text_lokaliti').change(function() {

        console.log('locality changed!');

        var text_project = $('#text_projek');
        var options = "";

        // alert($('#lokaliti').val());
        
        $.ajax({
            type: "GET",
            url: "/user/API/getProjek/" + $("#lokaliti").val(),
            success: function(projects) {

                $('#text_projek').empty();

                $.each(projects, function(i, project) {
                   options += "<option value='" + project.id + "'>" + project.code + " - " + project.name + "</option>";
                });

                text_project.append(
                    "<select name='projek_id' class='form-control' id='lokaliti'>" +
                    "<option value=''>Projek</option>" +
                    options +
                    "</select>"
                );
            }
        });

    });

    // UTAMA TEXT FIELD
    $('#no_lot').change(function() {
        var value = $('#no_lot').val();
        if(value == '' || !$.isNumeric(value))
            $('#no_lot').val("0");
    });

    $('#fasa').change(function() {
        var value = $('#fasa').val();
        if(value == '' || !$.isNumeric(value))
            $('#fasa').val("0");
    });


    // HASIL TEXT FIELD
    $("[id^=data]").keyup(function() {
        assignZero();
        calcPurata();
    });

    $(":text").focus(function() {
        if($(this).val() == 0 || $(this).val() == '') {
            assignZero();
            $(this).val("");
        }
    });

    $(":text").focusout(function() {
        assignZero();
    });

    function assignZero() {

        $("[id^=data]").each(function(index, value) {
            // assign empty field with "0"
            if($('#' + $(this).attr('id')).val() == '')
                $('#' + $(this).attr('id')).val("0");

            // assign not a numeric with ""
            var value = $('#' + $(this).attr('id')).val();
            if(!$.isNumeric(value))
                $('#' + $(this).attr('id')).val("");            
        });
    }

    function calcPurata() {

        // ############################
        // 1 - Purata data?tangkai
        // ############################
        var purata = jumlah = bil = 0;
        $("[id^=data][id*=_tangkai]" ).each(function(index, value) {
            bil = index;
            let nilai = $('#' + $(this).attr('id')).val();
            jumlah += parseInt(nilai);
        });

        bil = bil + 1;
        purata = parseInt(jumlah / bil);
        $("#purata_tangkai").empty();
        $("#purata_tangkai").append(purata.toFixed(0));

        // ############################
        // 2 - Purata data?pertangkai
        // ############################
        var purata = jumlah = bil = 0;
        $("[id^=data][id*=_bilTangkai]" ).each(function(index, value) {
            bil = index;
            let nilai = $('#' + $(this).attr('id')).val();
            jumlah += parseInt(nilai);
        });

        bil = bil + 1;
        purata = parseInt(jumlah / bil);
        $("#purata_biji_per_tangkai").empty();
        $("#purata_biji_per_tangkai").append(purata.toFixed(0));

        // ############################
        // 3 - Purata data?bernas
        // ############################
        var purata = jumlah = bil = 0;
        $("[id^=data][id*=_bernas]" ).each(function(index, value) {
            bil = index;
            let nilai = $('#' + $(this).attr('id')).val();
            jumlah += parseInt(nilai);
        });

        bil = bil + 1;
        purata = parseFloat(jumlah / bil);
        $("#purata_peratus_bernas").empty();
        $("#purata_peratus_bernas").append(purata.toFixed(2));

        // ############################
        // 4 - Purata data?1000Biji
        // ############################
        var purata = jumlah = bil = 0;
        $("[id^=data][id*=_1000Biji]" ).each(function(index, value) {
            bil = index;
            let nilai = $('#' + $(this).attr('id')).val();
            jumlah += parseInt(nilai);
        });

        bil = bil + 1;
        purata = parseFloat(jumlah / bil);
        $("#purata_1000_biji").empty();
        $("#purata_1000_biji").append(purata.toFixed(3));
        
    }
});