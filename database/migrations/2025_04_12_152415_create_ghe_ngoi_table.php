<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ghe_ngoi', function (Blueprint $table) {
            $table->id('ID_Ghe');
            $table->string('TenGhe', 10);
            $table->integer("TrangThai");
            $table->string('LoaiGhe', 50);
            $table->unsignedBigInteger('ID_PhongChieu');
            $table->foreign('ID_PhongChieu')->references('ID_PhongChieu')->on('phong_chieu');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ghe_ngoi');
    }
};
