<?php

namespace Modules\User\Http\Controllers\Operator;

use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use Illuminate\Routing\Controller;
use Modules\Payslip\Entities\Payslip;
use App\Services\FormatPayslipService;
use Illuminate\Contracts\Support\Renderable;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

class PayslipEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($codeMeli)
    {
        $format = new FormatPayslipService();
        $data = $format->payslipsFormat($codeMeli);
        return view('user::operator.payslipEmployee.index', compact('data'));
    }

    public function downloadPDF($date, $codeMeli)
    {
        $format = new FormatPayslipService();
        $data = $format->pdfFormat($date, $codeMeli);
        $pdf = PDF::loadView('payslip::employee.pdfPayslip', $data);
        return $pdf->download('payslip.pdf');
    }
    
}
