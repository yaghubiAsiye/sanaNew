<?php

namespace Modules\Payslip\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Payslip\Entities\Payslip;
use Illuminate\Contracts\Support\Renderable;

class PayslipController extends Controller
{
    /**
     * Display a payslip from any Employee.
     * @return Renderable
     */
    public function payslipShow()
    {
        $payslips = Payslip::where('NationalCode', auth()->user()->code_meli)
        // ->paginate(10)
        ->get()
        ->groupBy('date_pay');
        // ->paginate(10);
        // ->get();
        // dd($payslips);
        return view('payslip::employee.payslipShow', compact('payslips'));
    }


}
