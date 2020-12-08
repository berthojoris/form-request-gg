@extends('layouts.admin')

@section('content')
<div class="page-content container-fluid">
    <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xxl-3">
            <div class="row h-full">

                <div class="col-xxl-12 col-lg-6 h-p50 h-only-lg-p100 h-only-xl-p100">
                    <div class="card card-shadow card-inverse bg-blue-600 white">
                        <div class="card-block p-30">
                            <div class="counter counter-lg counter-inverse text-left">
                                <div class="counter-label mb-20">
                                    <div>OVERALL SALES</div>
                                    <div>Lorem ipsum dolor sit amet</div>
                                </div>
                                <div class="counter-number-group mb-15">
                                    <span class="counter-number-related">$</span>
                                    <span class="counter-number">14,000</span>
                                </div>
                                <div class="counter-label">
                                    <div class="progress progress-xs mb-10 bg-blue-800">
                                        <div class="progress-bar progress-bar-info bg-white" style="width: 42%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="42" role="progressbar">
                                            <span class="sr-only">42%</span>
                                        </div>
                                    </div>
                                    <div class="counter counter-sm text-left">
                                        <div class="counter-number-group">
                                            <span class="counter-number font-size-14">42%</span>
                                            <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-12 col-lg-6 h-p50 h-only-lg-p100 h-only-xl-p100">
                    <div class="card card-shadow card-inverse bg-red-600 white">
                        <div class="card-block p-30">
                            <div class="counter counter-lg counter-inverse text-left">
                                <div class="counter-label mb-20">
                                    <div>TODAY'S SALES</div>
                                    <div>Lorem ipsum dolor sit amet</div>
                                </div>
                                <div class="counter-number-group mb-10">
                                    <span class="counter-number-related">$</span>
                                    <span class="counter-number">41,160</span>
                                </div>
                                <div class="counter-label">
                                    <div class="progress progress-xs mb-10 bg-red-800">
                                        <div class="progress-bar progress-bar-info bg-white" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar">
                                            <span class="sr-only">70%</span>
                                        </div>
                                    </div>
                                    <div class="counter counter-sm text-left">
                                        <div class="counter-number-group">
                                            <span class="counter-number font-size-14">70%</span>
                                            <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

@endpush

@push('pluginJS')

@endpush

@push('pageJS')

@endpush
