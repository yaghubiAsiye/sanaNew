<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'status' => 'بررسی نشده',
                'color' => 'text-gray-700'
            ],
            [
                'status' => 'درحال پیگیری',
                'color' => 'text-theme-1'
            ],
            [
                'status' => 'درحال انجام',
                'color' => 'text-theme-1'
            ],
            [
                'status' => 'پاسخ داده شده',
                'color' => ''
            ],
            [
                'status' => 'انجام شده',
                'color' => 'text-theme-9'
            ],
            [
                'status' => 'پایان یافته',
                'color' => 'text-theme-9'
            ],

        ];
    }
}
