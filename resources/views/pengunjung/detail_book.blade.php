<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $buku->judul }} - Detail Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
=======
@php
    // Ambil judul dari URL
    $title = $title ?? "The Midnight Library";

    // Dummy data
    $book = [
        "title" => $title,
        "author" => "Matt Haig",
        "isbn" => "978-1-786-89244-7",
        "publisher" => "Canongate Books",
        "year" => "2020",
        "stock" => "5 eksemplar",
        "status" => "Tersedia",
        "image" => "book1.jpg",
        "description" => "Antara hidup dan mati ada sebuah perpustakaan, dan di dalam perpustakaan itu, rak-raknya terus berjalan selamanya. Setiap buku memberikan kesempatan untuk mencoba kehidupan lain..."
    ];

    // Rekomendasi dummy
    $recommend = [
        ["img" => "book2.jpg", "title" => "The Psychology of Money", "author" => "Morgan Housel"],
        ["img" => "book1.jpg", "title" => "Deep Work", "author" => "Cal Newport"],
        ["img" => "book2.jpg", "title" => "Thinking, Fast and Slow", "author" => "Daniel Kahneman"],
        ["img" => "book1.jpg", "title" => "1984", "author" => "George Orwell"],
    ];
@endphp

@extends('layouts.pengunjung')
>>>>>>> Stashed changes

@section('title', $book['title'] . ' - BookTech')

<<<<<<< Updated upstream
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
        <img src="{{ asset('assets/img/books/' . $buku->gambar) }}"
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
=======
@section('content')

    <!-- BACK -->
    <div class="max-w-7xl mx-auto px-4 lg:px-8 pt-6 pb-4 border-b">
        <a href="{{ route('pengunjung.katalog') }}"
            class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-green-600">
            ← Kembali ke Katalog
        </a>
    </div>

    <!-- DETAIL -->
    <section class="max-w-7xl mx-auto px-4 lg:px-8 pt-6 pb-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- ================= DESKTOP ================= -->
            <div class="hidden lg:block">
                <img src="{{ asset('assets/img/' . $book['image']) }}"
                    class="w-full h-[480px] object-cover rounded-2xl shadow">
            </div>
            <!-- ================= MOBILE ================= -->
            <div class="flex gap-4 lg:hidden">
                <img src="{{ asset('assets/img/' . $book['image']) }}"
                    class="w-32 h-44 object-cover rounded-2xl shadow flex-shrink-0">
                <div class="flex flex-col flex-1">
                    <div>
                        <h1 class="text-lg font-bold text-gray-900 leading-tight">
                            {{ $book['title'] }}
                        </h1>
                        <p class="text-sm text-gray-500 mt-1">
                            oleh {{ $book['author'] }}
                        </p>
                    </div>
                    <!-- STATUS MOBILE FULL -->
                    @if ($book['status'] === "Tersedia")
                        <span
                            class="mt-3 inline-flex justify-center text-xs font-medium text-green-700 border border-green-600 px-4 py-2 rounded-lg w-full">
                            Tersedia
                        </span>
                    @else
                        <span
                            class="mt-3 inline-flex justify-center text-xs font-medium text-red-700 border border-red-600 px-4 py-2 rounded-lg w-full">
                            Dipinjam
                        </span>
                    @endif
                </div>
            </div>

            <!-- ================= INFO ================= -->
            <div>
                <!-- DESKTOP TITLE -->
                <div class="hidden lg:flex items-start justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">
                            {{ $book['title'] }}
                        </h1>
                        <p class="text-sm text-gray-500 mt-1">
                            oleh {{ $book['author'] }}
                        </p>
                    </div>
                    @if ($book['status'] === "Tersedia")
                        <span class="inline-flex text-xs font-medium
                                                                                                       text-green-700 border border-green-600
                                                                                                       px-4 py-2 rounded-lg">
                            Tersedia
                        </span>
                    @else
                        <span class="inline-flex text-xs font-medium
                                                                                                       text-red-700 border border-red-600
                                                                                                       px-4 py-2 rounded-lg">
                            Dipinjam
                        </span>
                    @endif
                </div>

                <!-- INFO GRID -->
                <div class="grid grid-cols-2 gap-3 mt-6 lg:gap-4 lg:mt-8">

                    @php
                        $infos = [
                            ['ISBN', $book['isbn'], 'isbn.png'],
                            ['Penerbit', $book['publisher'], 'penerbit.png'],
                            ['Tahun Terbit', $book['year'], 'tahun.png'],
                            ['Jumlah Stok', $book['stock'], 'stok.png'],
                        ];
                    @endphp
                    @foreach ($infos as $info)
                        <div class="p-3 lg:p-4 rounded-xl border bg-white lg:bg-gray-50">
                            <!-- MOBILE -->
                            <div class="flex items-center gap-2 lg:hidden">
                                <img src="{{ asset('assets/img/' . $info[2]) }}" class="w-4 h-4 object-contain">
                                <span class="text-xs font-medium text-green-700">
                                    {{ $info[0] }}
                                </span>
                            </div>
                            <!-- DESKTOP -->
                            <div class="hidden lg:flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center flex-shrink-0">
                                    <img src="{{ asset('assets/img/' . $info[2]) }}" class="w-5 h-5 object-contain">
                                </div>
                                <div>
                                    <p class="text-xs font-medium text-green-700">
                                        {{ $info[0] }}
                                    </p>
                                    <p class="text-sm font-semibold text-gray-800 mt-1">
                                        {{ $info[1] }}
                                    </p>
                                </div>
                            </div>
                            <!-- DATA MOBILE -->
                            <p class="mt-1 text-sm font-semibold text-gray-800 lg:hidden">
                                {{ $info[1] }}
                            </p>
                        </div>
                    @endforeach
                </div>
                <!-- DESCRIPTION -->
                <div class="mt-8">
                    <h3 class="font-semibold text-gray-900 mb-2">
                        Tentang Buku Ini
                    </h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        {{ $book['description'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ================= REKOMENDASI ================= -->
    <section class="max-w-7xl mx-auto px-4 lg:px-8 pb-20">
        <h3 class="font-semibold text-gray-800">
            Anda Mungkin Juga Suka
        </h3>
        <p class="text-sm text-gray-500 mb-6">
            Temukan lebih banyak buku serupa
        </p>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($recommend as $rec)
                <a href="{{ url('/detail-book?title=' . urlencode($rec['title'])) }}"
                    class="bg-white rounded-2xl shadow-sm hover:shadow-md transition overflow-hidden">
                    <img src="{{ asset('assets/img/' . $rec['img']) }}" class="w-full h-56 sm:h-64 lg:h-72 object-cover">
                    <div class="p-4">
                        <h4 class="text-sm font-semibold truncate">
                            {{ $rec['title'] }}
                        </h4>
                        <p class="text-xs text-gray-500 mt-1">
                            {{ $rec['author'] }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
>>>>>>> Stashed changes
