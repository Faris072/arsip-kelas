<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presensi extends Model
{
    use HasFactory;

    protected $table = 'presensi';

    protected $primaryKey = 'id_presensi';

    public function kelas(){
        return $this->belongsTo(kelas::class);
    }

    public function kehadiran(){
        return $this->hasMany(kehadiran::class);
    }
}
