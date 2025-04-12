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
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->id('ID_HoaDon');
            $table->date('NgayTao');
            $table->decimal('TongTien', 12, 2);
            $table->string('PTTT', 50);
            $table->unsignedBigInteger('ID_TaiKhoan');
            $table->foreign('ID_TaiKhoan')->references('ID_TaiKhoan')->on('tai_khoan');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_don');
    }
};
