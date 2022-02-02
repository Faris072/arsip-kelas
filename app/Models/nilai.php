<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $primaryKey = 'id_nilai';

    public function siswa(){
        return $this->belongsTo(siswa::class);
    }

    public function mapel(){
        return $this->belongsTo(mapel::class);
    }
}
