<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TickethistoryStoreRequest extends FormRequest
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
            'ticket_id' => ['required', 'integer', 'exists:Tickets,id'],
            'status' => ['required', 'in:ACCEPTED,ON_PROGRESS,PENDING,CANCELED,DONE'],
            'note' => ['required', 'string'],
        ];

        if(request('document_upload') || request()->hasFile('document_upload')) {
            $rules['document_upload'] = 'mimes:jpeg,png,pdf,xls,xlsx,doc,docx,rar,zip|max:5048';
        }

        return $rules;
    }
}
