<?php

namespace Modules\User\Http\Controllers\Operator;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Rap2hpoutre\FastExcel\FastExcel;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Support\Renderable;

class ImportUserController extends Controller
{
     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::operator.import.create');
    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {

        try
        {
            $users = (new FastExcel)->import($request->file, function ($line) {
                return User::create([
                    'personal_code' => $line['كد پرسنلي'],
                    'first_name' => $line['نام'],
                    'last_name' => $line['نام خانوادگي'],
                    'code_meli' => $line['كد ملي'],
                    'phone' => $line['تلفن همراه'],
                    'job_title' => $line['سمت'],
                    'workplace' => $line['شهر محل خدمت'],
                    // 'bank_account_number' => $line['شماره حساب'],
                    'password' => bcrypt($line['كد ملي'])
                ]);
            });

            $role = Role::where('name','کارمند')->get()->first();
            if(! $role)
            {
                $role = Role::create(['name' => 'کارمند']);
            }

            $permission = Permission::where('name','employee')->get();
            $role->syncPermissions($permission);
            foreach($users as $user)
            {
                $user->assignRole([$role->id]);
            }

        } catch (Exception $exception)
        {
            return back()->withError($exception->getMessage())->withInput();
        }

        $request->session()->flash('alert-success' , 'عملیات موفق بود!');
        return redirect()->back();
    }








}
