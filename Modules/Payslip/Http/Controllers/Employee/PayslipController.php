<?php

namespace Modules\Payslip\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\FormatPayslipService;
use Illuminate\Contracts\Support\Renderable;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

class PayslipController extends Controller
{
    /**
     * Display a payslip from any Employee.
     * @return Renderable
     */
    public function payslips()
    {
        $code_meli = auth()->user()->code_meli;
        $format = new FormatPayslipService();
        $data = $format->payslipsFormat($code_meli);
        return view('payslip::employee.payslips', compact('data'));
    }



    public function downloadPDF($date)
    {
        $code_meli = auth()->user()->code_meli;
        $format = new FormatPayslipService();
        $data = $format->pdfFormat($date, $code_meli);
        $pdf = PDF::loadView('payslip::employee.pdfPayslip', $data);
        return $pdf->download('payslip.pdf');

    }



}
