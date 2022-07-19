<?php

namespace Modules\Payslip\Http\Controllers\Employee;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PayslipController extends Controller
{
    /**
     * Display a payslip from any Employee.
     * @return Renderable
     */
    public function payslipShow()
    {
        return view('payslip::employee.payslipShow');
    }


}
