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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('job')->nullable()->comment('شغل');
            $table->string('vahedSazmani')->nullable()->comment('واحد سازمانی');
            $table->string('mahaleKhedmat')->nullable()->comment('محل خدمت');
            $table->text('description')->nullable()->comment('توضیحات');
            $table->string('file')->nullable()->comment('فایل پیوست');
            $table->string('sharheMavaqa')->nullable()->comment('شرح ماوقع : انصراف/عدم انصراف');
            $table->foreignId('status_id')->constrained('statuses')->onUpdate('cascade')->onDelete('cascade')->comment(' آخرین وضعیت');

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
        Schema::dropIfExists('recruitments');
    }
};
