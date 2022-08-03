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
use Modules\Payslip\Entities\PayslipLog;
use Illuminate\Contracts\Support\Renderable;
use Modules\Payslip\Http\Requests\PayslipStoreRequest;
use Exception;


class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $payslips = PayslipLog::all();
        return view('payslip::operator.payslipShow', compact('payslips'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('payslip::operator.payslipUpload');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(PayslipStoreRequest $request)
    {


        try
        {
            $payslips = (new FastExcel)->import($request->file,function ($line) {
                return Payslip::create([
                    'date_pay' => Verta::parse($line['تاريخ']),
                    'code' => $line['كد پرسنلى'],
                    'name' => $line['نام'],
                    'family' => $line['نام خانوادگى'],
                    'fatherName' => $line['نام پدر'],
                    'codeMeli' => $line['كد ملى'],
                    'shomareShenasname' => $line['شماره شناسنامه'],
                    'job' => $line['شغل'],
                    'shomareHesab' => $line['شماره حساب'],
                    'mahaleKhedmat' => $line['محل خدمت'],
                    'shomareBime' => $line['شماره بيمه'],
                    'mablaqKhalesPardakhty' => $line['پرداختى'],
                    'karkardAdy' => $line['کارکرد عادی '],
                    'ezafeKary' => $line['اضافه کاری'],
                    'shabKari' => $line['شبکاری'],
                    'kasreKar' => $line['کسر کار'],
                    'mamuriateKhoshky' => $line['ماموریت خشکی '],
                    'mamuriateDarya' => $line['ماموریت دریا '],
                    'nobateKary15' => $line['نوبت کاری 15%'],
                    'nobateKary225' => $line['نوبت کاری 22.5%'],
                    'aqmaryDarya' => $line['اقماری دریا'],
                    'aqmaryKhoshky' => $line['اقماری خشکی '],
                    'amelName' => $line['نام عامل'],
                    'amelValue' => $line['مبلغ حكم'],
                    'mazayaValue' => $line['مزايا'],
                    'kosoorValue' => $line['كسور'],
                ]);
            });

        } catch (Exception $exception)
        {
            return back()->withError($exception->getMessage())->withInput();
        }


        $path = 'PayslipFile/';
        $file = \App\Services\UploaderService::fileUploader($request->file, $path);

        $PayslipLog = PayslipLog::create([
            'name' => $request->name,
            'date_pay' => $request->date_pay,
            'file' => $file,
            'user_id' => auth()->user()->id,
        ]);

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
