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
