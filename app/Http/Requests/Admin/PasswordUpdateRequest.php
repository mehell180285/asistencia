<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PasswordUpdateRequest extends FormRequest
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
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8']
        ];
    }

    public function messages(): array
    {
        return [
            'current_password.required' => 'La contraseña actual es requerida',
            'current_password.current_password' => 'La contraseña actual es incorrecta',
            'password.required' => 'Ingrese su contraseña',
            'password.confirmed' => 'Las contraseñas no coinciden',
        ];
    }
}
