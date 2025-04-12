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
        Schema::create('ve_xem_phim', function (Blueprint $table) {
            $table->id('ID_Ve');
            $table->integer('SoLuong');
            $table->string('TenPhim', 100);
            $table->date('NgayXem');
            $table->string('DiaChi', 255);
            $table->decimal('GiaVe', 10, 2);
            $table->string('TrangThai', 50);
            $table->unsignedBigInteger('ID_SuatChieu');
            $table->unsignedBigInteger('ID_HoaDon');
            $table->unsignedBigInteger('ID_Ghe')->unique();
            $table->foreign('ID_SuatChieu')->references('ID_SuatChieu')->on('suat_chieu');
            $table->foreign('ID_HoaDon')->references('ID_HoaDon')->on('hoa_don');
            $table->foreign('ID_Ghe')->references('ID_Ghe')->on('ghe_ngoi');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ve_xem_phim');
    }
};
