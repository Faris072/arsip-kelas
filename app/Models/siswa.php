<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//untuk soft delete

class siswa extends Model
{
    use SoftDeletes;//untuk soft delete
    use HasFactory;

    protected $table = 'siswa';

    protected $primaryKey = 'id_siswa';

    protected $guarded = ['id_siswa'];

    public function kelas(){
        return $this->belongsTo(kelas::class,'id_kelas');
    }

    public function nilai(){
        return $this->hasMany(nilai::class,'id_nilai');
    }

    public function kehadiran(){
        return $this->hasMany(kehadiran::class,'id_kehadiran');
    }
}
