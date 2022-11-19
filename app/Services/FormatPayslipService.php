<?php


namespace App\Services;

use Carbon\Carbon;
use Modules\Payslip\Entities\Payslip;
use Hekmatinasser\Verta\Verta;
use Alkoumi\LaravelArabicNumbers\Numbers;

class FormatPayslipService
{

    public function pdfFormat($date, $code_meli)
    {
        $payslips = Payslip::where('codeMeli', $code_meli)
        ->orWhere('codeMeli', $this->convertToPersianNumber($code_meli))
        ->where('date_pay', $date)
        ->get();

        $kosoorSum = Payslip::where('codeMeli', $code_meli)
        ->orWhere('codeMeli', $this->convertToPersianNumber($code_meli))
        ->where('date_pay', $date)
        ->sum('kosoorValue');

        $mazayaSum = Payslip::where('codeMeli', $code_meli)
        ->orWhere('codeMeli', $this->convertToPersianNumber($code_meli))
        ->where('date_pay', $date)
        ->sum('mazayaValue');

        $data['kosoorSum'] = $this->convertToPersianNumber(number_format($kosoorSum));
        $data['mazayaSum'] = $this->convertToPersianNumber(number_format($mazayaSum));


        $data['itemWithName'] = [
            'code' => $this->convertToPersianNumber($payslips->first()['code']),
            'name' => $payslips->first()['name'],
            'family' => $payslips->first()['family'],
            'fatherName' => $payslips->first()['fatherName'],
            'codeMeli' => $this->convertToPersianNumber($payslips->first()['codeMeli']),
            'shomareShenasname' => $payslips->first()['shomareShenasname'],
            'job' => $payslips->first()['job'],
            'shomareHesab' => $this->convertToPersianNumber($payslips->first()['shomareHesab']),
            'mahaleKhedmat' => $payslips->first()['mahaleKhedmat'],
            'shomareBime' => $this->convertToPersianNumber($payslips->first()['shomareBime']),
            'mablaqKhalesPardakhty' => $this->convertToPersianNumber(number_format($payslips->first()['mablaqKhalesPardakhty'])),
            'karkardAdy' => $this->convertToPersianNumber($payslips->first()['karkardAdy']),
            'ezafeKary' => $this->convertToPersianNumber($payslips->first()['ezafeKary']),
            'shabKari' => $this->convertToPersianNumber($payslips->first()['shabKari']),
            'kasreKar' => $this->convertToPersianNumber($payslips->first()['kasreKar']),
            'mamuriateKhoshky' => $this->convertToPersianNumber($payslips->first()['mamuriateKhoshky']),
            'mamuriateDarya' => $this->convertToPersianNumber($payslips->first()['mamuriateDarya']),
            'nobateKary15' => $this->convertToPersianNumber($payslips->first()['nobateKary15']),
            'nobateKary225' => $this->convertToPersianNumber($payslips->first()['nobateKary225']),
            'aqmaryDarya' => $this->convertToPersianNumber($payslips->first()['aqmaryDarya']),
            'aqmaryKhoshky' => $this->convertToPersianNumber($payslips->first()['aqmaryKhoshky']),

        ];

        $data += [
            'hokm' => $payslips->collect()->map(function($line)
                {
                    return [
                        $line['amelName'] => $this->convertToPersianNumber(number_format($line['amelValue'])),

                    ];
        })];

        $data += [
            'mazaya' => $payslips->collect()->map(function($line)
                {
                    return [
                        $line['amelName'] => $this->convertToPersianNumber(number_format($line['mazayaValue'])),
                    ];
        })];

        $data += [
            'kosoor' => $payslips->collect()->map(function($line)
                {
                    return [
                        $line['amelName'] => $this->convertToPersianNumber(number_format($line['kosoorValue'])),
                    ];
        })];

        $data += [
            'date_pay' => $date
        ];


        return $data;
    }

    public function payslipsFormat($code_meli)
    {
        $payslips = Payslip::where('codeMeli', $code_meli)
        ->orWhere('codeMeli', $this->convertToPersianNumber($code_meli))
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

        return $data;

    }

    public function convertToPersianNumber($str)
    {
        $newStr = Numbers::ShowInArabicDigits($str);
        return $newStr;
    }





}
