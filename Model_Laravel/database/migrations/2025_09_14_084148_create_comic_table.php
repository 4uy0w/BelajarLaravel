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
        Schema::create('comic', function (Blueprint $table) {
            $table->increments('comic_id');
            $table->string('comic_title')->unique();
            $table->integer('comic_page');
            $table->integer('comic_price')->unique();
            $table->unsignedInteger('comic_writer');
            $table->foreign('comic_writer')->references('user_id')->on('user')->onUpdate('cascade')->onDelete('restrict');
            $table->string('genre',512);
            $table->date('comic_release_date');
            $table->text('comic_comment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comic');
    }
};
