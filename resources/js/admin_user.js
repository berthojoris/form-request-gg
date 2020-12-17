jQuery(function() {
    var table = $('#tbl_user').DataTable({
        processing: true,
        serverSide: true,
        ajax: route('user_data'),
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
            },
            {
                data: 'email_verified_at',
                render: function(data, type, row) {
                    if (data === null) {
                        return "<span class='badge badge-danger badge badgeCustom'>Not verified yet</span>"
                    } else {
                        return "<span class='badge badge-info badge badgeCustom'>" + moment(data).startOf('day').fromNow() + "</span>"
                    }
                }
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
    })

    table.on('click', '.editBtn', function(e) {
        e.preventDefault();
        $tr = $(this).closest('tr')
        var data = table.row($tr).data()
        showData(data.id)
    })

    table.on('click', '.deleteBtn', function(e) {
        e.preventDefault();
        $tr = $(this).closest('tr')
        var data = table.row($tr).data()
        deleteData(data.id)
    })


    $('#formAddUser').on('shown.bs.modal', function() {
        reset()
    })

    $('#formAddUser').on('hide.bs.modal', function() {
        reset()
        $('.invalid-feedback').empty()
        $('.invalid-feedback').hide()
    })

    $('#formUpdateUser').on('hide.bs.modal', function() {
        reset()
        $('.invalid-feedback').empty()
        $('.invalid-feedback').hide()
    })
})

$('#btnCreate').on('click', function(e) {
    e.preventDefault();
    $(this).addClass('hidden-xxl-down')
    $("#loader").removeClass('hidden-xxl-down')
    $('.invalid-feedback').empty()
    $('.invalid-feedback').hide()

    $.ajax({
        type: "POST",
        url: route('userStore'),
        data: $('#formUserRegistration').serialize(),
        dataType: "json",
        success: function(response) {
            $('#formAddUser').modal('hide')
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
    });
});

function validationError() {
    $("#btnCreate").removeClass('hidden-xxl-down')
    $("#loader").addClass('hidden-xxl-down')
}

function reset() {
    $('#formUserRegistration')[0].reset()
    $('#formUpdateUserRegistrasi')[0].reset()
    $("#btnCreate").removeClass('hidden-xxl-down')
    $("#btnUpdate").removeClass('hidden-xxl-down')
    $("#loader").addClass('hidden-xxl-down')
    $("#loaderUpdate").addClass('hidden-xxl-down')
    $('#name').focus()
}

function deleteData(id) {

    $.ajax({
        type: "GET",
        url: route('userDestroy', id),
        success: function(response) {
            $('#tbl_user').DataTable().ajax.reload()
            showMsg("Notification", response.msg, "success")
        },
        error: function(err) {
            if (err.status === 422) {
                //
            } else {
                showMsg("Notification", "Something wrong. Error code " + err.status, "error")
            }
        }
    })
}

function showData(id) {

    $.ajax({
        type: "GET",
        url: route('userEdit', id),
        data: $('#formUserRegistration').serialize(),
        dataType: "json",
        success: function(response) {
            $("#update_id").val(response.data.id)
            $("#update_name").val(response.data.name)
            $("#update_email").val(response.data.email)
            $("#update_password").val('')
            $('#formUpdateUser').modal({ backdrop: 'static', keyboard: false })
        },
        error: function(err) {
            if (err.status === 422) {
                //
            } else {
                showMsg("Notification", "Something wrong. Error code " + err.status, "error")
            }
        }
    })
}

$('#btnUpdate').on('click', function(e) {
    e.preventDefault();
    $(this).addClass('hidden-xxl-down')
    $("#loaderUpdate").removeClass('hidden-xxl-down')
    $('.invalid-feedback').empty()
    $('.invalid-feedback').hide()

    $.ajax({
        type: "POST",
        url: route('userUpdate'),
        data: $('#formUpdateUserRegistrasi').serialize(),
        dataType: "json",
        success: function(response) {
            $('#formUpdateUser').modal('hide')
            $('#tbl_user').DataTable().ajax.reload()
            showMsg("Notification", response.msg, "success")
        },
        error: function(err) {
            $('#btnUpdate').removeClass('hidden-xxl-down')
            $("#loaderUpdate").addClass('hidden-xxl-down')
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
    });
})