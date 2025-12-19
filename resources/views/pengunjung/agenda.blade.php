@extends('layouts.pengunjung')

@section('title', 'Agenda - BookTech')

<<<<<<< Updated upstream
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
                <li><input type="radio" checked> Semua</li>
                <li><input type="radio"> Diskusi Buku</li>
                <li><input type="radio"> Workshop</li>
                <li><input type="radio"> Pelatihan</li>
                <li><input type="radio"> Pameran</li>
                <li><input type="radio"> Anak</li>
            </ul>
        </aside>

        <!-- EVENT LIST -->
        <div class="lg:col-span-3 space-y-10">

            <!-- SECTION 1 -->
            {{-- <h3 class="font-semibold text-gray-700 mb-3">Segera Dimulai</h3> --}}

            <div class="space-y-5">

                <!-- EVENT 1 -->
                <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>25</span>
                        <span class="text-xs">Nov</span>
                    </div>

                    <div class="flex-1">
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full">Diskusi Buku</span>

                        <h4 class="text-lg font-semibold mt-2">Diskusi Buku: "Thinking, Fast and Slow"</h4>

                        <div class="text-xs text-gray-500 space-y-1 mt-1">
                            <p>🕒 14:00 - 16:00 · Ruang Diskusi Lt. 2</p>
                            <p>👥 25 / 30 peserta</p>
                        </div>

                        <p class="text-sm text-gray-600 mt-3">
                            Bedah buku karya Daniel Kahneman tentang psikologi pengambilan keputusan.
                        </p>
                    </div>
                </div>

                {{-- <!-- EVENT 2 -->
                <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>26</span>
                        <span class="text-xs">Nov</span>
                    </div>

                    <div class="flex-1">
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 text-xs rounded-full">Workshop</span>
                        <h4 class="text-lg font-semibold mt-2">Workshop: Penulisan Ilmiah</h4>

                        <div class="text-xs text-gray-500 space-y-1 mt-1">
                            <p>🕒 09:00 - 12:00 · Auditorium Utama</p>
                            <p>👥 45 / 50 peserta</p>
=======
@section('content')

    <!-- ================= HERO ================= -->
    <section class="bg-greens-600 text-center py-16 px-4">
        <div class="max-w-3xl mx-auto text-white">
            <div class="flex justify-center mb-4">
                <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background-color:#59996D">
                    <img src="{{ asset('assets/img/agenda.png') }}" class="w-5 h-5">
                </div>
            </div>
            <h2 class="text-3xl font-bold mb-3">Agenda Kegiatan</h2>
            <p class="text-white/90 text-sm">Ikuti berbagai kegiatan menarik di perpustakaan</p>
        </div>
    </section>
    <!-- ================= MAIN CONTENT ================= -->
    <section class="py-14">
        <div class="max-w-7xl mx-auto px-4 lg:px-8 gap-8">
            <!-- EVENT LIST -->
            <div class="lg:col-span-3 space-y-10">
                <!-- SECTION 1 -->
                <h3 class="font-semibold text-gray-700 mb-2 md:mb-3 text-sm md:text-base">
                    Segera Dimulai
                </h3>
                <div class="space-y-4 md:space-y-5">
                    <!-- EVENT 1 -->
                    <div class="bg-white rounded-2xl shadow p-4 md:p-5 flex gap-4">
                        <!-- TANGGAL (KIRI) -->
                        <div
                            class="w-14 h-14 md:w-20 md:h-20 bg-greens-600 rounded-xl flex flex-col items-center justify-center text-white font-semibold shrink-0">
                            <span class="text-base md:text-lg">25</span>
                            <span class="text-[10px] md:text-xs">Nov</span>
                        </div>
                        <!-- KONTEN (KANAN) -->
                        <div class="flex-1">
                            <!-- JUDUL -->
                            <h4 class="text-sm md:text-lg font-semibold mt-1">
                                Diskusi Buku: "Thinking, Fast and Slow"
                            </h4>
                            <!-- INFO -->
                            <div class="text-[11px] md:text-xs text-gray-500 space-y-1 mt-1">
                                <div class="flex items-center gap-1.5">
                                    <img src="{{ asset('assets/img/date.png') }}" class="w-3 h-3">
                                    <span>14:00 - 16:00</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="{{ asset('assets/img/location.png') }}" class="w-3 h-3">
                                    <span>Ruang Diskusi Lt. 2</span>
                                </div>
                            </div>
                            <!-- DESKRIPSI -->
                            <p class=" text-sm text-gray-600">
                                Bedah buku karya Daniel Kahneman tentang psikologi pengambilan keputusan.
                            </p>
>>>>>>> Stashed changes
                        </div>
                    </div>
<<<<<<< Updated upstream
                </div> --}}

                <!-- EVENT 3 -->
                {{-- <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>27</span>
                        <span class="text-xs">Nov</span>
                    </div>

                    <div class="flex-1">
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full">Anak</span>
                        <h4 class="text-lg font-semibold mt-2">Storytelling untuk Anak</h4>

                        <div class="text-xs text-gray-500 mt-1 space-y-1">
                            <p>🕒 10:00 - 11:30 · Ruang Anak</p>
                            <p>👥 12 / 20 peserta</p>
=======
                    <!-- EVENT 2 -->
                    <div class="bg-white rounded-2xl shadow p-4 md:p-5 flex gap-4">
                        <div
                            class="w-14 h-14 md:w-20 md:h-20 bg-greens-600 rounded-xl flex flex-col items-center justify-center text-white font-semibold shrink-0">
                            <span>26</span>
                            <span class="text-xs">Nov</span>
>>>>>>> Stashed changes
                        </div>
                        <div class="flex-1">
                            <h4 class="text-sm md:text-lg font-semibold mt-1">Workshop: Penulisan Ilmiah</h4>
                            <div class="text-[11px] md:text-xs text-gray-500 space-y-1 mt-1">
                                <div class="flex items-center gap-1.5">
                                    <img src="{{ asset('assets/img/date.png') }}" class="w-3 h-3">
                                    <span>14:00 - 16:00</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="{{ asset('assets/img/location.png') }}" class="w-3 h-3">
                                    <span>Ruang Diskusi Lt. 2</span>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600 mt-3">
                                Pelatihan teknik penulisan karya ilmiah untuk mahasiswa dan peneliti.
                            </p>
                        </div>
                    </div>

                    <!-- EVENT 3 -->
                    <div class="bg-white rounded-2xl shadow p-4 md:p-5 flex gap-4">
                        <div
                            class="w-14 h-14 md:w-20 md:h-20 bg-greens-600 rounded-xl flex flex-col items-center justify-center text-white font-semibold shrink-0">
                            <span>27</span>
                            <span class="text-xs">Nov</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-sm md:text-lg font-semibold mt-1">Storytelling untuk Anak</h4>
                            <div class="text-[11px] md:text-xs text-gray-500 space-y-1 mt-1">
                                <div class="flex items-center gap-1.5">
                                    <img src="{{ asset('assets/img/date.png') }}" class="w-3 h-3">
                                    <span>14:00 - 16:00</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="{{ asset('assets/img/location.png') }}" class="w-3 h-3">
                                    <span>Ruang Diskusi Lt. 2</span>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600 mt-3">
                                Sesi dongeng interaktif untuk anak usia 5–10 tahun.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- SECTION 2 -->
                <h3 class="font-semibold text-gray-700 mt-10">Minggu Ini</h3>
                <div class="space-y-5">
                    <div class="bg-white rounded-2xl shadow p-4 md:p-5 flex gap-4">
                        <div class="w-14 h-14 md:w-20 md:h-20  rounded-xl flex flex-col items-center justify-center font-semibold shrink-0"
                            style="background-color: #F3F4F6;">
                            <span>28</span>
                            <span class="text-xs">Nov</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-sm md:text-lg font-semibold mt-1">Pelatihan Riset & Publikasi</h4>

                            <div class="text-[11px] md:text-xs text-gray-500 space-y-1 mt-1">
                                <div class="flex items-center gap-1.5">
                                    <img src="{{ asset('assets/img/date.png') }}" class="w-3 h-3">
                                    <span>14:00 - 16:00</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="{{ asset('assets/img/location.png') }}" class="w-3 h-3">
                                    <span>Ruang Diskusi Lt. 2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl shadow p-4 md:p-5 flex gap-4">
                        <div class="w-14 h-14 md:w-20 md:h-20  rounded-xl flex flex-col items-center justify-center font-semibold shrink-0"
                            style="background-color: #F3F4F6;">
                            <span>30</span>
                            <span class="text-xs">Nov</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-sm md:text-lg font-semibold mt-1">Pameran Buku Baru</h4>

                            <div class="text-[11px] md:text-xs text-gray-500 space-y-1 mt-1">
                                <div class="flex items-center gap-1.5">
                                    <img src="{{ asset('assets/img/date.png') }}" class="w-3 h-3">
                                    <span>14:00 - 16:00</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <img src="{{ asset('assets/img/location.png') }}" class="w-3 h-3">
                                    <span>Ruang Diskusi Lt. 2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- SECTION 3 -->
                <h3 class="font-semibold text-gray-700 mt-10">Bulan Depan</h3>

<<<<<<< Updated upstream
            <!-- SECTION 2 -->
            {{-- <h3 class="font-semibold text-gray-700 mt-10">Minggu Ini</h3>

            <div class="space-y-5">
                <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>28</span>
                        <span class="text-xs">Nov</span>
=======
                <div class="bg-white rounded-2xl shadow p-4 md:p-5 flex gap-4">
                    <div class="w-14 h-14 md:w-20 md:h-20  rounded-xl flex flex-col items-center justify-center font-semibold shrink-0"
                        style="background-color: #F3F4F6;">
                        <span>02</span>
                        <span class="text-xs">Des</span>
>>>>>>> Stashed changes
                    </div>

                    <div class="flex-1">
                        <h4 class="text-sm md:text-lg font-semibold mt-1">Bedah Buku: Sastra Indonesia</h4>

                        <div class="text-[11px] md:text-xs text-gray-500 space-y-1 mt-1">
                            <div class="flex items-center gap-1.5">
                                <img src="{{ asset('assets/img/date.png') }}" class="w-3 h-3">
                                <span>14:00 - 16:00</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <img src="{{ asset('assets/img/location.png') }}" class="w-3 h-3">
                                <span>Ruang Diskusi Lt. 2</span>
                            </div>
                        </div>
                    </div>
                </div>

<<<<<<< Updated upstream
                <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                    <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                        <span>30</span>
                        <span class="text-xs">Nov</span>
                    </div>

                    <div class="flex-1">
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full">Pameran</span>
                        <h4 class="text-lg font-semibold mt-2">Pameran Buku Baru</h4>

                        <p class="text-xs text-gray-500 mt-1">🕒 08:00 - 17:00 · Lobby Utama</p>
                    </div>
                </div>
            </div> --}}

            <!-- SECTION 3 -->
            {{-- <h3 class="font-semibold text-gray-700 mt-10">Bulan Depan</h3>

            <div class="bg-white rounded-2xl shadow p-5 flex flex-col md:flex-row gap-5">
                <div class="w-20 h-20 bg-green-100 rounded-xl flex flex-col items-center justify-center text-green-700 font-semibold">
                    <span>02</span>
                    <span class="text-xs">Des</span>
                </div>

                <div class="flex-1">
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full">Diskusi Buku</span>
                    <h4 class="text-lg font-semibold mt-2">Bedah Buku: Sastra Indonesia</h4>

                    <p class="text-xs text-gray-500 mt-1">🕒 15:00 - 17:00 · Ruang Seminar</p>
                </div>
            </div> --}}

=======
            </div>
>>>>>>> Stashed changes
        </div>
    </section>

<<<<<<< Updated upstream
<!-- ================= FOOTER ================= -->
@include('pengunjung.footer')

</body>
</html>
=======
@endsection
>>>>>>> Stashed changes
