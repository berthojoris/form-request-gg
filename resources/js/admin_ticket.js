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
    });

    $('#tbl_ticket').on('click', 'tr', function() {
        var projectID = $('td', this).eq(1).text();
        $.ajax({
            type: "GET",
            url: route('detailTicket', projectID),
            dataType: "json",
            success: function(response) {
                $("#req_status").html("<span class='badge badge-info badge-lg'>" + response.status + "</span>")
                $("#req_project_id").html(response.project_id)
                $("#req_project_name").html(response.project_name)
                $("#req_departmen_request").html(response.departemen_request)
                $("#req_pic_request").html(response.pic_request)
                $("#req_pic_target").html(response.user_destination.name)
                $("#req_email").html(response.email_submited)
                $("#req_digital_assets").html(response.digital_asset)
                $("#req_background").html(response.background)
                $("#req_objective").html(response.objective)
                $("#req_audience").html(response.target_audience)
                $("#req_creative_consideration").html(response.creative_consideration)
                $("#req_support_other_channel").html(response.support_other_channel)
                $("#req_kpi").html(response.kpi)
                $("#req_requirement_rules").html(response.requirement_rules)
                $("#req_reference").html(response.reference)
                $("#req_project_brief").html("<a href='" + route('downloadFile', response.project_brief) + "'>" + response.project_brief + "</a>")
                $("#req_campaign_start").html(moment(response.campaign_period_start).format("MMM Do YY"))
                $("#req_campaign_end").html(moment(response.campaign_period_end).format("MMM Do YY"))
                $("#req_estimated_budget").html("Rp." + $.number(response.estimated_budget, 0, '.', '.'))
                $("#req_document_upload").html("<a href='" + route('downloadFile', response.document_upload) + "'>" + response.document_upload + "</a>")

                $('#modal_detail_request').modal({ backdrop: 'static', keyboard: false })
            }
        })
        $("#pid").html(projectID)
    });



    $('#modal_detail_request').on('hide.bs.modal', function() {
        $('[href="#tabDetailRequest"]').tab('show')
    })
})