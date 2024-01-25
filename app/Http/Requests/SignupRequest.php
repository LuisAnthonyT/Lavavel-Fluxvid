<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class SignupRequest extends FormRequest
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
            'username' => ['required', 'string', 'min:5', 'max:20', 'unique:users'],
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'min:10', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'El nombre de usuario es obligatorio.',
            'username.string' => 'El nombre de usuario debe ser una cadena de caracteres.',
            'username.min' => 'El nombre de usuario debe tener al menos :min caracteres.',
            'username.max' => 'El nombre de usuario no puede tener más de :max caracteres.',
            'username.unique' => 'Este nombre de usuario ya está en uso.',

            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',

            'email.required' => 'La dirección de correo electrónico es obligatoria.',
            'email.string' => 'La dirección de correo electrónico debe ser una cadena de caracteres.',
            'email.min' => 'La dirección de correo electrónico debe tener al menos :min caracteres.',
            'email.max' => 'La dirección de correo electrónico no puede tener más de :max caracteres.',
            'email.unique' => 'Esta dirección de correo electrónico ya está registrada.',

            'password.required' => 'La contraseña es obligatoria.',
            'password.confirmed' => 'La confirmación de contraseña no coincide.',
        ];

    }
}
