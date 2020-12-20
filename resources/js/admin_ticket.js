jQuery(function() {
    $('#tbl_ticket').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseURL + '/data/ticket',
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
                data: 'status',
                render: function(data, type, row) {
                    if (data == 'CLOSE') {
                        return "<span class='badge badge-danger badge-lg'>" + data + "</span>";
                    } else {
                        return "<span class='badge badge-info badge-lg'>" + data + "</span>";
                    }
                }
            },
            {
                data: 'project_id',
            },
            {
                data: 'project_name'
            },
            {
                data: 'departemen_request'
            },
            {
                data: 'pic_request',
                sortable: false,
            },
            {
                data: 'userDestination',
                name: 'userDestination.name',
                sortable: false,
            }
        ]
    })

    function buildArrayData(payload) {
        if (_.isArray(payload)) {
            var html = "";
            _.forEach(payload, function(value) {
                html += "<li> <i class='wb-check' aria-hidden='true'></i>" + value + "</li>"
            })
            return "<ul class='list-icons'>" + html + "</ul>"
        }
    }

    $('#tbl_ticket').on('click', 'tr', function() {
        var projectID = $('td', this).eq(1).text()
        alertify.success('OPEN PROJECT ID <b>' + projectID + '</b>')
        $.ajax({
            type: "POST",
            url: route('detailTicket', projectID),
            dataType: "json",
            data: {
                pid: projectID
            },
            success: function(response) {
                $("#ticket_id").val(response.id)
                $("#req_status").html("<span class='badge badge-info badge-lg'>" + response.status + "</span>")
                $("#req_project_id").html(response.project_id)
                $("#req_project_name").html(response.project_name)
                $("#req_departmen_request").html(response.departemen_request)
                $("#req_pic_request").html(response.pic_request)
                $("#req_pic_target").html(response.user_destination.name)
                $("#req_email").html(response.email_submited)
                $("#req_digital_assets").html(buildArrayData(response.digital_asset))
                $("#req_background").html(response.background)
                $("#req_objective").html(response.objective)
                $("#req_audience").html(response.target_audience)
                $("#req_creative_consideration").html(response.creative_consideration)
                $("#req_support_other_channel").html(response.support_other_channel)
                $("#req_kpi").html(response.kpi)
                $("#req_requirement_rules").html(response.requirement_rules)
                $("#req_reference").html(response.reference)
                $("#req_project_brief").html("<a href='" + route('downloadRequestFile', response.project_brief) + "' target='_blank'>" + response.project_brief + "</a>")
                $("#req_campaign_start").html(moment(response.campaign_period_start).format("MMM Do YY"))
                $("#req_campaign_end").html(moment(response.campaign_period_end).format("MMM Do YY"))
                $("#req_estimated_budget").html("Rp." + $.number(response.estimated_budget, 0, '.', '.'))
                $("#req_document_upload").html("<a href='" + route('downloadRequestFile', response.document_upload) + "' target='_blank'>" + response.document_upload + "</a>")

                $('#modal_detail_request').modal({ backdrop: 'static', keyboard: false })
            },
            error: function(err) {
                if (err.status === 404) {
                    showMsg("Notification", "Data not found" + err.status, "error")
                } else {
                    showMsg("Notification", "Something wrong. Error code " + err.status, "error")
                }
            }
        })
        $("#pid").html(projectID)
        $("#projectID").val(projectID)
    });



    $('#modal_detail_request').on('hide.bs.modal', function() {
        $('.invalid-feedback').empty()
        $('.invalid-feedback').hide()
        $("#upFile").val('')
        $("#note").val('')
        $('[href="#tabDetailRequest"]').tab('show')
        $("select#status").prop('selectedIndex', 0)
    })

    //https://github.com/msurguy/ladda-bootstrap

    $("#form_create_history").on('submit', function(e) {
        e.preventDefault()
        $("#btnSubmitHistory").prop("disabled", true).html("Submiting....")
        $('.invalid-feedback').empty()
        $('.invalid-feedback').hide()
        $.ajax({
            type: "POST",
            url: route('createDetail'),
            data: new FormData(this),
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                resetForm()
                showMsg("Notification", response.msg, "success")
                $("#btnSubmitHistory").prop("disabled", false).html("Save")
            },
            error: function(err) {
                if (err.status === 422) {
                    $('.invalid-feedback').show()
                    var errors = $.parseJSON(err.responseText)
                    $.each(errors.errors, function(key, val) {
                        $("#" + key + "_error").html(val[0])
                    });
                } else if (err.status === 404) {
                    resetForm()
                    showMsg("Notification", "Data not found" + err.status, "error")
                } else {
                    resetForm()
                    showMsg("Notification", "Something wrong. Error code " + err.status, "error")
                }
                $("#btnSubmitHistory").prop("disabled", false).html("Save")
            }
        })
    })
})

function resetForm() {
    $("select").prop('selectedIndex', 0)
    $(':input')
        .not(':button, :submit, :reset, :hidden, select')
        .val('')
        .prop('checked', false)
}

$('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
    $('.invalid-feedback').empty()
    $('.invalid-feedback').hide()
    var target = $(e.target).attr("href")
    if (target == '#tabHistoryRequest') {
        loadHistoryManual($("#projectID").val())
    }
})

function statusBuilder(status) {
    var className = ''
    if (status == "ON_PROGRESS") {
        className = 'badge-success';
    } else if (status == "PENDING") {
        className = 'badge-warning';
    } else if (status == "CANCELED") {
        className = 'badge-danger';
    } else {
        className = 'badge-info';
    }
    var html = '<b><span class="badge ' + className + ' badge-lg">' + status + '</span></b>'
    return html
}

function attachmentFile(fileName) {
    if (!_.isEmpty(fileName)) {
        return '<div class="alert alert-success" role="alert">\
                    <a href="' + route('downloadHistoryFile', fileName) + '" target="_blank">Download Attachment File</a>\
                </div>'
    } else {
        return ""
    }
}

function loadHistoryManual(pid) {
    $("#dataHistory").empty()
    $("#loadingHistory").removeClass("hidden-xxl-down");
    $.ajax({
        type: "POST",
        url: route('detailTicket'),
        dataType: "json",
        data: {
            pid: pid
        },
        success: function(response) {
            $("#loadingHistory").addClass("hidden-xxl-down");
            if (_.isEmpty(response.history)) {
                $("#dataHistory").html('<div class="alert alert-info alert-dismissible" role="alert">History is empty</div>')
            } else {
                _.forEach(response.history, function(value, key) {
                    $("#dataHistory").append('\
                    <div class="list-group">\
                        <a class="list-group-item flex-column align-items-start" href="javascript:void(0)">\
                            <h4 class="list-group-item-heading mt-0 mb-5"> Status : ' + statusBuilder(value.status) + ' </h4>\
                            <p class="mb-0">' + value.note + '</p> \
                        </a>' + attachmentFile(value.document_upload) + '\
                    </div>');
                })
            }
        }
    })
}