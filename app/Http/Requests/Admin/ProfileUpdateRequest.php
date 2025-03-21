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
            'image' => ['image', 'max:2048'],
            'last_name0' => ['prohibited'], // campos protegidos
            'last_name1' => ['prohibited'], // campos protegidos
            'first_name' => ['prohibited'], // campos protegidos
            'mail_person' =>['nullable', 'email', 'max:150', 'unique:persons,mail_person,'.Auth()->user()->person_id],
            'mail_work' =>['nullable', 'email', 'max:150', 'unique:persons,mail_work,'.Auth()->user()->person_id],
            'birthday' => ['prohibited'], // campos protegidos
            'sex' => ['prohibited'], // campos protegidos
            'civil' => ['prohibited'], // campos protegidos
            'cellular' => ['nullable', 'max:9'],
            'phone' => ['nullable', 'string'],
            'address' => ['nullable','string','max:150']
        ];
    }

    public function messages(): array
    {
        return [
            'last_name0.prohibited' => 'No está permitido modificar el Apellido Paterno.',
            'last_name1.prohibited' => 'No está permitido modificar el Apellido Materno.',
            'first_name.prohibited' => 'No está permitido modificar los Nombres.',
            'birthday.prohibited' => 'No está permitido modificar la fecha de nacimiento.',
            'sex.prohibited' => 'No está permitido modificar el sexo.',
            'civil.prohibited' => 'No está permitido modificar el estado civil.',
        ];
    }
}
