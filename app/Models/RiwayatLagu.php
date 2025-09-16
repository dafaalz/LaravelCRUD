<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatLagu extends Model
{
    protected $primaryKey = 'id_play';
    public $timestamps = false;
    protected  $fillable = ['user_id', 'lagu_id', 'played_at' ];

    public function user() {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function lagu() {
        return $this ->belongsTo(Lagu::class, 'lagu_id');
    }
}
