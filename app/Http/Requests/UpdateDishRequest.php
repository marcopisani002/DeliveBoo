<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDishRequest extends FormRequest
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
            'name' => 'required|max:255|string',
            'cover_img' => 'required|image',
            'ingredients' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'show' => 'nullable|boolean',
        ];
    }

    public function messages() {
        return [
            "name.required" => "Il titolo è obbligatorio",
            "name.max" =>  "Il titolo deve avere massimo :max caratteri",
            "cover_img.image" => "L'immagine di copertina deve essere un'immagine",
            "ingredients.required" => "Gli ingredienti sono obbligatori",
            "description.required" => "Inserire una descrizione",
            "price.required" => "Il prezzo da inserire è obbligatorio",
            "price.min" => "Il prezzo deve essere maggiore di :min ",
            // 'show.required' => 'La checkbox "Mostra" deve essere attivata',
        ];
    }
}
