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

<div class="modal fade" id="modal_detail_request" aria-hidden="false" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-lg">
        <form class="modal-content" action="#" method="post" id="form_add_role">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleFormModalLabel">Detail Project # <span id="pid"></span></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="example-wrap">
                            <div class="nav-tabs-horizontal" data-plugin="tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#tabDetailRequest" aria-controls="tabDetailRequest" role="tab" aria-selected="true">Detail Request</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tabHistoryRequest" aria-controls="tabHistoryRequest" role="tab" aria-selected="false">History Request</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tabAddHistory" aria-controls="tabAddHistory" role="tab" aria-selected="false">Add History</a></li>
                                </ul>
                                <div class="tab-content pt-20">
                                    <div class="tab-pane active" id="tabDetailRequest" role="tabpanel">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td style="width: 30%">Status</td>
                                                <td id="req_status"></td>
                                            </tr>
                                            <tr>
                                                <td>Project ID</td>
                                                <td id="req_project_id"></td>
                                            </tr>
                                            <tr>
                                                <td>Project Name</td>
                                                <td id="req_project_name"></td>
                                            </tr>
                                            <tr>
                                                <td>Departemen Request</td>
                                                <td id="req_departmen_request"></td>
                                            </tr>
                                            <tr>
                                                <td>PIC Request</td>
                                                <td id="req_pic_request"></td>
                                            </tr>
                                            <tr>
                                                <td>PIC Target</td>
                                                <td id="req_pic_target"></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td id="req_email"></td>
                                            </tr>
                                            <tr>
                                                <td>Digital Assets</td>
                                                <td id="req_digital_assets"></td>
                                            </tr>
                                            <tr>
                                                <td>Background</td>
                                                <td id="req_background"></td>
                                            </tr>
                                            <tr>
                                                <td>Objective</td>
                                                <td id="req_objective"></td>
                                            </tr>
                                            <tr>
                                                <td>Target Audience</td>
                                                <td id="req_audience"></td>
                                            </tr>
                                            <tr>
                                                <td>Creative Consideration</td>
                                                <td id="req_creative_consideration"></td>
                                            </tr>
                                            <tr>
                                                <td>Support Other Channel</td>
                                                <td id="req_support_other_channel"></td>
                                            </tr>
                                            <tr>
                                                <td>KPI</td>
                                                <td id="req_kpi"></td>
                                            </tr>
                                            <tr>
                                                <td>Requirement Rules</td>
                                                <td id="req_requirement_rules"></td>
                                            </tr>
                                            <tr>
                                                <td>Reference</td>
                                                <td id="req_reference"></td>
                                            </tr>
                                            <tr>
                                                <td>Project Brief</td>
                                                <td id="req_project_brief"></td>
                                            </tr>
                                            <tr>
                                                <td>Campaign Start</td>
                                                <td id="req_campaign_start"></td>
                                            </tr>
                                            <tr>
                                                <td>Campaign End</td>
                                                <td id="req_campaign_end"></td>
                                            </tr>
                                            <tr>
                                                <td>Estimated Budget</td>
                                                <td id="req_estimated_budget"></td>
                                            </tr>
                                            <tr>
                                                <td>Document Upload</td>
                                                <td id="req_document_upload"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tabHistoryRequest" role="tabpanel"></div>
                                    <div class="tab-pane" id="tabAddHistory" role="tabpanel"></div>
                                </div>
                            </div>
                        </div>
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
<script src="{{ asset('global/vendor/matchheight/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('global/js/Plugin/responsive-tabs.js') }}"></script>
<script src="{{ asset('global/js/Plugin/closeable-tabs.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="{{ asset('js/number.min.js') }}"></script>
@endpush

@push('pageJS')
<script src="{{ asset('js/admin_ticket.js') }}"></script>
@endpush