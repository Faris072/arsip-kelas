<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//untuk soft delete

class kehadiran extends Model
{
    use SoftDeletes;//untuk soft delete
    use HasFactory;

    protected $table = 'kehadiran';

    protected $primaryKey = 'id_kehadiran';

    protected $guarded = ['id_kehadiran'];

    public function presensi(){
        return $this->belongsTo(presensi::class,'id_presensi');
    }

    public function siswa(){
        return $this->belongsTo(siswa::class,'id_siswa');
    }
}
