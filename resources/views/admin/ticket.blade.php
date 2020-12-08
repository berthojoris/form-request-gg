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
@endpush

@push('pluginJS')
<script src="{{ asset('global/vendor/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-responsive/dataTables.responsive.js') }}"></script>
@endpush

@push('pageJS')
<script src="{{ asset('js/admin_ticket.js') }}"></script>
@endpush