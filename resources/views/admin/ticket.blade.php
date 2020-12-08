@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="panel">
        <div class="panel-body">
            <table id="tbl_ticket" class="table table-hover dataTable table-striped w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Project ID</th>
                        <th>Project Name</th>
                        <th>Department Name</th>
                        <th>PIC Request</th>
                        <th>PIC Digital</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('body-class', '')

@push('externalCSS')
<link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('global/fonts/font-awesome/font-awesome.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/examples/css/tables/datatable.css') }}"> --}}
@endpush

@push('pluginJS')
<script src="{{ asset('global/vendor/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-responsive/dataTables.responsive.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js') }}"></script>
{{-- <script src="{{ asset('global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-scroller/dataTables.scroller.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-buttons/dataTables.buttons.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-buttons/buttons.html5.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-buttons/buttons.flash.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-buttons/buttons.print.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-buttons/buttons.colVis.js') }}"></script>
<script src="{{ asset('global/vendor/asrange/jquery-asRange.min.js') }}"></script>
<script src="{{ asset('global/vendor/bootbox/bootbox.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js') }}"></script> --}}
@endpush

@push('pageJS')
<script src="{{ asset('js/admin_ticket.js') }}"></script>
@endpush