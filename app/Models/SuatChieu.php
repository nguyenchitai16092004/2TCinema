<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{

    use HasFactory;

    protected $table = 'suat_chieu';
    protected $primaryKey = 'ID_SuatChieu';
    protected $fillable = ['GioChieu', 'NgayChieu', 'GiaVe', 'ID_PhongChieu', 'ID_Phim'];


    public function phim()
    {
        return $this->belongsTo(Phim::class, 'ID_Phim', 'ID_Phim');
    }

    public function phongChieu()
    {
        return $this->belongsTo(PhongChieu::class, 'ID_PhongChieu', 'ID_PhongChieu');
    }
    public function rap()
    {
        return $this->belongsTo(Rap::class, 'ID_Rap', 'ID_Rap');

    }
}