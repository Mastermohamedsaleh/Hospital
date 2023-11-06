<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAmbulanceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'car_number' => 'required',
            'car_model' =>'required',
            'car_year_made' =>'required|numeric',
             'is_available'=>'required|in:1,0',
            'driver_name' => 'required|unique:ambulances,'.$this->id,
            'driver_license_number' =>'required|numeric',
            'driver_phone' =>'required|numeric',
        ];
    }
}
