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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('parent_id')->nullable()->default(0);
            // $table->foreignId('sender_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('status_id')->constrained('statuses')->onUpdate('cascade')->onDelete('cascade');
            // $table->string('type')->nullable();
            // $table->text('content')->nullable();
            // $table->enum('starter_type', ['employee', 'operator'])->nullable();
            // $table->timestamp('receiver_seen_at')->nullable();

            // $table->enum('status', ['بررسی نشده', 'درحال پیگیری', 'درحال انجام', 'پاسخ داده شده', 'انجام شده', 'پایان یافته'])->nullable();
            // $table->foreignId('operator_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade')->nullable();
            // $table->foreignId('employee_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->string('status')->nullable();
            // $table->string('type')->nullable();
            // $table->text('content')->nullable();
            // $table->text('response')->nullable();
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
        Schema::dropIfExists('requests');
    }
};
