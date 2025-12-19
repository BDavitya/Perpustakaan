<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendaEvent extends Model
{
    protected $table = 'agenda_events';
    protected $primaryKey = 'id_event';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'lokasi',
        'kuota',
        'jumlah_peserta',
        'id_kategori'
    ];

    public function kategori()
    {
        return $this->belongsTo(AgendaKategori::class, 'id_kategori');
    }
}