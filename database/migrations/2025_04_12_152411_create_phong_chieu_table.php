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
        Schema::create('phong_chieu', function (Blueprint $table) {
            $table->id('ID_PhongChieu');
            $table->string('TenPhongChieu', 100);
            $table->string('TrangThai', 50);
            $table->integer('SoLuongGhe');
            $table->unsignedBigInteger('ID_Rap');
            
            $table->foreign('ID_Rap')->references('ID_Rap')->on('rap');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phong_chieu');
    }
};
