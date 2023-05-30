<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'type_of' => 'required|in:single,double,family',
            'hotel_id' => 'required|exists:hotels,id',
            'features' => 'required',
            'price' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The Title Field is Required',
            'description.required' => 'The Description Field is Required',
            'type_of.required' => 'The Type Field is Required',
            'type_of.in' => 'The Room must be a Type of (Single, Double or Family)',
            'hotel_id.required' => 'The Hotel Field is Required',
            'hotel_id.exists' => 'The Hotel must Exists in Hotels List',
            'features.required' => 'The Features Field is Required',
            'price.required' => 'The price Field is Required',
        ];
    }
}
