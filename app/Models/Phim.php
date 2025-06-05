<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    use HasFactory;

    protected $table = 'phim';
    protected $primaryKey = 'ID_Phim';

    protected $fillable = [
        'TenPhim',
        'Slug',
        'DaoDien',
        'DienVien',
        'ThoiLuong',
        'NgayKhoiChieu',
        'NgayKetThuc',
        'MoTaPhim',
        'Trailer',
        'HinhAnh',
        'DoTuoi',
        'DoHoa',
        'NgonNgu',  
        'ID_TheLoaiPhim'
    ];

    // Quan hệ với bảng thể loại phim
    public function theLoai()
    {
        return $this->belongsTo(TheLoaiPhim::class, 'ID_TheLoaiPhim', 'ID_TheLoaiPhim');
    }

    public function suatChieu()
    {
        return $this->hasMany(SuatChieu::class, 'ID_Phim', 'ID_Phim');
    }

    // ✅ THÊM dòng này để tránh lỗi
    public function binhLuan()
    {
        return $this->hasMany(BinhLuan::class, 'ID_Phim', 'ID_Phim');
    }
}
