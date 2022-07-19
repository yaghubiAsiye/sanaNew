<?php

namespace Modules\User\Http\Controllers\Operator;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Rap2hpoutre\FastExcel\FastExcel;
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
        $users = (new FastExcel)->import($request->file, function ($line) {
            return User::create([
                'personal_code' => $line['personal_code'],
                'first_name' => $line['first_name'],
                'last_name' => $line['last_name'],
                'code_meli' => $line['code_meli'],
                'phone' => $line['phone'],
                'job_title' => $line['job_title'],
                'bank_account_number' => $line['bank_account_number'],
                'password' => bcrypt($line['code_meli'])
            ]);
        });

        $request->session()->flash('alert-success' , 'عملیات موفق بود!');
        return redirect()->back();
    }









}
