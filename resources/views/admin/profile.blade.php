@extends('layouts.admin')

@section('content')
<div class="page-content container-fluid">
    <div class="panel">
        {{-- <header class="panel-heading">
            <h3 class="panel-title">
                Horizontal Form
            </h3>
        </header> --}}
        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="col-md-6 col-lg-6">
                    <div class="example-wrap">
                        <h4 class="example-title">Update your profile</h4>
                        <div class="example">
                            @if(Session::has('profile'))
                                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                                {{ Session::get('profile') }}</p>
                            @endif
                            <form class="form-horizontal" method="post" action="{{ route('updateProfile') }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Your Name: </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" autocomplete="off" value="{{ $profile->name }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Your Email: </label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="nama@email.com" autocomplete="off" value="{{ $profile->email }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Your Password: </label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9 offset-md-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('body-class', 'dashboard')

@push('externalCSS')
<link rel="stylesheet" href="{{ asset('assets/examples/css/forms/layouts.css') }}">
@endpush

@push('pluginJS')

@endpush

@push('pageJS')

@endpush
