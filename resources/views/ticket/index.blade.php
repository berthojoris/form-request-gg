@extends('layouts.public')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Digital Request Form</div>

            <div class="card-body">

                @if(Session::has('ticket.project_name'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                    {{ Session::get('ticket.project_name') }} berhasil disubmit</p>
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
                        <label for="name" class="col-md-4 col-form-label text-md-right">Department Name<span
                            class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="departemen_request" type="text"
                                class="form-control fieldColor @error('departemen_request') is-invalid @enderror"
                                name="departemen_request" value="{{ old('departemen_request') }}" autocomplete="off">
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
                        <div class="col-md-6">
                            <div class="row @error('digital_asset') redBox @enderror">
                                <div class="col-md-5">
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" name="digital_asset[]" value="Webiste" {{ (is_array(old('digital_asset')) && (in_array('Webiste', old('digital_asset')))) ? ' checked' : '' }}>
                                        <label for="digital_asset[]">Webiste</label>
                                    </div>
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" name="digital_asset[]" value="Mobile Apps" {{ (is_array(old('digital_asset')) && (in_array('Mobile Apps', old('digital_asset')))) ? ' checked' : '' }}>
                                        <label for="digital_asset[]">Mobile Apps</label>
                                    </div>
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" name="digital_asset[]" value="Instagram" {{ (is_array(old('digital_asset')) && (in_array('Instagram', old('digital_asset')))) ? ' checked' : '' }}>
                                        <label for="digital_asset[]">Instagram</label>
                                    </div>
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" name="digital_asset[]" value="Facebook" {{ (is_array(old('digital_asset')) && (in_array('Facebook', old('digital_asset')))) ? ' checked' : '' }}>
                                        <label for="digital_asset[]">Facebook</label>
                                    </div>
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" name="digital_asset[]" value="Twitter" {{ (is_array(old('digital_asset')) && (in_array('Twitter', old('digital_asset')))) ? ' checked' : '' }}>
                                        <label for="digital_asset[]">Twitter</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" name="digital_asset[]" value="Youtube" {{ (is_array(old('digital_asset')) && (in_array('Youtube', old('digital_asset')))) ? ' checked' : '' }}>
                                        <label for="digital_asset[]">Youtube</label>
                                    </div>
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" name="digital_asset[]" value="Facebook Group" {{ (is_array(old('digital_asset')) && (in_array('Facebook Group', old('digital_asset')))) ? ' checked' : '' }}>
                                        <label for="digital_asset[]">Facebook Group</label>
                                    </div>
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" name="digital_asset[]" value="SMS Blast" {{ (is_array(old('digital_asset')) && (in_array('SMS Blast', old('digital_asset')))) ? ' checked' : '' }}>
                                        <label for="digital_asset[]">SMS Blast</label>
                                    </div>
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" name="digital_asset[]" value="Email Blast" {{ (is_array(old('digital_asset')) && (in_array('Email Blast', old('digital_asset')))) ? ' checked' : '' }}>
                                        <label for="digital_asset[]">Email Blast</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('digital_asset')
                        <small style="display: inline;" class="invalid-feedback offset-md-4"
                            data-fv-validator="notEmpty" data-fv-for="porto_is"
                            data-fv-result="INVALID">{{ $message }}</small>
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
                                class="required">*</span>
                        </label>
                        <div class="col-md-6">
                            <div class="row @error('target_audience') redBox m5 @enderror">
                                <div class="col-md-12">
                                    <div class="radio-custom checkbox-primary">
                                        <input type="radio" name="target_audience" value="National Wide" @if (old('target_audience') == "National Wide") checked @endif>
                                        <label for="target_audience">National Wide</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="radio-custom checkbox-primary">
                                        <input type="radio" name="target_audience" value="Selected City" @if (old('target_audience') == "Selected City") checked @endif>
                                        <label for="target_audience">Selected City</label>
                                    </div>
                                </div>
                            </div>
                            @error('target_audience')
                            <small style="display: inline;" class="invalid-feedback" data-fv-validator="notEmpty"
                                data-fv-for="porto_is" data-fv-result="INVALID">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div id="hideShow" class="form-group row hidePanel">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Selected City<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="input_city" type="text"
                                class="form-control fieldColor @error('input_city') is-invalid @enderror"
                                name="input_city" value="{{ old('input_city') }}" autocomplete="off">
                            @error('input_city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Creatif Consideration<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="creative_consideration" type="text"
                                class="form-control fieldColor @error('creative_consideration') is-invalid @enderror"
                                name="creative_consideration" value="{{ old('creative_consideration') }}"
                                autocomplete="off">
                            @error('creative_consideration')
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
                        <label for="name" class="col-md-4 col-form-label text-md-right">Project Brief<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input id="project_brief" type="file"
                                class="form-control fieldColor @error('project_brief') is-invalid @enderror"
                                name="project_brief" value="{{ old('project_brief') }}">
                            @error('project_brief')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Additional Document</label>
                        <div class="col-md-6">
                            <input id="document_upload" type="file"
                                class="form-control fieldColor @error('document_upload') is-invalid @enderror"
                                name="document_upload" value="{{ old('document_upload') }}">
                            @error('document_upload')
                            <span class="invalid-feedback" role="alert">
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
                                <div class="row m5 @error('start') redBox @enderror">
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
                            </div>
                            @error('start')
                            <small style="display: inline;" class="invalid-feedback" data-fv-validator="notEmpty"
                                data-fv-for="porto_is" data-fv-result="INVALID">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Estimate Budget<span
                                class="required">*</span></label>
                        <div class="col-md-6">
                            <input type="text"
                                class="form-control number fieldColor @error('estimated_budget') is-invalid @enderror"
                                name="estimated_budget" value="{{ old('estimated_budget') }}" autocomplete="off" />
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
<link rel="stylesheet" href="{{ asset('global/vendor/formvalidation/formValidation.css') }}">
<link rel="stylesheet" href="{{ asset('assets/examples/css/forms/validation.css') }}">
<link rel="stylesheet" href="{{asset('css/ticket.css')}}" />
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
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('global/vendor/formvalidation/formValidation.min.js') }}"></script>
<script src="{{ asset('global/vendor/formvalidation/framework/bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/ticket.js') }}"></script>
@endpush