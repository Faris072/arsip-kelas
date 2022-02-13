<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//untuk soft delete

class kelas extends Model
{
    use SoftDeletes;//untuk soft delete
    use HasFactory;

    protected $table = 'kelas';

    protected $primaryKey = 'id_kelas';

    protected $guarded = ['id_kelas'];

    public function user(){
        return $this->belongsTo(User::class,'id');
    }

    public function presensi(){
        return $this->hasMany(presensi::class,'id_presensi');
    }

    public function siswa(){
        return $this->hasMany(siswa::class,'id_siswa');
    }

    public function mapel(){
        return $this->hasMany(mapel::class, 'id_mapel');
    }

}
