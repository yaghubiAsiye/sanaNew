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
                $date = Verta::parse($line['تاريخ']);

                return Payslip::create([
                    'date_pay' => $date,
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
                    'mamuriateKharej' => $line['كاركرد ماموريت خارج از كشور'],
                    'mamuriateDarya' => $line['كاركرد ماموريت دريايى'],
                    'shabKari' => $line['كاركرد شبكارى'],
                    'ezafeKary' => $line['كاركرد اضافه كارى عادى'],
                    'aqmaryDarya' => $line['كاركرد اقمارى دريا'],
                    'karkardAdy' => $line['كاركرد عادى'],
                    'mamuriateKhoshky' => $line['كاركرد ماموريت خشكى'],
                    'kasreKar' => $line['كاركرد كسر كار'],
                    'aqmaryKhoshky' => $line['كاركرد اقمارى خشكى'],
                    'nobateKary15' => $line['كاركرد نوبت كارى ۱۵%'],
                    'tatilKari' => $line['كاركرد تعطيل كارى'],
                    'nobateKary225' => $line['كاركرد نوبت كارى ۲۲/۵%'],
                    // 'karkardAdy' => $line['كاركرد عادى'],
                    // 'ezafeKary' => $line['اضافه كارى '],
                    // 'shabKari' => $line['شبکاری'],
                    // 'kasreKar' => $line['کسر کار'],
                    // 'mamuriateKhoshky' => $line['ماموریت خشکی'],
                    // 'mamuriateDarya' => $line['ماموریت دریا'],
                    // 'nobateKary15' => $line['نوبت کاری 15%'],
                    // 'nobateKary225' => $line['نوبت کاری 22.5%'],
                    // 'aqmaryDarya' => $line['اقماری دریا'],
                    // 'aqmaryKhoshky' => $line['اقماری خشکی'],
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

}
