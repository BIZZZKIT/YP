<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'surname' => 'required|max:20',
            'name' => 'required|max:20',
            'patronymic' => 'required|max:25|nullable',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric|digits:10',
        ];
    }

    public function messages()
    {
        return [
          'login' => 'Логин должен быть на английском языке',
          'password' => 'Пароль должен быть не меньше 8 символов',
          'surname' => 'Это обязательное поле',
          'name' => 'Это обязательное поле',
          'phone' => 'Здесь должны быть числа',
        ];
    }
}
