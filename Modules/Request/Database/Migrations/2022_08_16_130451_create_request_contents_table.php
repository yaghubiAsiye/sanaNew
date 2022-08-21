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
            $table->bigInteger('parent_id')->nullable()->default(0);
            $table->foreignId('sender_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('request_type_id')->constrained('request_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->string('sender_type')->nullable();
            $table->text('content')->nullable();
            $table->timestamp('receiver_seen_at')->nullable();
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
