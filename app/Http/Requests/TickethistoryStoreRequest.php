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
        return [
            'uuid' => ['required', 'string'],
            'ticket_id' => ['required', 'integer', 'exists:Tickets,id'],
            'status' => ['required', 'in:ACCEPTED,ON_PROGRESS,PENDING,CANCELED,DONE'],
            'note' => ['required', 'string'],
            'document_upload' => ['string'],
        ];
    }
}
