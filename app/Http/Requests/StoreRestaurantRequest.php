<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'phone_number' => 'required|digits_between:9,12',
            'cover_img' => 'required|image',
            'vat' => 'required|numeric|digits:11',
            'address' => 'required|string',
            'user_id'=>'nullable',
            'types' => 'required|array|exists:types,id'
        ];
    }

    public function messages() {
        return [
            "name.required" => "Il titolo è obbligatorio",
            "name.max" =>  "Il titolo deve avere massimo :max caratteri",
            "phone_number.required" => "Il ristorante deve avere un numero di telefono",
            "phone_number.digits" => "Il numero di telefono deve avere dai 9 ai 12 caratteri",
            "cover_img.required" => "Il ristorante deve avere un immagine di copertina",
            "vat.required" => "Il ristorante deve avere una partita IVA",
            "vat.digits" => "La partita IVA deve avere 11 caratteri",
            "address.required" => "Il ristorante deve avere un indirizzo",
            "types.required" => "Il ristorante deve avere una tipologia associata",
        ];
    }
}