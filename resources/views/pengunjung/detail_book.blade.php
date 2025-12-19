<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $buku->judul }} - Detail Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- ================= HEADER ================= -->
@include('pengunjung.navbar')

<div class="h-20"></div>

<!-- BACK -->
<div class="max-w-7xl mx-auto px-4 lg:px-8 py-6">
    <a href="{{ route('katalog') }}" class="text-gray-600 text-sm hover:text-green-600">
        ← Kembali ke Katalog
    </a>
</div>

<!-- ================= CONTENT ================= -->
<section class="max-w-7xl mx-auto px-4 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-10 py-4">

    <!-- Image -->
    <div>
        <img src="{{ asset('assets/img/book1.jpg') }}"
             class="rounded-2xl shadow w-full object-cover h-[480px]">
    </div>

    <!-- Info -->
    <div>
        <h2 class="text-2xl font-bold">{{ $buku->judul }}</h2>
        <p class="text-gray-500 text-sm mb-4">oleh {{ $buku->penulis }}</p>

        @if ($buku->status_ketersediaan === 'Tersedia')
            <span class="inline-block text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">
                Tersedia
            </span>
        @else
            <span class="inline-block text-xs bg-red-100 text-red-700 px-3 py-1 rounded-full">
                Dipinjam
            </span>
        @endif

        <!-- Info Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">

            <div class="bg-green-50 p-4 rounded-xl border">
                <p class="text-xs text-gray-500">ISBN</p>
                <p class="font-semibold">{{ $buku->isbn }}</p>
            </div>

            <div class="bg-green-50 p-4 rounded-xl border">
                <p class="text-xs text-gray-500">Penerbit</p>
                <p class="font-semibold">{{ $buku->penerbit }}</p>
            </div>

            <div class="bg-green-50 p-4 rounded-xl border">
                <p class="text-xs text-gray-500">Tahun Terbit</p>
                <p class="font-semibold">{{ $buku->tahun_terbit }}</p>
            </div>

            <div class="bg-green-50 p-4 rounded-xl border">
                <p class="text-xs text-gray-500">Jumlah Stok</p>
                <p class="font-semibold">{{ $buku->stok }}</p>
            </div>

        </div>

        <!-- Description -->
        <h3 class="mt-6 font-semibold">Tentang Buku Ini</h3>
        <p class="text-sm text-gray-600 leading-relaxed mt-2">
            {{ $buku->deskripsi }}
        </p>
    </div>

</section>

<!-- ================= RECOMMEND ================= -->
{{-- <section class="max-w-7xl mx-auto px-4 lg:px-8 py-10">
    <h3 class="font-semibold text-gray-700">Anda Mungkin Juga Suka</h3>
    <p class="text-sm text-gray-500 mb-6">Buku lain yang serupa</p>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">

        @foreach ($rekomendasi as $rec)
        <a href="{{ route('buku.show', $rec->id) }}"
           class="bg-white rounded-xl shadow hover:shadow-md transition p-3 block">
            <img src="{{ asset('assets/img/book1.jpg') }}"
                 class="rounded-xl h-40 w-full object-cover">
            <h4 class="font-semibold text-sm mt-2">{{ $rec->judul }}</h4>
            <p class="text-xs text-gray-500">{{ $rec->penulis }}</p>
        </a>
        @endforeach

    </div>
</section> --}}

<!-- FOOTER -->
@include('pengunjung.footer')

</body>
</html>
