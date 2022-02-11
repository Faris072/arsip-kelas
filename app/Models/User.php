<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function kelas(){
        return $this->hasMany(kelas::class,'id_kelas');
    }
}
