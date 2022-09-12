<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $statuses = [
            [
                'status' => 'درانتظار پاسخ',
                'color' => 'theme-12'
            ],
            [
                'status' => 'پاسخ داده شده',
                'color' => 'theme-9'
            ],
            [
                'status' => 'پاسخ پرسنل',
                'color' => 'theme-1'
            ],
            [
                'status' => 'بسته شده',
                'color' => 'gray-700'
            ],
            [
                'status' => 'مشاهده نشده',
                'color' => 'theme-12'
            ],
            [
                'status' => 'مشاهده شده',
                'color' => 'theme-1'
            ],
            [
                'status' => 'تکمیل ارزیابی حقوقی',
                'color' => 'theme-1'
            ],
            [
                'status' => 'تشکیل قرارداد',
                'color' => 'theme-9'
            ],
            [
                'status' => 'پایان یافته',
                'color' => 'gray-200'
            ],
            [
                'status' => 'تایید شده',
                'color' => 'theme-9'
            ],
            [
                'status' => 'تایید نشده',
                'color' => 'theme-12'
            ],

        ];

        foreach ($statuses as $status)
        {
            Status::create([
                'status' => $status['status'],
                'color' => $status['color'],
            ]);
        }

    }
}
