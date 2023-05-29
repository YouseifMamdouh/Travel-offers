<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'location' => 'required',
            'address' => 'required',
            'city_id' => 'required|exists:cities,id',
            'rooms_num' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The Title Field is Required',
            'description.required' => 'The Description Field is Required',
            'location.required' => 'The location Field is Required',
            'address.required' => 'The address Field is Required',
            'city_id.required' => 'The City Field is Required',
            'city_id.exists' => 'The City must Exists in City List',
            'rooms_num.required' => 'The Rooms Number Field is Required',
        ];
    }
}
