@extends('layouts.admin')

@section('content')
<div class="page-content container-fluid">
    <div class="row">
        <div class="col-xl-6 col-md-6 info-panel">
            <div class="card card-shadow">
                <div class="card-block bg-white p-20">
                    <button type="button" class="btn btn-floating btn-sm btn-warning">
                        <i class="icon wb-shopping-cart"></i>
                    </button>
                    <span class="ml-15 font-weight-400">TICKET REQUEST</span>
                    <div class="content-text text-center mb-0">
                        <span class="font-size-80 font-weight-600">{{ $ticket }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 info-panel">
            <div class="card card-shadow">
                <div class="card-block bg-white p-20">
                    <button type="button" class="btn btn-floating btn-sm btn-danger">
                        <i class="icon wb-eye"></i>
                    </button>
                    <span class="ml-15 font-weight-400">HISTORY TICKET REQUEST</span>
                    <div class="content-text text-center mb-0">
                        <span class="font-size-80 font-weight-600">{{ $history }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('body-class', 'dashboard')

@push('externalCSS')

@endpush

@push('pluginJS')

@endpush

@push('pageJS')

@endpush
