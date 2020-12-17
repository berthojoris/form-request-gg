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
        alert(projectID)
    });
})