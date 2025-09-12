<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Container\Attributes\Auth\Siswa as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'jurusan'
    ];
    public function getRouteKeyName()
{
    return 'nis';
}
};
