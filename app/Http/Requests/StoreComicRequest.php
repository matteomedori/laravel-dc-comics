<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:60',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|decimal:2',
            'series' => 'required|max:40',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|max:40',
            'artists' => 'required',
            'writers' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Titolo richiesto',
            'title.max' => 'Numero massimo caratteri: :max',
            'description.required' => 'Descrizione richiesta',
            'thumb.required' => 'Immagine richiesta',
            'thumb.url' => 'Deve essere un url',
            'price.required' => 'Prezzo richiesto',
            'price.decimal' => 'Sono necessari :decimal decimali',
            'series.required' => 'Serie fumetto richiesta',
            'series.max' => 'Numero massimo caratteri: :max',
            'sale_date.required' => "Data d'uscita richiesta",
            'sale_date.date_format' => 'La data deve essere nel formato Y-M-D',
            'type.required' => 'Tipo richiesto',
            'type.max' => 'Numero massimo caratteri: :max',
            'writers.required' => 'Scrittori richiesto',
            'artists.required' => 'Artisti richiesti',
        ];
    }
}
