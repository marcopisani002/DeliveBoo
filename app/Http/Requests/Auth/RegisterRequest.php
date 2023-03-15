<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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

            'name' => 'required | string |min:2 |max:255',
            'surname' => 'required | string | min:2 |max:255',
            'email' => 'required | string | email | max:255| unique:users',
            'password' => 'required| min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Il nome è obbligatorio",
            "name.min" =>  "Il nome deve avere minimo :min caratteri",
            "surname.required" => "Il cognome è obbligatorio",
            "surname.min" =>  "Il cognome deve avere minimo :min caratteri",
            "email.required" => "L'email è obbligatoria",
            "email.unique:users" => "L'email inserita risulta già nel nostro database",
            "password.required" => "La password è obbligatoria",
            "password.min" => "La password deve avere un minimo :min caratteri",
            "password.confirmed" => "Le password devono combaciare",
        ];
    }
}