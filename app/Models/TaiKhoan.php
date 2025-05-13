<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaiKhoan extends Authenticatable
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

    protected $hidden = [
        'MatKhau',
    ];

    public function getAuthPassword()
    {
        return $this->MatKhau; 
    }

    public function getAuthIdentifierName()
    {
        return 'TenDN'; 
    }

    public function thongTin()
    {
        return $this->belongsTo(ThongTin::class, 'ID_CCCD', 'ID_CCCD');
    }
}