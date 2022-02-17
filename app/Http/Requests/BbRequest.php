<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BbRequest extends FormRequest
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

        // ВРЕМЕННО НЕ ПОДКЛЮЧЕННО!!!
        return [
            'title' => 'required|max:50',
            'content' => 'required',
            'price' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'price.required' => 'Раздавать товары бесплатно нельзя',
            'required' => 'Заполните это поле',
            'max' => 'Значение не должно быть длиннее :max символов',
            'numeric' => 'Введите число',
        ];
    }
}
