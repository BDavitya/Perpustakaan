<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendaKategori extends Model
{
    protected $table = 'agenda_kategori';
    protected $primaryKey = 'id_kategori';
    public $timestamps = false;

    protected $fillable = ['nama_kategori'];

    public function events()
    {
        return $this->hasMany(AgendaEvent::class, 'id_kategori');
    }
}