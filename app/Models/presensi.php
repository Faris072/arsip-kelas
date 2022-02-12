<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//untuk soft delete

class presensi extends Model
{
    use SoftDeletes;//untuk soft delete
    use HasFactory;

    protected $table = 'presensi';

    protected $primaryKey = 'id_presensi';

    protected $guarded = ['id_presensi'];

    public function kelas(){
        return $this->belongsTo(kelas::class,'id_kelas');
    }

    public function kehadiran(){
        return $this->hasMany(kehadiran::class,'id_kehadiran');
    }
}
