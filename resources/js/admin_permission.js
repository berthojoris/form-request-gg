jQuery(function() {
    var table = $('#tbl_permissions').DataTable({
        processing: true,
        serverSide: true,
        ajax: route('permissionData'),
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