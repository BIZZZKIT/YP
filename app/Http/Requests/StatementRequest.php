<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatementRequest extends FormRequest
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
            'statenum' => 'required|regex:/^[АВЕКМНОРСТУХ]{1}\d{3}[АВЕКМНОРСТУХ]{2}\s?\d{2,3}$/u',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'statenum' => 'Напишите корректный гос номер',
          'description' => 'Это поле обязательное'
        ];
    }
}
