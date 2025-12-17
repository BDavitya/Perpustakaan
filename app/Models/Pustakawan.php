<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pustakawan extends Model
{
    protected $table = 'pustakawan';
    protected $primaryKey = 'id_admin';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'nama_lengkap'
    ];

    // Relasi: admin punya banyak konten
    public function konten()
    {
        return $this->hasMany(Konten::class, 'id_admin');
    }
}
