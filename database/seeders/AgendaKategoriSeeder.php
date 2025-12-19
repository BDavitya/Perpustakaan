<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgendaKategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategori = [
            'Diskusi Buku',
            'Workshop',
            'Pelatihan',
            'Pameran',
            'Anak',
        ];

        foreach ($kategori as $item) {
            DB::table('agenda_kategori')->insert([
                'nama_kategori' => $item,
                'slug' => Str::slug($item),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}