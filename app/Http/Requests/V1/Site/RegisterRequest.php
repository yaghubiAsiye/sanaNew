<?php

namespace App\Http\Requests\V1\Site;

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
            'first_name' => 'required|string|max:255|min:3',
            'last_name' => 'required|string|max:255|min:3',
            'phone' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric|unique:users,phone',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
            'rule' => 'required'
        ];
    }
}
