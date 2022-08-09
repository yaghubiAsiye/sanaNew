<?php

namespace App\Http\Controllers\V1\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Request\Entities\Request as RequestModel;

class HomeController extends Controller
{
    public function home()
    {
        $dataRequests = RequestModel::all();
        return view('pages.site.home', compact('dataRequests'));
    }
}
