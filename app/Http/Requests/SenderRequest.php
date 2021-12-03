<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SenderRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email:rfc',
            'number' => 'required|min:11|max:12'
        ];
    }

    public function messages() {
      return [
        'name.required' => 'Имя обязательно',
        'surname.required' => 'Фамилия обязательна',
        'email.required' => 'Почта обязательна',
        'email.email' => 'Введите корректный адрес электронной почты',
        'number.required' => 'Номер обязателен',
        'number.min' => 'Номер должен состоять как минимум из 11 символов',
        'number.max' => 'Номер должен состоять максимум из 12 символов'
      ];
    }
}
