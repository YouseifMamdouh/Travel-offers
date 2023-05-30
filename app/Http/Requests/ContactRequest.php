<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'image' => 'required_without:id|mimes:jpg,jpeg,png.svg',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'The Email Field is Required',
            'address.required' => 'The address Field is Required',
            'phone.required' => 'The phone Field is Required',
            'image.required_without' => 'The Image Field is Required',
            'image.mimes' => 'The Image Extension Must Be JPG, JPEG, PNG, SVG',
        ];
    }
}
