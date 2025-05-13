<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoaiPhim extends Model
{
    use HasFactory;

    protected $table = 'the_loai_phim';
    protected $primaryKey = 'ID_TheLoaiPhim';
    
    protected $fillable = [
        'TenTheLoai',
    ];

    // Quan hệ với bảng phim
    public function phims()
    {
        return $this->hasMany(Phim::class, 'ID_TheLoaiPhim', 'ID_TheLoaiPhim');
    }
}