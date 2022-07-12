<?php

namespace App\Http\Requests\V1\Site;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'phone' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric|exists:users,phone',
            'password' => 'required|min:5',
        ];
    }
}
