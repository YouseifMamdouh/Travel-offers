<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'created_at' => 'required_without',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The Name is Required',
            'created_at.required_without' => 'The Date is Required',
            'image.required_without' => 'The Blog Image is Required',
        ];
    }
}
