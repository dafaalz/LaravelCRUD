<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Lagu extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_lagu';
    protected $fillable = ['judul', 'filename', 'artis', 'album', 'cover_album'];

    public function transaksis(){
        return $this->hasMany(Transaksi::class, 'lagu_id');
    }

    public function riwayatLagus() {
        return $this->hasMany(RiwayatLagu::class,'lagu_id');
    }
}


