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
            'type_of' => 'required|in:car_booking,flight_booking',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The title Field is Required',
            'type_of.required' => 'The Type Field is Required',
            'type_of.in' => 'The Service must Be type of Hotels or Programmes',
        ];
    }
}
