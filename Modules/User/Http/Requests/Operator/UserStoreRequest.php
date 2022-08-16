<?php

namespace Modules\User\Http\Requests\Operator;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric|unique:users,phone',
            'personal_code' => 'numeric|required|unique:users,personal_code',
            'code_meli' => 'numeric|required|unique:users,code_meli',
            'job_title' => 'required',
            'bank_account_number' => 'numeric|required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
