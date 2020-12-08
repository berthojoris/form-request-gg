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
                    return "<span class='badge badge-info'>" + data + "</span>";
                }
            },
            {
                data: 'project_id'
            }
        ]
    });
})