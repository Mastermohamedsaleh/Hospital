<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInsuranceRequest extends FormRequest
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
            'insurance_code' => 'required',
            'discount_percentage' =>'required|numeric',
            'Company_rate' =>'required|numeric',
            'name' => 'required|unique:insurances'.$this->id,
        ];
    }
}
