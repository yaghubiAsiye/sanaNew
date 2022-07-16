<?php

namespace Modules\Payslip\Http\Controllers\Operator;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use Morilog\Jalali\CalendarUtils;
use Illuminate\Routing\Controller;
use Rap2hpoutre\FastExcel\FastExcel;
use Modules\Payslip\Entities\Payslip;
use Illuminate\Contracts\Support\Renderable;
use Modules\Payslip\Http\Requests\PayslipStoreRequest;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $payslips = Payslip::all();
        return view('payslip::operator.index', compact('payslips'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('payslip::operator.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(PayslipStoreRequest $request)
    {
        // dd($request->date_pay);
        // dd();
        // $date = CalendarUtils::createCarbonFromFormat('d m, y', $request->date_pay);
        // $date = Verta::parse($request->date_pay);
        // var_dump($date);
        // dd();
        // $payslip = Payslip::create([
        //     'status' => $request->status,
        //     'date_pay' => Carbon::now(),
        //     'file' => $request->file,
        // ]);
        // dd($request->file);

        $users = (new FastExcel)->import($request->file, function ($line) {
            return User::create([
                'first_name' => $line['first_name'],
                'last_name' => $line['last_name'],
                'phone' => $line['phone'],
                'email' => $line['email'],
                'password' => bcrypt($line['password'])
            ]);
        });

        $request->session()->flash('alert-success' , 'عملیات موفق بود!');
        return redirect()->route('Payslip.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('payslip::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('payslip::edit');
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
