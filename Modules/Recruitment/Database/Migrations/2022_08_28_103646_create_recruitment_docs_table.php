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
        Schema::create('recruitment_docs', function (Blueprint $table) {
            $table->id();
            $table->boolean('cshenasnameh')->nullable()->comment('کپی شناسنامه');
            $table->boolean('img')->nullable()->comment('عکس پرسنلی');
            $table->boolean('cdore')->nullable()->comment('کپی مدارک دوره های اموزشی');
            $table->boolean('ctahsil')->nullable()->comment('کپی مدارک کلیه مقاطع تحصیلی');
            $table->boolean('cmaqalat')->nullable()->comment('کپی تقدیر نامه و مقالات ...');
            $table->boolean('ckartmeli')->nullable()->comment('کپی کارت ملی');
            $table->boolean('cbimeh')->nullable()->comment('کپی سابقه کاری بیمه');
            $table->boolean('ckhedmat')->nullable()->comment('کپی کارت پایان خدمت');
            $table->boolean('cjanbazi')->nullable()->comment('کپی کارت شناسایی جانبازی');
            $table->boolean('suepishine')->nullable()->comment('گواهی عدم سو پیشینه');
            $table->boolean('cshenasnameT')->nullable()->comment('کپی شناسنامه و بیمه افراد تحت تکفل');
            $table->boolean('imgT')->nullable()->comment('عکس افراد تحت تکفل');
            $table->boolean('cdaftarchebimeh')->nullable()->comment('کپی دفترچه بیمه');
            $table->boolean('accesstejarat')->nullable()->comment('اکسس کارت تجارت');
            $table->boolean('namnevisihozuri')->nullable()->comment('مراجعه حضوری به بیمه');
            $table->boolean('porseshname')->nullable()->comment('فرم پرسش نامه');
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
        Schema::dropIfExists('recruitment_docs');
    }
};
