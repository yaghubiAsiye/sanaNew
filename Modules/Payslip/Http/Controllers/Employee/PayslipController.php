<?php

namespace Modules\Payslip\Http\Controllers\Employee;

use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Payslip\Entities\Payslip;
use Illuminate\Contracts\Support\Renderable;


class PayslipController extends Controller
{
    /**
     * Display a payslip from any Employee.
     * @return Renderable
     */
    public function payslips()
    {
        // $payslips = Payslip::where('codeMeli', auth()->user()->code_meli)
        $payslips = Payslip::where('codeMeli','0072585722')
        ->get()
        ->groupBy('date_pay');

        $data = $payslips->map(function($item, $key) {

            $data = [
                'date_pay' => $key,
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

        //    echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // dd('ok');


        return view('payslip::employee.payslips', compact('data'));
    }

    public function payslipSingle($year, $month, $day)
    {

        $value = $year. '/' . $month . '/' . $day;
        // $payslips = Payslip::where('codeMeli', auth()->user()->code_meli)
        $payslips = Payslip::where('codeMeli','0072585722')
        ->where('date_pay', $value)
        ->get()
        ->groupBy('date_pay');


        $data = $payslips->unique('date_pay')->map(function($item, $key)
        {

            $data = [
                'date_pay' => $key,
            ];

            $data['itemWithName'] = $item->map(function($line) {
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

            $data['itemWithoutName'] = $item->map(function($line)
            {

                return [
                    $line['amelName'] => $line['amelValue'],
                    $line['amelName'] => $line['mazayaValue'],
                    $line['amelName'] => $line['kosoorValue'],
                ];

            });

            return $data;

        });
        //   echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // dd('ok');


        return view('payslip::employee.payslip-single', compact('data', 'value'));


    }

    public function downloadPDF($year, $month, $day)
    {
        $value = $year. '/' . $month . '/' . $day;
        // $payslips = Payslip::where('codeMeli', auth()->user()->code_meli)
        $payslips = Payslip::where('codeMeli','0072585722')
        ->where('date_pay', $value)
        ->get();
        // ->groupBy('date_pay');

        //  echo "<pre>";
        // print_r($payslips);
        // echo "</pre>";
        // dd('ok');

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

            // 'Code' => $payslips->first()['Code'],
            // 'Name' => $payslips->first()['Name'],
            // 'Family' => $payslips->first()['Family'],
            // 'FatherName' => $payslips->first()['FatherName'],
            // 'NationalCode' => $payslips->first()['NationalCode'],
            // 'TotalBimeh' => $payslips->first()['TotalBimeh'],
            // 'BimehShare' => $payslips->first()['BimehShare'],
            // 'JameKosoor' => $payslips->first()['JameKosoor'],
            // 'JameMazaya' => $payslips->first()['JameMazaya'],
            // 'KarkardUdy' => $payslips->first()['KarkardUdy'],
            // 'Mabna' => $payslips->first()['Mabna'],
            // 'DRes1' => $payslips->first()['DRes1'],
            // 'DRes2' => $payslips->first()['DRes2'],
        ];

        // $data += $payslips->map(function($item, $key)
        // {

            // echo "<pre>";
            // print_r($item);
            // echo "</pre>";
            // $data['itemWithName'] = $item->filter(function($line) {
            //     return [
            //         'Code' => $line['Code'],
            //         'Name' => $line['Name'],
            //         'Family' => $line['Family'],
            //         'FatherName' => $line['FatherName'],
            //         'NationalCode' => $line['NationalCode'],
            //         'TotalBimeh' => $line['TotalBimeh'],
            //         'BimehShare' => $line['BimehShare'],
            //         'JameKosoor' => $line['JameKosoor'],
            //         'JameMazaya' => $line['JameMazaya'],
            //         'KarkardUdy' => $line['KarkardUdy'],
            //         'Mabna' => $line['Mabna'],
            //         'DRes1' => $line['DRes1'],
            //         'DRes2' => $line['DRes2'],
            //     ];
            // });

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


            // return $data;

        // });
        // $data = $data->toArray();
        $data += [
            'date_pay' => $value
        ];

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // dd('ok');


        $pdf = PDF::loadView('payslip::employee.pdfPayslip', $data);

        return $pdf->stream('payslip.pdf');

      }


}
