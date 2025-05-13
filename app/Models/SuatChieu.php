<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{
    protected $table = 'suat_chieu'; 
    protected $primaryKey = 'ID_SuatChieu'; 

    public function phim()
    {
        return $this->belongsTo(Phim::class, 'ID_Phim', 'ID_Phim');
    }
    public function rap()
    {
        return $this->belongsTo(Rap::class, 'ID_Rap', 'ID_Rap');
    }
}