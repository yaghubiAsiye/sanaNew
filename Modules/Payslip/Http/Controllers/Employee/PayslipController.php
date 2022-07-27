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
        $payslips = Payslip::where('NationalCode', auth()->user()->code_meli)
        ->get()
        ->groupBy('date_pay');


        $data = $payslips->map(function($item, $key) {

            $data = [
                'date_pay' => $key,
            ];

            $data['itemWithName'] = $item->unique('date_pay')->map(function($line) {
                return [
                    'Code' => $line['Code'],
                    'Name' => $line['Name'],
                    'Family' => $line['Family'],
                    'FatherName' => $line['FatherName'],
                    'NationalCode' => $line['NationalCode'],
                    'TotalBimeh' => $line['TotalBimeh'],
                    'BimehShare' => $line['BimehShare'],
                    'JameKosoor' => $line['JameKosoor'],
                    'JameMazaya' => $line['JameMazaya'],
                    'KarkardUdy' => $line['KarkardUdy'],
                    'Mabna' => $line['Mabna'],
                    'DRes1' => $line['DRes1'],
                    'DRes2' => $line['DRes2'],
                ];
            });

            $data['itemWithoutName'] = $item->map(function($line) {

                return [
                    $line['withName'] => $line['FactorValue'],
                ];

            });

            return $data;

        });


        return view('payslip::employee.payslips', compact('data'));
    }

    public function payslipSingle($value)
    {
        $payslips = Payslip::where('NationalCode', auth()->user()->code_meli)
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
                    'Code' => $line['Code'],
                    'Name' => $line['Name'],
                    'Family' => $line['Family'],
                    'FatherName' => $line['FatherName'],
                    'NationalCode' => $line['NationalCode'],
                    'TotalBimeh' => $line['TotalBimeh'],
                    'BimehShare' => $line['BimehShare'],
                    'JameKosoor' => $line['JameKosoor'],
                    'JameMazaya' => $line['JameMazaya'],
                    'KarkardUdy' => $line['KarkardUdy'],
                    'Mabna' => $line['Mabna'],
                    'DRes1' => $line['DRes1'],
                    'DRes2' => $line['DRes2'],
                ];
            });

            $data['itemWithoutName'] = $item->map(function($line)
            {

                return [
                    $line['withName'] => $line['FactorValue'],
                ];

            });

            return $data;

        });


        return view('payslip::employee.payslip-single', compact('data', 'value'));


    }

    public function downloadPDF($value)
    {
        $payslips = Payslip::where('NationalCode', auth()->user()->code_meli)
        ->where('date_pay', $value)
        ->get()
        ->groupBy('date_pay');


        $data = $payslips->unique('date_pay')->map(function($item, $key)
        {

            $data['itemWithName'] = $item->map(function($line) {
                return [
                    'Code' => $line['Code'],
                    'Name' => $line['Name'],
                    'Family' => $line['Family'],
                    'FatherName' => $line['FatherName'],
                    'NationalCode' => $line['NationalCode'],
                    'TotalBimeh' => $line['TotalBimeh'],
                    'BimehShare' => $line['BimehShare'],
                    'JameKosoor' => $line['JameKosoor'],
                    'JameMazaya' => $line['JameMazaya'],
                    'KarkardUdy' => $line['KarkardUdy'],
                    'Mabna' => $line['Mabna'],
                    'DRes1' => $line['DRes1'],
                    'DRes2' => $line['DRes2'],
                ];
            });

            $data['itemWithoutName'] = $item->map(function($line)
            {

                return [
                    $line['withName'] => $line['FactorValue'],
                ];

            });

            return $data;

        });
        $data = $data->toArray();
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
