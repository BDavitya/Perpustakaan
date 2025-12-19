<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman - Perpustakaan Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
=======
@extends('layouts.pengunjung')
>>>>>>> Stashed changes

@section('title', 'Pengumuman - BookTech')

<<<<<<< Updated upstream
<!-- ================= HEADER ================= -->
@include('pengunjung.navbar')

<script>
    document.getElementById("menuBtn").onclick = () => document.getElementById("mobileMenu").classList.toggle("hidden");
=======
@php
    $announcements = [
        [
            'img' => 'perpus1.jpg',
            'date' => '15 Desember 2024',
            'title' => 'Pembukaan Gedung Baru Desember 2024',
            'desc' => 'Kabar gembira! Gedung timur perpustakaan kami yang baru akan dibuka bulan Desember ini dengan fasilitas modern, ruang baca, dan koleksi yang diperluas.',
        ],
        [
            'img' => 'perpus2.jpg',
            'date' => '1 Desember 2024',
            'title' => 'Program Membaca Liburan 2024',
            'desc' => 'Ikuti program membaca liburan spesial kami dan temukan buku-buku luar biasa yang sempurna untuk musim ini.',
        ],
        [
            'img' => 'perpus3.jpg',
            'date' => '28 November 2024',
            'title' => 'Koleksi Digital Diperluas',
            'desc' => 'Akses ribuan e-book dan audiobook baru yang ditambahkan ke koleksi digital kami bulan ini.',
        ],
    ];
@endphp

@section('content')
    <!-- ================= HERO ================= -->
    <section class="bg-greens-600 text-center py-14 px-4">
        <div class="max-w-3xl mx-auto text-white">
            <div class="flex justify-center mb-4">
                <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background-color:#59996D">
                    <img src="{{ asset('assets/img/pengumuman.png') }}" class="w-5 h-5">
                </div>
            </div>
            <h2 class="text-3xl font-bold mb-2">Berita & Pengumuman</h2>
            <p class="text-sm text-white/90">
                Tetap update dengan berita terbaru dari perpustakaan kami
            </p>
        </div>
    </section>
    <!-- ================= LIST ================= -->
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4 lg:px-8 space-y-6">
            @foreach ($announcements as $item)
                <div class="announcement-item bg-white rounded-2xl shadow overflow-hidden flex flex-col md:flex-row">
                    <!-- IMAGE (MENTOK) -->
                    <img src="{{ asset('assets/img/' . $item['img']) }}" class="w-full md:w-56 h-44 md:h-auto object-cover">
                    <!-- CONTENT -->
                    <div class="p-4 md:p-5 flex-1">
                        <div class="flex items-center gap-1 text-xs text-gray-500 mb-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ $item['date'] }}
                        </div>
                        <h3 class="text-lg font-semibold mb-1">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-sm text-gray-600 mb-2">
                            {{ $item['desc'] }}
                        </p>
                        <a href="{{ route('pengunjung.detail_pengumuman') }}"
                            class="text-sm font-semibold text-green-700 hover:underline">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- ================= PAGINATION ================= -->
    <div class="flex justify-center items-center gap-2 my-10" id="pagination">
        <button data-action="prev" class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">
            ‹
        </button>
        <button data-page="1" class="page-btn w-8 h-8 rounded-lg bg-greens-600 text-white text-sm">
            1
        </button>
        <button data-page="2" class="page-btn w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">
            2
        </button>
        <button data-page="3" class="page-btn w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">
            3
        </button>
        <button data-action="next" class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">
            ›
        </button>
    </div>

    <script>
        const itemsPerPage = 2;
        const items = document.querySelectorAll('.announcement-item');
        const pageButtons = document.querySelectorAll('.page-btn');
        const prevBtn = document.querySelector('[data-action="prev"]');
        const nextBtn = document.querySelector('[data-action="next"]');

        let currentPage = 1;
        const totalPages = Math.ceil(items.length / itemsPerPage);

        function showPage(page) {
            currentPage = page;

            // show items
            items.forEach((item, index) => {
                item.style.display =
                    index >= (page - 1) * itemsPerPage &&
                        index < page * itemsPerPage
                        ? 'flex'
                        : 'none';
            });

            // pagination active state
            pageButtons.forEach(btn => {
                btn.classList.remove(
                    'bg-greens-600',
                    'text-white'
                );
                btn.classList.add(
                    'bg-white',
                    'border',
                    'hover:bg-gray-100'
                );

                if (parseInt(btn.dataset.page) === page) {
                    btn.classList.remove('bg-white', 'border');
                    btn.classList.add('bg-greens-600', 'text-white');
                }
            });
>>>>>>> Stashed changes

            prevBtn.disabled = page === 1;
            nextBtn.disabled = page === totalPages;
            prevBtn.classList.toggle('opacity-40', page === 1);
            nextBtn.classList.toggle('opacity-40', page === totalPages);
        }

        pageButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                showPage(parseInt(btn.dataset.page));
            });
        });

        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) showPage(currentPage - 1);
        });

