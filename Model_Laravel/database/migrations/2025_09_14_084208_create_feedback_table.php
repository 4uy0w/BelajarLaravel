<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('feedback_id');
            $table->string('feedback_email_sender');
            $table->unsignedInteger('feedback_user_sender');
            $table->foreign('feedback_user_sender')->references('user_id')->on('user')->onUpdate('cascade')->onDelete('restrict');
            $table->text('feedback_comment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
