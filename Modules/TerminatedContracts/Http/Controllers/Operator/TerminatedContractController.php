<?php

namespace Modules\TerminatedContracts\Http\Controllers\Operator;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TerminatedContractController extends Controller
{
   
    public function index()
    {
        return view('terminatedcontracts::index');
    }


}
