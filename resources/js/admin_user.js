jQuery(function() {
    $('#tbl_user').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseURL + '/data/user',
        order: [
            [0, "desc"]
        ],
        language: {
            processing: "<img src='assets/loading.svg'>",
        },
        columns: [{
                data: 'id',
                visible: false,
                searchable: false
            },
            {
                data: 'name',
            },
            {
                data: 'email'
            }
        ]
    });

    $('#formAddUser').on('shown.bs.modal', function() {
        reset()
    })


})

$('#btnCreate').on('click', function(e) {
    e.preventDefault();
    $(this).addClass('d-none')
    $("#loader").removeClass('d-none')
    $('.invalid-feedback').empty()
    $('.invalid-feedback').hide()

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        url: baseURL + '/data/user-store',
        data: $('#formUserRegistration').serialize(),
        dataType: "json",
        success: function(response) {
            resetCloseModal()
            successMsg("Notify", "User Created", "success")
        },
        error: function(err) {
            if (err.status == 422) { // when status code is 422, it's a validation issue
                validationError()
                $('.invalid-feedback').show()
                console.log(err.responseJSON);

                // you can loop through the errors object and show it to the user
                console.warn(err.responseJSON.errors);
                // display errors on each form field
                $.each(err.responseJSON.errors, function(i, error) {
                    var el = $(document).find('[name="' + i + '"]');
                    console.log(el.parent().next().html("<strong>" + error[0] + "</strong>"));
                });
            }
        }
    });
});

function validationError() {
    $("#btnCreate").removeClass('d-none')
    $("#loader").addClass('d-none')
}

function reset() {
    $('#formUserRegistration')[0].reset()
    $("#btnCreate").removeClass('d-none')
    $("#loader").addClass('d-none')
    $('#name').focus()
}

function resetCloseModal() {
    $('#formUserRegistration')[0].reset()
    $("#btnCreate").removeClass('d-none')
    $("#loader").addClass('d-none')
    $('#formAddUser').modal('hide')
}