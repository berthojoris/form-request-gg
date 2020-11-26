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
        return [
            'uuid' => ['required', 'string'],
            'status' => ['required', 'in:OPEN,CLOSE'],
            'project_id' => ['required', 'string'],
            'project_name' => ['required', 'string'],
            'departemen_request' => ['required', 'string'],
            'pic_request' => ['required', 'string'],
            'email_submited' => ['required', 'email'],
            'user_destination' => ['required', 'integer', 'exists:users,id'],
            'digital_asset' => ['required', 'array'],
            'background' => ['required', 'string'],
            'objective' => ['required', 'string'],
            'target_audience' => ['required'],
            'creatif_consideration' => ['required', 'string'],
            'support_other_channel' => ['required', 'string'],
            'kpi' => ['required', 'string'],
            'requirement_rules' => ['required', 'string'],
            'reference' => ['required', 'string'],
            'project_brief' => ['file'],
            'campaign_period_start' => ['required', 'date'],
            'campaign_period_end' => ['required', 'date'],
            'estimated_budget' => ['required', 'string'],
            'document_upload' => ['file'],
        ];
    }
}
