jQuery(function() {
    var table = $('#tbl_roles').DataTable({
        processing: true,
        serverSide: true,
        ajax: route('roleData'),
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
                render: function(data, type, row) {
                    return _.upperFirst(data)
                }
            },
            {
                data: 'guard_name'
            }
        ]
    })
})

function resetForm() {
    //
}

function submit() {
    $('#btnCreate').on('click', function(e) {
        e.preventDefault();
        $(this).addClass('hidden-xxl-down')
        $("#insert_loader").removeClass('hidden-xxl-down')
        $('.invalid-feedback').empty().hide()

        $.ajax({
            type: "POST",
            url: route('create_roles'),
            data: $('#form_add_role').serialize(),
            dataType: "json",
            success: function(response) {
                $('#modal_add_role').modal('hide')
                $('#tbl_user').DataTable().ajax.reload();
                showMsg("Notification", response.msg, "success")
            },
            error: function(err) {
                validationError()
                if (err.status === 422) {
                    $('.invalid-feedback').show()
                    var errors = $.parseJSON(err.responseText)
                    $.each(errors.errors, function(key, val) {
                        $("#" + key + "_error").html(val[0])
                    });
                } else if (err.status === 404) {
                    showMsg("Notification", "Data not found" + err.status, "error")
                } else {
                    showMsg("Notification", "Something wrong. Error code " + err.status, "error")
                }
            }
        })
    })
}