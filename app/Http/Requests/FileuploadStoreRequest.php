<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileuploadStoreRequest extends FormRequest
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
            'file_name' => ['required', 'string'],
            'file_ext' => ['required', 'string'],
            'file_size' => ['required', 'string'],
            'file_saved_path' => ['required', 'string'],
            'random_name' => ['required', 'string'],
            'uploaded_by' => ['required', 'integer', 'exists:Users,id'],
        ];
    }
}
