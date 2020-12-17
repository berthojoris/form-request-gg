@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-15">
                        <button id="btnAddRole" class="btn btn-outline btn-primary" type="button" data-target="#modal_add_role" data-toggle="modal" data-backdrop="static" data-keyboard="false">
                            <i class="icon wb-plus" aria-hidden="true"></i> Add Role
                        </button>
                    </div>
                </div>
            </div>
            <table id="tbl_roles" class="table table-hover dataTable table-striped w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role Name</th>
                        <th>Guard Name</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_add_role" aria-hidden="false" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple">
        <form class="modal-content" action="#" method="post" id="form_add_role">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleFormModalLabel">Create Role</h4>
                <input type="hidden" name="form_type" value="create">
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12 form-group">
                        <div class="input-group input-group-icon">
                            <span class="input-group-addon">
                            <span class="icon wb-user" aria-hidden="true"></span>
                            </span>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" autocomplete="off" />
                        </div>
                        <span class="invalid-feedback" role="alert" id="name_insert_error"></span>
                    </div>
                    <div class="col-xl-12 form-group">
                        <div class="input-group input-group-icon">
                            <span class="input-group-addon">
                            <span class="icon wb-tag" aria-hidden="true"></span>
                            </span>
                            <input type="text" class="form-control" name="guard_name" id="guard_name" placeholder="Guard Name" autocomplete="off" />
                        </div>
                        <span class="invalid-feedback" role="alert" id="guard_name_insert_error"></span>
                    </div>
                    <div class="col-md-12 float-right btnCreatePanel">
                        <button class="btn btn-primary btn-outline" id="btnCreate" type="button">Submit</button>
                    </div>
                    <div class="col-md-12 hidden-xxl-down" id="insert_loader">
                        <img src="{{ asset('assets/loader.gif') }}" alt="">
                    </div>
                </div>
            </div>
        </form>
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
<script src="{{ asset('js/admin_role.js') }}"></script>
@endpush