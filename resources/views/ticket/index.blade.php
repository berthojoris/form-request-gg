@extends('layouts.public')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Submit your request</div>

            <div class="card-body">

                @if($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    {{ $error }}
                </div>
                @endforeach
                @endif

                <form method="POST" action="{{ route('ticket_store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Project ID</label>
                        <div class="col-md-6">
                            <input id="project_id" type="text"
                                class="form-control @error('project_id') is-invalid @enderror" name="project_id"
                                value="{{ old('project_id') }}" required autocomplete="off">

                            @error('project_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Project Name</label>
                        <div class="col-md-6">
                            <input id="project_name" type="text"
                                class="form-control @error('project_name') is-invalid @enderror" name="project_name"
                                value="{{ old('project_name') }}" required autocomplete="off">

                            @error('project_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Department Name</label>
                        <div class="col-md-6">
                            <select id="departemen_request" name="departemen_request" class="form-control">
                                <option value="BRAND">Brand</option>
                            </select>
                            @error('departemen_request')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">PIC</label>
                        <div class="col-md-6">
                            <select id="user_destination" name="user_destination" class="form-control">
                                <option value="1">Tania</option>
                                <option value="2">Bagus</option>
                                <option value="3">Tyo</option>
                                <option value="4">Chiqita</option>
                                <option value="5">Bonita</option>
                            </select>
                            @error('user_destination')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@push('custom_css')
<link href="{{asset('assets/css/custom.css')}}" />
@endpush