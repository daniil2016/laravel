<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // авторизация, лучше убрать, без авторизации чтоб было
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:10',
        ];
    }

    public function messages()   // замена текста ошибок
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'name.min' => 'Поле имя не меньше 5',
            'name.max' => 'Поле имя не больше 10',
        ];
    }
}
