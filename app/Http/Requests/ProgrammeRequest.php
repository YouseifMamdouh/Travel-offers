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
            'price' => 'required',
//            'discount' => 'required',
            'description' => 'required',
            'cover' => 'required_without:id|mimes:jpg,png,jpeg,svg',
            'city_id' => 'required|exists:cities,id',
            'country_id' => 'required|exists:countries,id',
            'features' => 'required',
            'banner' => 'required_without:id|mimes:png,jpg,jpeg',


        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The Title Field is Required',
            'price.required' => 'The price Field is Required',
//            'discount.required' => 'The discount Field is Required',
            'name.required' => 'The Name Field is Required',
            'features.required' => 'The Features Field is Required',
            'description.required' => 'The Description Field is Required',
            'cover.required' => 'The Cover is Required',
            'cover.mimes' => 'The Cover Extension must be JPG, PNG, JPEG, SVG',
            'city_id.required' => 'The City Field is Required',
            'city_id.exists' => 'The City must Exists in Cities List',
            'country_id.required' => 'The Country Field is Required',
            'country_id.exists' => 'The Country must Exists in Countries List',

        ];
    }
}
