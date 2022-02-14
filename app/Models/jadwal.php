<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//untuk soft delete

class jadwal extends Model
{
    use HasFactory;
    use SoftDeletes;//untuk soft delete

    protected $table = 'jadwal';

    protected $primaryKey = 'id_jadwal';

    protected $guarded = ['id_jadwal'];

    public function user(){
        return $this->belongsTo(user::class,'id_jadwal');
    }
}
