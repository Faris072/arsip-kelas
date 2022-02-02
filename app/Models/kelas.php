<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $primaryKey = 'id_kelas';

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function presensi(){
        return $this->hasMany(presensi::class);
    }

    public function siswa(){
        return $this->hasMany(siswa::class);
    }

    public function mapel(){
        return $this->hasMany(mapel::class);
    }

}
