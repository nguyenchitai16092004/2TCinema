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
        Schema::create('phim', function (Blueprint $table) {
            $table->id('ID_Phim');
            $table->string('TenPhim', 100);
            $table->string('Slug', 255);
            $table->string('DaoDien', 100);
            $table->string('DienVien', 255);
            $table->integer('ThoiLuong');
            $table->date('NgayKhoiChieu');
            $table->text('MoTaPhim');
            $table->string('Trailer', 255)->nullable();
            $table->string('HinhAnh', 255)->nullable();
            $table->integer('DoTuoi');
            $table->string('DoHoa', 50);
            $table->string('NgonNgu', 50);
            $table->string('TrangThai', 50);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phim');
    }
};
