$(document).ready(function() {
    $('input[type="radio"]').click(function() {
        $("#input_city").val('')
        if ($(this).is(':checked')) {
            if ($(this).val() == "Selected City") {
                showSelectedCity()
            } else {
                hideSelectedCity()
            }
        }
    })

    if ($("input[type='radio']:checked").val() == "Selected City") {
        showSelectedCity()
    } else {
        hideSelectedCity()
    }
})

function hideSelectedCity() {
    $("#input_city").val('')
    $("#hideShow").addClass("hidePanel")
}

function showSelectedCity() {
    $("#hideShow").removeClass("hidePanel")
    $("#input_city").focus()
}