<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaiKhoan extends Model
{
    use HasFactory;

    protected $table = 'tai_khoan';
    protected $primaryKey = 'ID_TaiKhoan';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'TenDN',
        'MatKhau',
        'VaiTro',
        'TrangThai',
        'ID_CCCD',
    ];

    // Quan hệ: Tài khoản thuộc về một thông tin (thong_tin)
    public function thongTin()
    {
        return $this->belongsTo(ThongTin::class, 'ID_CCCD', 'ID_CCCD');
    }
}
