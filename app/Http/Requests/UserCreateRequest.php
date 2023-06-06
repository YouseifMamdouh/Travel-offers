<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:5'],

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name Field is Required',
            'email.required' => 'The Email Field is Required',
            'password.required' => 'The Password Field is Required',
            'email.unique' => 'The Email is Already Used',
        ];
    }
}