<<<<<<< Updated upstream
<div class="h-20"></div>

<!-- ================= HERO ================= -->
<section class="bg-green-600 text-center py-16 px-4">
    <div class="max-w-3xl mx-auto text-white">
        <h2 class="text-3xl font-bold mb-3">Berita & Pengumuman</h2>
        <p class="text-white/90 text-sm">Tetap update dengan berita terbaru dari perpustakaan kami</p>
    </div>
</section>

<!-- ================= LIST PENGUMUMAN ================= -->
<section class="py-14">
    <div class="max-w-6xl mx-auto px-4 lg:px-8 space-y-8">

        @foreach ($konten as $p)
<div class="bg-white rounded-2xl shadow p-4 md:p-5 flex flex-col md:flex-row gap-4">
    <img src="{{ $p->gambar ? asset($p->gambar) : asset('assets/img/default.png') }}" 
     class="w-full md:w-56 h-40 object-cover rounded-xl" 
     alt="{{ $p->judul }}">

    <div class="flex-1">
        <div class="flex items-center gap-3 text-xs text-gray-500 mb-1">
            <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs">{{ ucfirst($p->tipe_konten) }}</span>
            <span class="flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 
                    0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                {{ \Carbon\Carbon::parse($p->tanggal_publikasi)->translatedFormat('d F Y') }}
            </span>
        </div>
        <h3 class="text-lg font-semibold mb-1">{{ $p->judul }}</h3>
        <p class="text-sm text-gray-600 mb-3">
            {{ \Illuminate\Support\Str::limit(strip_tags($p->isi_konten), 150) }}
        </p>
        <a href="#" class="text-sm font-semibold text-green-700 hover:underline">Baca Selengkapnya →</a>
    </div>
</div>
@endforeach



    </div>
</section>

<!-- ================= PAGINATION ================= -->
@if ($konten->hasPages())
<div class="flex justify-center items-center gap-2 my-10">

    {{-- Previous --}}
    @if ($konten->onFirstPage())
        <span class="w-8 h-8 flex items-center justify-center rounded-lg border bg-gray-100 text-gray-400 cursor-not-allowed">
            ‹
        </span>
    @else
        <a href="{{ $konten->previousPageUrl() }}"
           class="w-8 h-8 flex items-center justify-center rounded-lg border bg-white hover:bg-gray-100 text-sm">
            ‹
        </a>
    @endif

    {{-- Page Numbers --}}
    @foreach ($konten->getUrlRange(1, $konten->lastPage()) as $page => $url)
        @if ($page == $konten->currentPage())
            <span class="w-8 h-8 flex items-center justify-center rounded-lg bg-green-600 text-white text-sm">
                {{ $page }}
            </span>
        @else
            <a href="{{ $url }}"
               class="w-8 h-8 flex items-center justify-center rounded-lg border bg-white hover:bg-gray-100 text-sm">
                {{ $page }}
            </a>
        @endif
    @endforeach

    {{-- Next --}}
    @if ($konten->hasMorePages())
        <a href="{{ $konten->nextPageUrl() }}"
           class="w-8 h-8 flex items-center justify-center rounded-lg border bg-white hover:bg-gray-100 text-sm">
            ›
        </a>
    @else
        <span class="w-8 h-8 flex items-center justify-center rounded-lg border bg-gray-100 text-gray-400 cursor-not-allowed">
            ›
        </span>
    @endif

</div>
@endif




<!-- ================= FOOTER ================= -->
@include('pengunjung.footer')

</body>
</html>
=======
        nextBtn.addEventListener('click', () => {
            if (currentPage < totalPages) showPage(currentPage + 1);
        });

        showPage(1);
    </script>



@endsection
>>>>>>> Stashed changes
