$(document).ready(function() {
    $('input[type="radio"]').click(function() {
        $("#input_city").val('')
        if ($(this).is(':checked')) {
            if ($(this).val() == "Selected City") {
                $("#hideShow").removeClass("hidePanel")
                $("#input_city").focus()
            } else {
                $("#hideShow").addClass("hidePanel")
            }
        }
    });
});