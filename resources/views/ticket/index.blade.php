@extends('layouts.public')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Digital Request Form</div>

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

                <form method="POST" action="{{ route('ticket_store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Project ID<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="project_id" type="text"
                                class="form-control fieldColor @error('project_id') is-invalid @enderror"
                                name="project_id" value="{{ session('projectid') }}" readonly>

                            @error('project_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right require">Project Name<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="project_name" type="text"
                                class="form-control fieldColor @error('project_name') is-invalid @enderror"
                                name="project_name" value="{{ old('project_name') }}" autocomplete="off">

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
                            <select id="departemen_request" name="departemen_request" class="form-control fieldColor">
                                @foreach ($brandName as $key => $val)
                                <option value="{{ $key }}">{{ $val }}</option>
                                @endforeach
                            </select>
                            @error('departemen_request')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="pic_request" type="text"
                                class="form-control fieldColor @error('pic_request') is-invalid @enderror"
                                name="pic_request" value="{{ old('pic_request') }}" autocomplete="off">
                            @error('pic_request')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Email<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="email_submited" type="text"
                                class="form-control fieldColor @error('email_submited') is-invalid @enderror"
                                name="email_submited" value="{{ old('email_submited') }}" autocomplete="off">
                            @error('email_submited')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">PIC Digital</label>
                        <div class="col-md-6">
                            <select id="user_destination" name="user_destination" class="form-control fieldColor">
                                @foreach ($accountDigital as $key => $val)
                                <option value="{{ $key }}">{{ $val }}</option>
                                @endforeach
                            </select>
                            @error('user_destination')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Digital Asset<span
                                class="required">*</span></label>
                        <div class="col-md-3 @error('digital_asset') is-invalid @enderror">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" name="digital_asset[]">
                                <label for="digital_asset[]">Webiste</label>
                            </div>
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" name="digital_asset[]">
                                <label for="digital_asset[]">Mobile Apps</label>
                            </div>
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" name="digital_asset[]">
                                <label for="digital_asset[]">Instagram</label>
                            </div>
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" name="digital_asset[]">
                                <label for="digital_asset[]">Facebook</label>
                            </div>
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" name="digital_asset[]">
                                <label for="digital_asset[]">Twitter</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" name="digital_asset[]">
                                <label for="digital_asset[]">Youtube</label>
                            </div>
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" name="digital_asset[]">
                                <label for="digital_asset[]">Facebook Group</label>
                            </div>
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" name="digital_asset[]">
                                <label for="digital_asset[]">SMS Blast</label>
                            </div>
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" name="digital_asset[]">
                                <label for="digital_asset[]">Email Blast</label>
                            </div>
                        </div>
                        @error('digital_asset')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Background<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <textarea class="form-control fieldColor @error('background') is-invalid @enderror"
                                id="background" name="background" rows="3">{{ old('background') }}</textarea>
                            @error('background')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Objective<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <textarea class="form-control fieldColor @error('objective') is-invalid @enderror"
                                id="objective" name="objective" rows="3">{{ old('objective') }}</textarea>
                            @error('objective')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Target Audience<span
                                class="required">*</span></label>
                        <div class="col-md-6 @error('target_audience') is-invalid @enderror">
                            <div class="radio-custom checkbox-primary">
                                <input type="radio" name="target_audience">
                                <label for="target_audience">National Wide</label>
                            </div>
                            <div class="radio-custom checkbox-primary">
                                <input type="radio" name="target_audience">
                                <label for="target_audience">Input Your City</label>
                            </div>
                        </div>
                        @error('target_audience')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Creatif Consideration<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="creatif_consideration" type="text"
                                class="form-control fieldColor @error('creatif_consideration') is-invalid @enderror"
                                name="creatif_consideration" value="{{ old('creatif_consideration') }}"
                                autocomplete="off">
                            @error('creatif_consideration')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Support Other Channel<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="support_other_channel" type="text"
                                class="form-control fieldColor @error('support_other_channel') is-invalid @enderror"
                                name="support_other_channel" value="{{ old('support_other_channel') }}"
                                autocomplete="off">
                            @error('support_other_channel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">KPI<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="kpi" type="text"
                                class="form-control fieldColor @error('kpi') is-invalid @enderror" name="kpi"
                                value="{{ old('kpi') }}" autocomplete="off">
                            @error('kpi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Requiremen Rules<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="requirement_rules" type="text"
                                class="form-control fieldColor @error('requirement_rules') is-invalid @enderror"
                                name="requirement_rules" value="{{ old('requirement_rules') }}" autocomplete="off">
                            @error('requirement_rules')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Reference<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="reference" type="text"
                                class="form-control fieldColor @error('reference') is-invalid @enderror"
                                name="reference" value="{{ old('reference') }}" autocomplete="off">
                            @error('reference')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Project Brief</label>
                        <div class="col-md-6">
                            {{-- <input id="project_brief" type="text"
                                class="form-control fieldColor @error('project_brief') is-invalid @enderror"
                                name="project_brief" value="{{ old('project_brief') }}" autocomplete="off"> --}}
                            <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""
                                name="project_brief" class="@error('project_brief') is-invalid @enderror" />
                            @error('project_brief') <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Project Timeline<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <div class="input-daterange" data-plugin="datepicker">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="icon wb-calendar" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" name="start" />
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control" name="end" />
                                </div>
                            </div>
                            @error('campaign_period_start')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Estimate Budget<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input type="text"
                                class="form-control fieldColor @error('project_brief') is-invalid @enderror"
                                id="inputCurrency" data-plugin="formatter"
                                data-pattern="Rp [[999]].[[999]].[[999]].[[999]]" name="estimated_budget"
                                value="{{ old('estimated_budget') }}" />
                            @error('estimated_budget')
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
<link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/examples/css/forms/masks.css') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload.css') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/dropify/dropify.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/ticket.css')}}" />
@endpush

@push('custom_js')
<script src="{{ asset('global/js/Plugin/formatter.js') }}"></script>
<script src="{{ asset('global/vendor/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('global/vendor/blueimp-tmpl/tmpl.js') }}"></script>
<script src="{{ asset('global/vendor/blueimp-canvas-to-blob/canvas-to-blob.js') }}"></script>
<script src="{{ asset('global/vendor/blueimp-load-image/load-image.all.min.js') }}"></script>
<script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload.js') }}"></script>
<script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-process.js') }}"></script>
<script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-image.js') }}"></script>
<script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-audio.js') }}"></script>
<script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-video.js') }}"></script>
<script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-validate.js') }}"></script>
<script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-ui.js') }}"></script>
<script src="{{ asset('global/vendor/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('global/js/Plugin/dropify.js') }}"></script>
<script src="{{ asset('assets/examples/js/forms/uploads.js') }}"></script>
<script src="{{ asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('global/vendor/formatter/jquery.formatter.js') }}"></script>
@endpush