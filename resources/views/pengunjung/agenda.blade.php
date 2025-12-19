<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - BookTech</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- ================= HEADER ================= -->
@include('pengunjung.navbar')

<script>
    menuBtn.onclick = () => mobileMenu.classList.toggle("hidden");

    dropdownBtn.onclick = () => {
        dropdownMenu.classList.toggle("hidden");
        dropdownIcon.classList.toggle("rotate-180");
    };

    document.addEventListener("click", e => {
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add("hidden");
            dropdownIcon.classList.remove("rotate-180");
        }
    });

    mobileDropdownBtn.onclick = () => {
        mobileDropdownMenu.classList.toggle("hidden");
        mobileDropdownIcon.classList.toggle("rotate-180");
    };
</script>

<!-- SPACER -->
<div class="h-20"></div>

<!-- ================= HERO ================= -->
<section class="bg-green-600 text-center py-16 px-4">
    <div class="max-w-3xl mx-auto text-white">
        <div class="flex justify-center mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 
                0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
        </div>

        <h2 class="text-3xl font-bold mb-3">Agenda Kegiatan</h2>
        <p class="text-white/90 text-sm">Ikuti berbagai kegiatan menarik di perpustakaan</p>
    </div>
</section>

<!-- ================= MAIN CONTENT ================= -->
<section class="py-14">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 grid grid-cols-1 lg:grid-cols-4 gap-8">

        <!-- SIDEBAR -->
        <aside class="bg-white rounded-2xl shadow p-5 h-fit">
            <h3 class="font-semibold text-sm mb-3">Kategori Event</h3>

           <ul class="space-y-3 text-sm text-gray-600">
    <li>
        <a href="{{ route('agenda') }}"
           class="{{ empty($kategoriAktif) ? 'font-semibold text-green-600' : '' }}">
            Semua
        </a>
    </li>

    @foreach ($kategori as $kat)
        <li>
            <a href="{{ route('agenda', ['kategori' => $kat->id_kategori]) }}"
               class="{{ ($kategoriAktif ?? null) == $kat->id_kategori ? 'font-semibold text-green-600' : '' }}">
                {{ $kat->nama_kategori }}
            </a>
        </li>
    @endforeach
</ul>

        </aside>


        <!-- EVENT LIST -->
        <div class="lg:col-span-3 space-y-5">

            @forelse ($events as $event)
                <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">

                    <!-- TANGGAL -->
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>{{ \Carbon\Carbon::parse($event->tanggal)->format('d') }}</span>
                        <span class="text-xs">
                            {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('M') }}
                        </span>
                    </div>

                    <!-- DETAIL -->
                    <div class="flex-1">
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full">
                            {{ $event->kategori->nama_kategori }}
                        </span>

                        <h4 class="text-lg font-semibold mt-2">
                            {{ $event->judul }}
                        </h4>

                        <div class="text-xs text-gray-500 space-y-1 mt-1">
                            <p>
                                🕒 {{ $event->waktu_mulai }} - {{ $event->waktu_selesai }}
                                · {{ $event->lokasi }}
                            </p>
                            <p>
                                👥 {{ $event->jumlah_peserta }} / {{ $event->kuota }} peserta
                            </p>
                        </div>

                        <p class="text-sm text-gray-600 mt-3">
                            {{ $event->deskripsi }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="bg-white rounded-xl p-6 text-center text-gray-500">
                    Tidak ada agenda untuk kategori ini.
                </div>
            @endforelse

        </div>

    </div>
</section>

<!-- ================= FOOTER ================= -->
@include('pengunjung.footer')

</body>
</html>
