<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
            "name" => 'required',
            "email" => 'required|email|unique:patients,email,'.$this->id,
            "password" => 'required|sometimes',
            "Phone" => 'required|numeric|unique:patients,Phone,'.$this->id,
            'Date_Birth' => 'required|date|date_format:Y-m-d',
            "Gender" => 'required|integer|in:1,2',
        ];
    }
}
