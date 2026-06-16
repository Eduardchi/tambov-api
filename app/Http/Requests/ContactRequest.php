<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'    => 'required|string|min:2|max:100',
            'phone'   => ['required', 'string', 'min:7', 'max:30', 'regex:/^\+?[\d\s\-\(\)]{7,30}$/'],
            'message' => 'required|string|min:5|max:2000',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'Укажите ваше имя.',
            'phone.required'   => 'Укажите телефон для связи.',
            'phone.regex'      => 'Введите корректный номер телефона.',
            'message.required' => 'Напишите ваш вопрос.',
            'message.min'      => 'Вопрос должен содержать не менее 5 символов.',
        ];
    }
}