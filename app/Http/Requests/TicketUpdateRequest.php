<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketUpdateRequest extends FormRequest
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
            'user_destination' => ['required', 'integer', 'exists:users,id'],
            'username_submited' => ['required', 'string'],
            'email_submited' => ['required', 'email'],
            'digital_asset' => ['required', 'string'],
            'background' => ['required', 'string'],
            'objective' => ['required', 'string'],
            'target_audience' => ['required', 'string'],
            'creatif_consideration' => ['required', 'string'],
            'support_other_channel' => ['required', 'string'],
            'kpi' => ['required', 'string'],
            'requirement_rules' => ['required', 'string'],
            'reference' => ['required', 'string'],
            'project_brief' => ['required', 'string'],
            'campaign_period_start' => ['required', 'date'],
            'campaign_period_end' => ['required', 'date'],
            'estimated_budget' => ['required', 'numeric', 'between:-999999999999,999999999999'],
            'document_upload' => ['string'],
        ];
    }
}
