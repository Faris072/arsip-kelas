<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel';

    protected $primaryKey = 'id_mapel';

    protected $guarded = ['id_mapel'];

    public function kelas(){
        return $this->belongsTo(kelas::class);
    }

    public function nilai(){
        return $this->hasMany(nilai::class);
    }
}
