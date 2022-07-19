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
            $table->string('Code')->nullable();
            $table->string('Name')->nullable();
            $table->string('Family')->nullable();
            $table->string('FatherName')->nullable();
            $table->string('NationalCode')->nullable();
            $table->timestamp('date_pay')->nullable()->comment('تاریخ فیش');
            $table->string('BimehShare')->nullable()->comment('بیمه سهم کارمند');
            $table->string('JameKosoor')->nullable()->comment('جمع کسور');
            $table->string('JameMazaya')->nullable()->comment('جمع مزایا');
            $table->string('KarkardUdy')->nullable()->comment('روزهای کارکرد');
            $table->string('Mabna')->nullable()->comment('حقوق پایه');

            $table->string('ravandMaheqabl')->nullable()->comment('روند ماه قبل');
            $table->string('haqeMaskan')->nullable()->comment('حق مسکن');
            $table->string('boneKargary')->nullable()->comment('بن کارگري');
            $table->string('haqeMasuliat')->nullable()->comment('حق مسئوليت');
            $table->string('sayerHoquq')->nullable()->comment('ساير حقوق');
            $table->string('haqeShayestegy')->nullable()->comment('حق شايستگي');
            $table->string('bimeTaminEjtemaii')->nullable()->comment('بيمه تامين اجتماعي');
            $table->string('maliat')->nullable()->comment('ماليات');
            $table->string('ravandMaheJary')->nullable()->comment('روند ماه جاري');
            $table->string('bimeSahmeKarfarma')->nullable()->comment('بيمه سهم کارفرما');
            $table->string('bimeBikary')->nullable()->comment('بيمه بيکاري');
            $table->string('bimeTakmili')->nullable()->comment('بيمه تکميلي - البرز');
            $table->string('vameSherkat')->nullable()->comment('وام شرکت');
            $table->string('DRes1')->nullable()->comment('');
            $table->string('DRes2')->nullable()->comment('');
            $table->string('FSType')->nullable()->comment('');

            $table->string('withName')->nullable()->comment('');
            $table->string('TotalBimeh')->nullable()->comment('');
            $table->string('FactorValue')->nullable()->comment('');

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
