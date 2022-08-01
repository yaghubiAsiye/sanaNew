<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->id();
            $table->string('date_pay')->nullable()->comment('تاریخ فیش');
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('fatherName')->nullable();

            $table->string('codeMeli')->nullable()->comment('کد ملی');
            $table->string('shomareShenasname')->nullable()->comment('شماره شناسنامه');
            $table->string('job')->nullable()->comment('شغل');
            $table->string('shomareHesab')->nullable()->comment('شماره حساب');
            $table->string('mahaleKhedmat')->nullable()->comment('محل خدمت');
            $table->string('shomareBime')->nullable()->comment('شماره بیمه');

            $table->string('amelName')->nullable()->comment('نام عامل');
            $table->string('amelValue')->nullable()->comment('مبلغ حكم');
            $table->string('mazayaValue')->nullable()->comment('مزايا');
            $table->string('kosoorValue')->nullable()->comment('كسور');
            $table->string('mablaqKhalesPardakhty')->nullable()->comment('مبلغ خالص پرداختى');
            $table->string('karkardAdy')->nullable()->comment('کارکرد عادی ');
            $table->string('ezafeKary')->nullable()->comment('اضافه کاری');
            $table->string('shabKari')->nullable()->comment('شبکاری');
            $table->string('kasreKar')->nullable()->comment('کسر کار');
            $table->string('mamuriateKhoshky')->nullable()->comment('ماموریت خشکی ');
            $table->string('mamuriateDarya')->nullable()->comment('ماموریت دریا ');
            $table->string('nobateKary15')->nullable()->comment('نوبت کاری 15%');
            $table->string('nobateKary225')->nullable()->comment('نوبت کاری 22.5%');
            $table->string('aqmaryDarya')->nullable()->comment('اقماری دریا');
            $table->string('aqmaryKhoshky')->nullable()->comment('اقماری خشکی ');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payslips');
    }
};
