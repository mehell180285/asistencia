<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'last_name0' => ['prohibited'], // campos protegidos
            'last_name1' => ['prohibited'], // campos protegidos
            'first_name' => ['prohibited'], // campos protegidos
            'mail_person' =>['nullable', 'email', 'max:150', 'unique:persons,mail_person,'.Auth()->user()->person_id],
            'cellular' => ['nullable', 'max:9'],
            'birthday' => ['nullable', 'date'],
            'sex' => ['required','string','in:M,F'],
            'address' => ['nullable','string','max:150']
        ];
    }

    public function messages(): array
    {
        return [
            'last_name0.prohibited' => 'No está permitido modificar el Apellido Paterno.',
            'last_name1.prohibited' => 'No está permitido modificar el Apellido Materno.',
            'first_name.prohibited' => 'No está permitido modificar los Nombres.',
        ];
    }
}
