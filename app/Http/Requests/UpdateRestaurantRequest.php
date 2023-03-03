<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|max:255',
            'phone_number'=>'required|numeric|digits:8',
            'cover_img'=>'required|string',
            'vat'=>'required|numeric|digits:8',
            'address'=>'required|string',
<<<<<<< HEAD
            'user_id'=>'null',
            "types" => "nullable|array|exists:types,id"
=======

>>>>>>> test
        ];
    }
}
