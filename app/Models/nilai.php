<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//untuk soft delete

class nilai extends Model
{
    use SoftDeletes;//untuk soft delete
    use HasFactory;

    protected $table = 'nilai';

    protected $primaryKey = 'id_nilai';

    protected $guarded = ['id_nilai'];

    public function siswa(){
        return $this->belongsTo(siswa::class,'id_siswa');//harus ada foreign key
    }

    public function mapel(){
        return $this->belongsTo(mapel::class,'id_mapel');
    }
}
