<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
            'name'                   =>     'required|string|max:50',
            'module_id'              =>     'required'
        ];
    }
    public function messages()
    {
        return [
            'module_id.required'     =>     'Module is required'
        ];
    }
}
