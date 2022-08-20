<?php

namespace Modules\Request\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Request\Entities\Request as RequestModel;
use Illuminate\Contracts\Support\Renderable;
use Modules\Request\Http\Requests\EmployeeStoreRequest;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = RequestModel::where('sender_id', auth()->user()->id)
        ->where('parent_id', Null)
        ->get();
        return view('request::employee.requests', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {

        return view('request::employee.createRequest');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(EmployeeStoreRequest $request)
    {
        $requestType = RequestModel::create([
            'parent_id' => Null,
            'sender_id' => auth()->user()->id,
            'status' =>'بررسی نشده',
            'type' => $request->type,
            'content' => $request->content,
            'starter_type' => 'employee',
        ]);


        Session::flash('alert-success' , 'عملیات موفق بود!');

        return redirect()->route('Employee.request.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('request::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('request::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
