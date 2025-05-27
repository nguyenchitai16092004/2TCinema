<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoa_don'; 

    protected $primaryKey = 'ID_HoaDon'; 

    public $timestamps = true; 

    protected $fillable = [
        'NgayTao',
        'TongTien',
        'PTTT',
        'ID_TaiKhoan',
    ];
    
    // Quan hệ với TaiKhoan - một hóa đơn thuộc về một tài khoản
    public function taiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'ID_TaiKhoan', 'ID_TaiKhoan');
    }
    
    // Quan hệ với VeXemPhim - một hóa đơn có nhiều vé xem phim
    public function veXemPhim()
    {
        return $this->hasMany(VeXemPhim::class, 'ID_HoaDon', 'ID_HoaDon');
    }
}