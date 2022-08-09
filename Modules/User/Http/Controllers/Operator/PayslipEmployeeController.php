<?php

namespace Modules\User\Http\Controllers\Operator;

use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use Illuminate\Routing\Controller;
use Modules\Payslip\Entities\Payslip;
use Illuminate\Contracts\Support\Renderable;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

class PayslipEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($codeMeli)
    {
        $payslips = Payslip::where('codeMeli', $codeMeli)
        ->get()
        ->groupBy('date_pay');

        $data = $payslips->map(function($item, $key) {

            $data = [
                'date_pay' => Verta::parse($key),
            ];

            $data['itemWithName'] = $item->unique('date_pay')->map(function($line) {
                return [
                    'code' => $line['code'],
                    'name' => $line['name'],
                    'family' => $line['family'],
                    'fatherName' => $line['fatherName'],
                    'codeMeli' => $line['codeMeli'],
                    'shomareShenasname' => $line['shomareShenasname'],
                    'job' => $line['job'],
                    'shomareHesab' => $line['shomareHesab'],
                    'mahaleKhedmat' => $line['mahaleKhedmat'],
                    'shomareBime' => $line['shomareBime'],
                    'mablaqKhalesPardakhty' => $line['mablaqKhalesPardakhty'],
                    'karkardAdy' => $line['karkardAdy'],
                    'ezafeKary' => $line['ezafeKary'],
                    'shabKari' => $line['shabKari'],
                    'kasreKar' => $line['kasreKar'],
                    'mamuriateKhoshky' => $line['mamuriateKhoshky'],
                    'mamuriateDarya' => $line['mamuriateDarya'],
                    'nobateKary15' => $line['nobateKary15'],
                    'nobateKary225' => $line['nobateKary225'],
                    'aqmaryDarya' => $line['aqmaryDarya'],
                    'aqmaryKhoshky' => $line['aqmaryKhoshky'],
                ];
            });

            $data['itemWithoutName'] = $item->map(function($line) {

                return [
                    $line['amelName'] => $line['amelValue'],
                    $line['amelName'] => $line['mazayaValue'],
                    $line['amelName'] => $line['kosoorValue'],
                ];

            });

            return $data;

        });


        return view('user::operator.payslipEmployee.index', compact('data'));
    }

    public function payslipSingle($date, $codeMeli)
    {
        $payslips = Payslip::where('codeMeli', $codeMeli)
        ->where('date_pay', $date)
        ->get();

        $data['itemWithName'] = [
            'code' => $payslips->first()['code'],
            'name' => $payslips->first()['name'],
            'family' => $payslips->first()['family'],
            'fatherName' => $payslips->first()['fatherName'],
            'codeMeli' => $payslips->first()['codeMeli'],
            'shomareShenasname' => $payslips->first()['shomareShenasname'],
            'job' => $payslips->first()['job'],
            'shomareHesab' => $payslips->first()['shomareHesab'],
            'mahaleKhedmat' => $payslips->first()['mahaleKhedmat'],
            'shomareBime' => $payslips->first()['shomareBime'],
            'mablaqKhalesPardakhty' => $payslips->first()['mablaqKhalesPardakhty'],
            'karkardAdy' => $payslips->first()['karkardAdy'],
            'ezafeKary' => $payslips->first()['ezafeKary'],
            'shabKari' => $payslips->first()['shabKari'],
            'kasreKar' => $payslips->first()['kasreKar'],
            'mamuriateKhoshky' => $payslips->first()['mamuriateKhoshky'],
            'mamuriateDarya' => $payslips->first()['mamuriateDarya'],
            'nobateKary15' => $payslips->first()['nobateKary15'],
            'nobateKary225' => $payslips->first()['nobateKary225'],
            'aqmaryDarya' => $payslips->first()['aqmaryDarya'],
            'aqmaryKhoshky' => $payslips->first()['aqmaryKhoshky'],

        ];
        $data += [
            'hokm' => $payslips->collect()->map(function($line)
                {
                    return [
                        $line['amelName'] => $line['amelValue'],

                    ];
        })];
        $data += [
            'mazaya' => $payslips->collect()->map(function($line)
                {
                    return [
                        $line['amelName'] => $line['mazayaValue'],
                    ];
        })];

        $data += [
            'kosoor' => $payslips->collect()->map(function($line)
                {
                    return [
                        $line['amelName'] => $line['kosoorValue'],
                    ];
        })];

        $data += [
            'date_pay' => $date
        ];


        return view('user::operator.payslipEmployee.payslip-single', compact('data', 'date'));


    }

    public function downloadPDF($date, $codeMeli)
    {

        $payslips = Payslip::where('codeMeli', $codeMeli)
        ->where('date_pay', $date)
        ->get();

        $data['itemWithName'] = [
            'code' => $payslips->first()['code'],
            'name' => $payslips->first()['name'],
            'family' => $payslips->first()['family'],
            'fatherName' => $payslips->first()['fatherName'],
            'codeMeli' => $payslips->first()['codeMeli'],
            'shomareShenasname' => $payslips->first()['shomareShenasname'],
            'job' => $payslips->first()['job'],
            'shomareHesab' => $payslips->first()['shomareHesab'],
            'mahaleKhedmat' => $payslips->first()['mahaleKhedmat'],
            'shomareBime' => $payslips->first()['shomareBime'],
            'mablaqKhalesPardakhty' => $payslips->first()['mablaqKhalesPardakhty'],
            'karkardAdy' => $payslips->first()['karkardAdy'],
            'ezafeKary' => $payslips->first()['ezafeKary'],
            'shabKari' => $payslips->first()['shabKari'],
            'kasreKar' => $payslips->first()['kasreKar'],
            'mamuriateKhoshky' => $payslips->first()['mamuriateKhoshky'],
            'mamuriateDarya' => $payslips->first()['mamuriateDarya'],
            'nobateKary15' => $payslips->first()['nobateKary15'],
            'nobateKary225' => $payslips->first()['nobateKary225'],
            'aqmaryDarya' => $payslips->first()['aqmaryDarya'],
            'aqmaryKhoshky' => $payslips->first()['aqmaryKhoshky'],

        ];
        $data += [
            'hokm' => $payslips->collect()->map(function($line)
                {
                    return [
                        $line['amelName'] => $line['amelValue'],

                    ];
        })];
        $data += [
            'mazaya' => $payslips->collect()->map(function($line)
                {
                    return [
                        $line['amelName'] => $line['mazayaValue'],
                    ];
        })];

        $data += [
            'kosoor' => $payslips->collect()->map(function($line)
                {
                    return [
                        $line['amelName'] => $line['kosoorValue'],
                    ];
        })];

        $data += [
            'date_pay' => $date
        ];


        $pdf = PDF::loadView('user::operator.payslipEmployee.pdfPayslip', $data);

        // return $pdf;
        return $pdf->stream('payslip.pdf');

      }
}
