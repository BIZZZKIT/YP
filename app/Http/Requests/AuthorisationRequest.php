<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorisationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'login' => 'required|regex:/^[a-zA-Z0-9_-]+$/',
            'password' => 'required|regex:/^[a-zA-Z0-9_-]+$/|min:8',
        ];
    }

    public function messages()
    {
        return [
            'login' => 'Логин должен быть на английском языке',
            'password' => 'Пароль должен быть не меньше 8 символов',
        ];
    }
}
