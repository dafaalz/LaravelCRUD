<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $primaryKey = 'id_user';
    protected $fillable = ['username', 'password', 'level_access'];

    public function transaksis() {
        return $this->hasMany(Transaksi::class, 'user_id');
    }

    public function riwayatLagus() {
        return $this->hasMany(RiwayatLagu::class, 'user_id');
    }
}
