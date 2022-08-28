<?php

namespace Modules\User\Http\Controllers\Operator;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Support\Renderable;

class RoleController extends Controller
{
    /**
     * @var Role|Builder
     */
    private $role;
    /**
     * @var Permission|Builder
     */
    private $permission;

    /**
     * RoleController constructor.
     * @param Role $role
     * @param Permission $permission
     */
    public function __construct(Role $role, Permission $permission)
    {
        $this->role = $role;
        $this->permission = $permission;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->role
            ->where('name' , '!=' , 'super-admin')
            ->paginate();

        return view('user::operator.role.index', [
            'roles' => $roles
        ]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('user::operator.role.create' , [
            'permissions' => $permissions
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = $this->role->create([
            'name' => $request->get('name'),
            'guard_name' => 'web'
        ]);

        $permissions = $this->permission->find($request->get('permissions'));

        $role->syncPermissions($permissions);

        $request->session()->flash('alert-success' , 'اطلاعات با موفقیت ویرایش شد');

        return redirect()->route('Operator.Role.index');
    }

   /**
     * Display the specified resource.
     *
     * @param Role $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role = $role->load(['permissions']);

        return view('user::operator.role.show', [
            'role' => $role
        ]);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $role = $role->load(['permissions']);
        $permissions = Permission::all();

        return view('user::operator.role.edit', [
            'role' => $role,
            'permissions' => $permissions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name'));

        $permissions = $this->permission->find($request->get('permissions'));

        $role->syncPermissions($permissions);

        $request->session()->flash('alert-success' , 'اطلاعات با موفقیت ویرایش شد');

        return redirect()->route('Operator.Role.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Role $role)
    {
        $role->permissions()->detach();
        $role->delete();

        session()->flash('alert-success' , 'اطلاعات با موفقیت حذف شد');

        return redirect()->route('Operator.Role.index');
    }

}
