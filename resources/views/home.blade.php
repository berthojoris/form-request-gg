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
                        <span class="font-size-40 font-weight-100">{{ $ticket }}</span>
                        <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
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
                        <span class="font-size-40 font-weight-100">{{ $history }}</span>
                        <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
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
