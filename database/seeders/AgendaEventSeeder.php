<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaEventSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('agenda_events')->insert([
            [
                'id_kategori' => 1, // Diskusi Buku
                'judul' => 'Diskusi Buku: "Thinking, Fast and Slow"',
                'deskripsi' => 'Bedah buku karya Daniel Kahneman tentang psikologi pengambilan keputusan.',
                'tanggal' => '2025-11-25',
                'jam_mulai' => '14:00:00',
                'jam_selesai' => '16:00:00',
                'lokasi' => 'Ruang Diskusi Lt. 2',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_kategori' => 2, // Workshop
                'judul' => 'Workshop Penulisan Karya Ilmiah',
                'deskripsi' => 'Pelatihan teknik menulis karya ilmiah yang baik dan benar.',
                'tanggal' => '2025-12-02',
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '12:00:00',
                'lokasi' => 'Aula Perpustakaan',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_kategori' => 5, // Anak
                'judul' => 'Mendongeng Ceria untuk Anak',
                'deskripsi' => 'Kegiatan mendongeng interaktif untuk anak-anak.',
                'tanggal' => '2025-12-05',
                'jam_mulai' => '10:00:00',
                'jam_selesai' => '11:30:00',
                'lokasi' => 'Ruang Anak',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}