<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
            "name" => ["required", "string", "max:50"],
            "species" => ["required", "string", "max:100"],
            "dob" => ["required", "date"],
            "weight" => ["required", "numeric"],
            "height" => ["required", "numeric"],
            "biteyness" => ["required", "integer","between:0,6"]
        ];
    }
}
