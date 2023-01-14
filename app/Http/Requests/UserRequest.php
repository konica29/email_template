<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $user = empty(request()->user) ? 0 : request()->user->id;
        return [
            'name'                 =>   'required|string|max:255',
            'email'                =>   'required|email|unique:users,email,'.$user.',id',
        ];
    }
}
