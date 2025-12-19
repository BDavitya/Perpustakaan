<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman - Perpustakaan Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- ================= HEADER ================= -->
@include('pengunjung.navbar')

<script>
    document.getElementById("menuBtn").onclick = () => document.getElementById("mobileMenu").classList.toggle("hidden");

    const dropdownBtn = document.getElementById("dropdownBtn");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const dropdownIcon = document.getElementById("dropdownIcon");

    dropdownBtn.onclick = () => {
        dropdownMenu.classList.toggle("hidden");
        dropdownIcon.classList.toggle("rotate-180");
    };

    document.addEventListener("click", (e) => {
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add("hidden");
            dropdownIcon.classList.remove("rotate-180");
        }
    });

    const mobileBtn = document.getElementById("mobileDropdownBtn");
    const mobileMenu = document.getElementById("mobileDropdownMenu");
    const mobileIcon = document.getElementById("mobileDropdownIcon");

    mobileBtn.onclick = () => {
        mobileMenu.classList.toggle("hidden");
        mobileIcon.classList.toggle("rotate-180");
    };
</script>

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
