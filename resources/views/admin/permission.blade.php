@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-15">
                        <button id="btnAddPermission" class="btn btn-outline btn-primary" type="button" data-target="#modal_add_permission" data-toggle="modal" data-backdrop="static" data-keyboard="false">
                            <i class="icon wb-plus" aria-hidden="true"></i> Add Permission
                        </button>
                    </div>
                </div>
            </div>
            <table id="tbl_permissions" class="table table-hover dataTable table-striped w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Permission Name</th>
                        <th>Guard Name</th>
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
<script src="{{ asset('js/admin_permission.js') }}"></script>
@endpush