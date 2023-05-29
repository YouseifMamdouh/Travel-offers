<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
            'title.required' => 'The Title Field is Required',
            'description.required' => 'The Description Field is Required',
            'image.required_without' => 'The Image Field is Required',
        ];
    }
}
