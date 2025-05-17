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
}