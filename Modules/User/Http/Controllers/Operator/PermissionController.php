<?php

namespace Modules\User\Http\Controllers\Operator;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Support\Renderable;
use Modules\User\Http\Requests\Operator\PermissionRequest;

class PermissionController extends Controller
{
     /**
     * @var Permission|Builder
     */
    private $permission;

    /**
     * PermissionController constructor.
     * @param Permission $permission
     */
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permissionsQuery = $this->permission;

        $permissionsQuery = $this->search($request, $permissionsQuery);

        $permissions = $permissionsQuery->paginate()
            ->appends($request->all());

        return view('user::operator.permission.index', [
            'permissions' => $permissions,
            'request' => $request
        ]);
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::operator.permission.create');
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param PermissionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {
        $this->permission->create($request->only('name'));

        $request->session()->flash('alert-success' , 'اطلاعات با موفقیت ذخیره شد');

        return redirect()->route('Operator.Permission.index');
    }

     /**
     * Display the specified resource.
     *
     * @param Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        return view('user::operator.permission.show', [
            'permission' => $permission
        ]);
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('user::operator.permission.edit', [
            'permission' => $permission
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PermissionRequest $request
     * @param Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $permission->update($request->only('name'));

        $request->session()->flash('alert-success' , 'اطلاعات با موفقیت ویرایش شد');

        return redirect()->route('Operator.Permission.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param Permission $permission
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        session()->flash('alert-success' , 'اطلاعات با موفقیت حذف شد');

        return redirect()->route('Operator.Permission.index');
    }

     /**
     * @param Request $request
     * @param Builder $permissionsQuery
     * @return Builder
     */
    private function search($request, $permissionsQuery)
    {
        if ($term = $request->get('term')) {
            $permissionsQuery = $permissionsQuery->where('name' , 'like' , "%$term%");
        }
        return $permissionsQuery;
    }


}
