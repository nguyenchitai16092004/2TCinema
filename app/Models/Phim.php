<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table = 'phim'; 
    protected $primaryKey = 'ID_Phim' ;

    public function suatChieu()
    {
        return $this->hasMany(SuatChieu::class, 'ID_Phim', 'ID_Phim');
    }
}   