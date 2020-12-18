<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'uuid' => ['string'],
            'project_id' => ['string'],
            'status' => ['string'],
            'project_name' => ['required', 'string'],
            'departemen_request' => ['required'],
            'pic_request' => ['required'],
            'email_submited' => ['required', 'email'],
            'user_destination' => ['required', 'integer', 'exists:users,id'],
            'digital_asset' => ['required', 'array'],
            'background' => ['required', 'string'],
            'objective' => ['required', 'string'],
            'target_audience' => ['required'],
            'creative_consideration' => ['required', 'max:255'],
            'support_other_channel' => ['required', 'max:255'],
            'kpi' => ['required', 'max:255'],
            'requirement_rules' => ['required', 'max:255'],
            'reference' => ['required', 'max:255'],
            'estimated_budget' => ['required', 'string'],
            'start' => ['required'],
            'end' => ['required'],
            'input_city' => ['required_if:target_audience,Input Your City']
        ];

        if(request('project_brief') || request()->hasFile('project_brief')) {
            $rules['project_brief'] = 'file|mimes:pdf,doc,ppt,xls,docx,pptx,xlsx,rar,zip';
        }

        if(request('document_upload') || request()->hasFile('document_upload')) {
            $rules['document_upload'] = 'file|mimes:pdf,doc,ppt,xls,docx,pptx,xlsx,rar,zip';
        }

        return $rules;
    }
}
