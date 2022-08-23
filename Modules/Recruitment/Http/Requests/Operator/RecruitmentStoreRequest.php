<?php

namespace Modules\Recruitment\Http\Requests\Operator;

use Illuminate\Foundation\Http\FormRequest;

class RecruitmentStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'family' => 'required',
            'job' => 'required',
            'vahedSazmani' => 'required',
            'mahaleKhedmat' => 'required',
            'description' => 'required',
            'file' => 'required',
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
