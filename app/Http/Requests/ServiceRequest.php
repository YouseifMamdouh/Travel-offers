<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'required_without:id',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The title Field is Required',
            'description.required' => 'The Description Field is Required',
            'required_without' => 'The Image is Required',
        ];
    }
}
