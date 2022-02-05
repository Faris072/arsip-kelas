<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kehadiran extends Model
{
    use HasFactory;

    protected $table = 'kehadiran';

    protected $primaryKey = 'id_kehadiran';

    protected $guarded = ['id_kehadiran'];

    public function presensi(){
        return $this->belongsTo(presensi::class);
    }

    public function siswa(){
        return $this->belongsTo(siswa::class);
    }
}
