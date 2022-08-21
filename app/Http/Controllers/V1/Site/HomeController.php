<?php

namespace App\Http\Controllers\V1\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\FormatPayslipService;
use Modules\Request\Entities\Request as RequestModel;

class HomeController extends Controller
{
    public function home()
    {
        $dataRequests = RequestModel::where('id', auth()->user()->id)
        ->get();

        $code_meli = auth()->user()->code_meli;
        $format = new FormatPayslipService();
        $data = $format->payslipsFormat($code_meli);

        return view('pages.site.home', compact('dataRequests', 'data'));
    }
}
