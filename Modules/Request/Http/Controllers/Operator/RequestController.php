<?php

namespace Modules\Request\Http\Controllers\Operator;

use App\Models\File;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Request\Entities\RequestType;
use Illuminate\Contracts\Support\Renderable;
use Modules\Request\Entities\RequestContent;
// use Modules\Request\Entities\Request as RequestModel;



class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = RequestType::where('starter_type', 'پرسنل')
        ->with(['requestContents'])
        ->get();
        return view('request::operator.index', compact('data'));
    }

   public function responseshow(RequestType $requestType)
   {
        $statuses = Status::all();
        return view('request::operator.response', compact('requestType', 'statuses'));
   }

   public function reply(Request $request)
   {

        $requestType = RequestType::find($request->requestType_id);


        $requestContent = RequestContent::create([
            'request_type_id' => $request->requestType_id,
            'sender_id' => auth()->user()->id,
            'status_id' => 2,
            'parent_id' => $request->parent_id,
            'sender_type' => 'کارشناس',
            'content' => $request->content,
        ]);

         if($request->file)
         {
             $path = 'RequestFile/';
             $file = \App\Services\UploaderService::fileUploader($request->file, $path);
             $fileAttach = new File();
             $fileAttach->file = $file;
             $name = explode('/', trim($file));
             $fileAttach->name = $name[2];
             $fileAttach->user_id = auth()->user()->id;
             $requestContent->files()->save($fileAttach);
         }


        $requestType->status_id = 2;
        $requestType->save();




        Session::flash('alert-success' , 'عملیات موفق بود!');

        return redirect()->route('Operator.request.index');
   }
}
