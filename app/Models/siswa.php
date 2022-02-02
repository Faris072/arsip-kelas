<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $primaryKey = 'id_siswa';

    public function kelas(){
        return $this->belongsTo(kelas::class);
    }

    public function nilai(){
        return $this->hasMany(nilai::class);
    }

    public function kehadiran(){
        return $this->hasMany(kehadiran::class);
    }
}
