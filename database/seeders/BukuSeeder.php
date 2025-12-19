<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        Buku::insert([
            [
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'penerbit' => 'Avery',
                'tahun_terbit' => 2018,
                'isbn' => '9780735211291',
                'status_ketersediaan' => 'Tersedia',
                'kategori' => 'Pengembangan Diri',
                'deskripsi' => 'Buku tentang kebiasaan kecil yang membawa perubahan besar.',
                'gambar' => 'book1.jpg',
            ],
            [
                'judul' => 'The Psychology of Money',
                'penulis' => 'Morgan Housel',
                'penerbit' => 'Harriman House',
                'tahun_terbit' => 2020,
                'isbn' => '9780857197681',
                'status_ketersediaan' => 'Dipinjam',
                'kategori' => 'Keuangan',
                'deskripsi' => 'Cara berpikir manusia terhadap uang dan keputusan finansial.',
                'gambar' => 'book2.jpg',
            ],
            [
                'judul' => 'Deep Work',
                'penulis' => 'Cal Newport',
                'penerbit' => 'Grand Central',
                'tahun_terbit' => 2016,
                'isbn' => '9781455586691',
                'status_ketersediaan' => 'Tersedia',
                'kategori' => 'Produktivitas',
                'deskripsi' => 'Panduan bekerja fokus di dunia penuh distraksi.',
                'gambar' => 'book3.jpg',
            ],
            [
                'judul' => 'Sapiens',
                'penulis' => 'Yuval Noah Harari',
                'penerbit' => 'Harvill Secker',
                'tahun_terbit' => 2011,
                'isbn' => '9780062316091',
                'status_ketersediaan' => 'Tersedia',
                'kategori' => 'Sejarah',
                'deskripsi' => 'Sejarah singkat umat manusia.',
                'gambar' => 'book1.jpg',
            ],
            [
                'judul' => '1984',
                'penulis' => 'George Orwell',
                'penerbit' => 'Secker & Warburg',
                'tahun_terbit' => 1949,
                'isbn' => '9780451524931',
                'status_ketersediaan' => 'Dipinjam',
                'kategori' => 'Fiksi',
                'deskripsi' => 'Novel distopia tentang pengawasan dan kebebasan.',
                'gambar' => 'book2.jpg',
            ],
            [
                'judul' => 'The Power of Now',
                'penulis' => 'Eckhart Tolle',
                'penerbit' => 'New World Library',
                'tahun_terbit' => 1997,
                'isbn' => '9781577314806',
                'status_ketersediaan' => 'Tersedia',
                'kategori' => 'Spiritual',
                'deskripsi' => 'Kesadaran hidup di saat ini.',
                'gambar' => 'book3.jpg',
            ],
            [
                'judul' => 'Think and Grow Rich',
                'penulis' => 'Napoleon Hill',
                'penerbit' => 'The Ralston Society',
                'tahun_terbit' => 1937,
                'isbn' => '9781585424337',
                'status_ketersediaan' => 'Tersedia',
                'kategori' => 'Bisnis',
                'deskripsi' => 'Mindset sukses dan kekayaan.',
                'gambar' => 'book1.jpg',
            ],
            [
                'judul' => 'Rich Dad Poor Dad',
                'penulis' => 'Robert T. Kiyosaki',
                'penerbit' => 'Plata Publishing',
                'tahun_terbit' => 1997,
                'isbn' => '9781612680194',
                'status_ketersediaan' => 'Dipinjam',
                'kategori' => 'Keuangan',
                'deskripsi' => 'Perbedaan pola pikir orang kaya dan miskin.',
                'gambar' => 'book2.jpg',
            ],
            [
                'judul' => 'Start With Why',
                'penulis' => 'Simon Sinek',
                'penerbit' => 'Portfolio',
                'tahun_terbit' => 2009,
                'isbn' => '9781591846444',
                'status_ketersediaan' => 'Tersedia',
                'kategori' => 'Kepemimpinan',
                'deskripsi' => 'Pemimpin hebat selalu memulai dengan alasan.',
                'gambar' => 'book3.jpg',
            ],
            [
                'judul' => 'Grit',
                'penulis' => 'Angela Duckworth',
                'penerbit' => 'Scribner',
                'tahun_terbit' => 2016,
                'isbn' => '9781501111105',
                'status_ketersediaan' => 'Tersedia',
                'kategori' => 'Psikologi',
                'deskripsi' => 'Ketekunan sebagai kunci kesuksesan.',
                'gambar' => 'book1.jpg',
            ],
        ]);
    }
}
