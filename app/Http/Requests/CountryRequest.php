<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
            'image' => 'required_without:id',
            'summary' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The City Name is Required',
            'summary.required' => 'The Summary is Required',
            'image.required_without' => 'The City Image is Required',
        ];
    }
}
