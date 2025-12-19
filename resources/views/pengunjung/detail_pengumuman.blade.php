@extends('layouts.pengunjung')

@section('title', 'Pembukaan Gedung Baru - BookTech')

@section('content')

    <!-- ================= BACK ================= -->
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-4 lg:py-6 border-b">
        <a href="{{ route('pengunjung.pengumuman') }}"
            class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-green-600">
            ← Kembali ke Pengumuman
        </a>
    </div>

    <!-- ================= CONTENT ================= -->
    <section class="max-w-7xl mx-auto px-4 lg:px-8 py-6 lg:py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-10">

            <!-- ================= MAIN CONTENT ================= -->
            <article
                class="bg-white lg:bg-transparent rounded-2xl shadow-sm lg:shadow-none p-4 sm:p-6 lg:p-0 lg:col-span-2">

                <!-- IMAGE -->
                <img src="{{ asset('assets/img/perpus1.jpg') }}"
                    class="w-full h-[200px] sm:h-[260px] lg:h-[420px] object-cover rounded-xl lg:rounded-2xl mb-4 lg:mb-6">

                <!-- TITLE -->
                <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-2">
                    Pembukaan Gedung Baru Desember 2025
                </h1>

                <!-- META -->
                <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                    <span class="block lg:hidden px-2 py-1 border border-green-600 rounded-lg text-green-600 font-medium">
                        Fasilitas
                    </span>
                    <img src="{{ asset('assets/img/date.png') }}" class="block lg:hidden">
                    <span class="flex items-center gap-1">
                        15 November 2025
                    </span>
                </div>

                <!-- CONTENT -->
                <div class="space-y-4 text-gray-700 text-sm leading-relaxed">
                    <p>
                        Antara hidup dan mati ada sebuah perpustakaan, dan di dalam perpustakaan itu, rak-raknya terus
                        berlanjut selamanya.
                        Setiap buku memberikan kesempatan untuk mencoba kehidupan lain yang bisa Anda jalani. Untuk melihat
                        bagaimana keadaannya
                        jika Anda membuat pilihan lain... Apakah Anda akan melakukan sesuatu yang berbeda, jika Anda
                        memiliki kesempatan untuk
                        membatalkan penyesalan Anda?
                    </p>

                    <p>
                        Novel yang memukau tentang semua pilihan yang membentuk kehidupan yang dijalani dengan baik, dari
                        penulis bestseller
                        internasional Reasons to Stay Alive dan How To Stop Time. Di suatu tempat di luar tepi alam semesta
                        ada perpustakaan
                        yang berisi buku tak terbatas, masing-masing adalah kisah dari realitas lain. Satu menceritakan
                        kisah hidup Anda apa
                        adanya, bersama dengan buku lain untuk kehidupan lain yang bisa Anda jalani jika Anda membuat
                        pilihan berbeda di titik
                        mana pun dalam hidup Anda.
                    </p>

                    <p>
                        Novel yang memukau tentang semua pilihan yang membentuk kehidupan yang dijalani dengan baik, dari
                        penulis bestseller
                        internasional Reasons to Stay Alive dan How To Stop Time. Di suatu tempat di luar tepi alam semesta
                        ada perpustakaan
                        yang berisi buku tak terbatas, masing-masing adalah kisah dari realitas lain. Satu menceritakan
                        kisah hidup Anda apa
                        adanya, bersama dengan buku lain untuk kehidupan lain yang bisa Anda jalani jika Anda membuat
                        pilihan berbeda di titik
                        mana pun dalam hidup Anda.
                    </p>
                </div>
            </article>

            <!-- ================= SIDEBAR ================= -->
            <aside class="bg-white lg:bg-transparent rounded-2xl shadow-sm lg:shadow-none p-4 sm:p-6 lg:p-0 space-y-4">

                <h3 class="font-semibold text-gray-900">
                    Temukan Berita Lainnya
                </h3>
                <p class="text-sm text-gray-500">
                    Temukan lebih banyak berita baru lainnya
                </p>

                <div class="space-y-3">
                    <a href="{{ route('pengunjung.detail_pengumuman') }}"
                        class="block p-4 rounded-xl border hover:bg-gray-50 transition">
                        <h4 class="text-sm font-semibold text-gray-800">
                            Program Membaca Liburan 2025
                        </h4>
                        <span class="text-xs text-green-600 font-medium inline-flex items-center gap-1 mt-1">
                            Baca Selengkapnya →
                        </span>
                    </a>

                    <a href="{{ route('pengunjung.detail_pengumuman') }}"
                        class="block p-4 rounded-xl border hover:bg-gray-50 transition">
                        <h4 class="text-sm font-semibold text-gray-800">
                            Koleksi Digital Diperluas
                        </h4>
                        <span class="text-xs text-green-600 font-medium inline-flex items-center gap-1 mt-1">
                            Baca Selengkapnya →
                        </span>
                    </a>

                    <a href="{{ route('pengunjung.detail_pengumuman') }}"
                        class="block p-4 rounded-xl border hover:bg-gray-50 transition">
                        <h4 class="text-sm font-semibold text-gray-800">
                            Jam Kunjungan Diperpanjang
                        </h4>
                        <span class="text-xs text-green-600 font-medium inline-flex items-center gap-1 mt-1">
                            Baca Selengkapnya →
                        </span>
                    </a>
                </div>
            </aside>

        </div>
    </section>

@endsection