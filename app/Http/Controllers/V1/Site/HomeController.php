<?php

namespace App\Http\Controllers\V1\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\FormatPayslipService;
use Modules\Request\Entities\RequestType;
use Modules\Announcement\Entities\Announcement;
use Modules\Request\Entities\Request as RequestModel;

class HomeController extends Controller
{
    public function home()
    {
        // $dataRequests = RequestModel::where('id', auth()->user()->id)
        // ->get();

        $dataRequests = RequestType::where('starter_id', auth()->user()->id)
        ->where('starter_type', 'پرسنل')
        ->with(['requestContents'])
        ->get();

        $announcements = Announcement::all();

        $code_meli = auth()->user()->code_meli;
        $format = new FormatPayslipService();
        $data = $format->payslipsFormat($code_meli);

        return view('pages.site.home', compact('dataRequests', 'data', 'announcements'));
    }
}
