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
            'sub_title' => 'required',
//            'location' => 'required',
            'image' => 'required_without:id',
            'created_at' => 'required_without:id',
            'banner' => 'required_without:id|mimes:png,jpg,jpeg',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The Name is Required',
            'sub_title.required' => 'The Sub Title is Required',
//            'location.required' => 'The Location is Required',
            'created_at.required_without' => 'The Date is Required',
            'image.required_without' => 'The Blog Image is Required',
        ];
    }
}
