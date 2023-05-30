<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgrammeRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'cover' => 'required_without:id|mimes:jpg,png,jpeg,svg',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The Title Field is Required',
            'name.required' => 'The Name Field is Required',
            'description.required' => 'The Description Field is Required',
            'cover.required' => 'The Cover is Required',
            'cover.mimes' => 'The Cover Extension must be JPG, PNG, JPEG, SVG',

        ];
    }
}
