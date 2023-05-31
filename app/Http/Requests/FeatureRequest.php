<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
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
            'name' => 'required',
            'type_of' => 'required|in:hotels,programmes',
            'icon' => 'required_without:id',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The Name Field is Required',
            'icon.required_without' => 'The icon Field is Required',
            'type_of.required' => 'The Type Field is Required',
            'type_of.in' => 'The Feature must Be type of Hotels or Programmes',
        ];
    }
}
