<?php

namespace Modules\Payslip\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayslipStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file' => 'required',
            'date_pay' => 'required|unique:payslip_logs,date_pay',
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
