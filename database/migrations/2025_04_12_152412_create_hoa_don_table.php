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
            $table->bigIncrements('ID_HoaDon');
            $table->decimal('TongTien', 12, 2);
            $table->string('PTTT', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci'); 
            $table->unsignedBigInteger('ID_TaiKhoan');
            $table->foreign('ID_TaiKhoan')->references('ID_TaiKhoan')->on('tai_khoan');
            $table->tinyInteger('TrangThaiXacNhanHoaDon')->nullable()->comment('0: Chưa xác nhận 1: Đã xác nhận 2: Đã hủy');
            $table->tinyInteger('TrangThaiXacNhanThanhToan')->nullable()->comment('0: Chưa thanh toán 1: Đã thanh toán');
            $table->text('payment_link')->nullable()->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->text('order_code')->nullable()->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
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
