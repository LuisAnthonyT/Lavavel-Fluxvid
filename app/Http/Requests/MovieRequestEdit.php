<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequestEdit extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:50',
            'plot' => 'required|min:10',
            'rating' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El título es requerido',
            'title.min' => 'El título debe tener al menos 5 caracteres',
            'title.max' => 'El título debe tener 50 caracteres como máximo ',
            'plot.required' => 'El argumento es requerido',
            'plot.min' => 'El argumento debe tener al menos 10 caracteres',
            'rating.numeric' => 'La puntuación debe ser un número',
            'rating.required' => 'La puntuación es requerido',

        ];
    }
}
