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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('username',512)->unique();
            $table->string('password',512);
            $table->string('email',512)->unique();
            $table->text('address');
            $table->integer('point')->unique();
            $table->string('photo_profile');
            $table->text('telephone_number')->unique();
            $table->enum('role',['reader','writer']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
