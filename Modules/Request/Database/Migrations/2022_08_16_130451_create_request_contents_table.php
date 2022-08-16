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
        Schema::create('request_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('receiver_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('request_type_id')->constrained('request_types')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['بررسی نشده', 'درحال پیگیری', 'درحال انجام', 'پاسخ داده شده', 'انجام شده', 'پایان یافته'])->nullable();
            $table->text('text')->nullable();
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
        Schema::dropIfExists('request_contents');
    }
};
