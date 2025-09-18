<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory; 

    protected $primaryKey = 'id_user';
    protected $fillable = ['username', 'password', 'level_access'];

    public function transaksis() {
        return $this->hasMany(Transaksi::class, 'user_id');
    }

    public function riwayatLagus() {
        return $this->hasMany(RiwayatLagu::class, 'user_id');
    }
}
