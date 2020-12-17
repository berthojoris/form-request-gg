@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-15">
                        <button id="addUserBtn" class="btn btn-outline btn-primary" type="button" data-target="#formAddUser" data-toggle="modal" data-backdrop="static" data-keyboard="false">
                            <i class="icon wb-plus" aria-hidden="true"></i> Add User
                        </button>
                    </div>
                </div>
            </div>
            <table id="tbl_user" class="table table-hover dataTable table-striped w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Verified</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="formAddUser" aria-hidden="false" aria-labelledby="exampleFormModalLabel" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple">
        <form class="modal-content" action="#" method="post" id="formUserRegistration">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleFormModalLabel">Create new user</h4>
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
                        <span class="invalid-feedback" role="alert" id="name_error">Error</span>
                    </div>
                    <div class="col-xl-12 form-group">
                        <div class="input-group input-group-icon">
                            <span class="input-group-addon">
                            <span class="icon wb-envelope" aria-hidden="true"></span>
                            </span>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" />
                        </div>
                        <span class="invalid-feedback" role="alert" id="email_error"></span>
                    </div>
                    <div class="col-xl-12 form-group">
                        <div class="input-group input-group-icon">
                            <span class="input-group-addon">
                            <span class="icon wb-lock" aria-hidden="true"></span>
                            </span>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                        </div>
                        <span class="invalid-feedback" role="alert" id="password_error"></span>
                    </div>
                    <div class="col-md-12 float-right btnCreatePanel">
                        <button class="btn btn-primary btn-outline" id="btnCreate" type="button">Submit</button>
                    </div>
                    <div class="col-md-12 hidden-xxl-down" id="loader">
                        <img src="{{ asset('assets/loader.gif') }}" alt="">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="formUpdateUser" aria-hidden="false" aria-labelledby="exampleFormModalLabel" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple">
        <form class="modal-content" action="#" method="post" id="formUpdateUserRegistrasi">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleFormModalLabel">Update user</h4>
                <input type="hidden" name="form_type" value="update">
                <input type="hidden" name="update_id" id="update_id" value="">
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12 form-group">
                        <div class="input-group input-group-icon">
                            <span class="input-group-addon">
                            <span class="icon wb-user" aria-hidden="true"></span>
                            </span>
                            <input type="text" class="form-control" name="update_name" id="update_name" placeholder="Name" />
                        </div>
                        <span class="invalid-feedback" role="alert" id="update_name_error"></span>
                    </div>
                    <div class="col-xl-12 form-group">
                        <div class="input-group input-group-icon">
                            <span class="input-group-addon">
                            <span class="icon wb-envelope" aria-hidden="true"></span>
                            </span>
                            <input type="email" class="form-control" name="update_email" id="update_email" placeholder="Email" />
                        </div>
                        <span class="invalid-feedback" role="alert" id="update_email_error"></span>
                    </div>
                    <div class="col-xl-12 form-group">
                        <div class="input-group input-group-icon">
                            <span class="input-group-addon">
                            <span class="icon wb-lock" aria-hidden="true"></span>
                            </span>
                            <input type="password" class="form-control" name="update_password" id="update_password" placeholder="Password" />
                        </div>
                        <span class="invalid-feedback" role="alert" id="update_password_error"></span>
                    </div>
                    <div class="col-md-12 float-right btnCreatePanel">
                        <button class="btn btn-primary btn-outline" id="btnUpdate" type="button">Update</button>
                    </div>
                    <div class="col-md-12 hidden-xxl-down" id="loaderUpdate">
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
<link rel="stylesheet" href="{{ asset('assets/examples/css/uikit/modals.css') }}">
@endpush

@push('pluginJS')
<script src="{{ asset('global/vendor/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('global/vendor/datatables.net-responsive/dataTables.responsive.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
@endpush

@push('pageJS')
<script src="{{ asset('js/admin_user.js') }}"></script>
@endpush