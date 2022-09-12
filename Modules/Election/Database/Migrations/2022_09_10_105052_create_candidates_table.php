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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade')->comment('ایدی شرکت کننده');
            $table->string('resume_file')->nullable()->comment('فایل رزومه');
            $table->string('education')->nullable()->comment('تحصیلات');
            $table->foreignId('status_id')->constrained('statuses')->onUpdate('cascade')->onDelete('cascade')->comment('وضعیت');
            $table->string('place')->nullable()->comment('خرمشهر / تهران');
            $table->integer('view_Count')->nullable()->comment('میزان بازدیدازپروفایل شرکت کننده');
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
        Schema::dropIfExists('candidates');
    }
};
