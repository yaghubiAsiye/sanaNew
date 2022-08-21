<?php

namespace Modules\Request\Http\Controllers\Employee;

use App\Models\File;
use Illuminate\Http\Request;
use App\Services\UploaderService;
// use Modules\Request\Entities\Request as RequestModel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Request\Entities\RequestType;
use Illuminate\Contracts\Support\Renderable;
use Modules\Request\Entities\RequestContent;
use Modules\Request\Http\Requests\EmployeeStoreRequest;

class RequestController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $requestTypes = RequestType::where('starter_id', auth()->user()->id)
        ->where('starter_type', 'پرسنل')
        ->with(['requestContents'])
        ->get();


        return view('request::employee.index', [
            'data' => $requestTypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {

        return view('request::employee.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(EmployeeStoreRequest $request)
    {
        $requestCurrentMonth = RequestType::whereMonth('created_at', '=', date('m'))
        ->where('type', $request->type)
        ->where('starter_id', auth()->user()->id)
        ->get();

        if(count($requestCurrentMonth) > 0)
        {
            Session::flash('alert-danger' , 'نوع درخواست انتخاب شده در این ماه تکراری می باشد!');
            return redirect()->back();
        }

        $requestType = RequestType::create([
            'type' => $request->type,
            'starter_id' => auth()->user()->id,
            'starter_type' => 'پرسنل',
            'status_id' => 1,
        ]);

        $requestContent = RequestContent::create([
            'request_type_id' => $requestType->id,
            'sender_id' => auth()->user()->id,
            'status_id' => 1,
            'parent_id' => 0,
            'sender_type' => 'مالک پروفایل',
            // 'sender_type' => 'بخش اداری',
            'content' => $request->content,
        ]);


        Session::flash('alert-success' , 'عملیات موفق بود!');

        return redirect()->route('Employee.request.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(RequestType $requestType)
    {
        return view('request::employee.show', compact('requestType'));
    }

    public function reply(Request $request)
    {

         $requestType = RequestType::find($request->requestType_id);


         $requestContent = RequestContent::create([
             'request_type_id' => $request->requestType_id,
             'sender_id' => auth()->user()->id,
             'status_id' => 3,
             'parent_id' => $request->parent_id,
            'sender_type' => 'مالک پروفایل',
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


         $requestType->status_id = 3;
         $requestType->save();




         Session::flash('alert-success' , 'عملیات موفق بود!');

         return redirect()->route('Employee.request.index');
    }

    public function closeRequest(RequestType $requestType)
    {
        $requestType->status_id = 4;
        $requestType->save();
        Session::flash('alert-success' , 'عملیات موفق بود!');

        return redirect()->back();
    }
}
