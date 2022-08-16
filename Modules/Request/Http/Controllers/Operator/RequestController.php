<?php

namespace Modules\Request\Http\Controllers\Operator;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Request\Entities\Request as RequestModel;



class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = RequestModel::all();
        return view('request::operator.requests', compact('data'));
    }

   public function responseshow(RequestModel $requestModel)
   {
        return view('request::operator.response', compact('requestModel'));
   }

   public function responseStore(Request $request)
   {

   }
}
