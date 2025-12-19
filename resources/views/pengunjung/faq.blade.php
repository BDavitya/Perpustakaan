@extends('layouts.pengunjung')

@section('title', 'FAQ - BookTech')

@section('content')

<<<<<<< Updated upstream
<!-- ================= HEADER ================= -->
@include('pengunjung.navbar')

<script>
    document.getElementById("menuBtn").onclick = () =>
        document.getElementById("mobileMenu").classList.toggle("hidden");

    const dropdownBtn = document.getElementById("dropdownBtn");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const dropdownIcon = document.getElementById("dropdownIcon");

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

    document.getElementById("mobileDropdownBtn").onclick = () => {
        document.getElementById("mobileDropdownMenu").classList.toggle("hidden");
        document.getElementById("mobileDropdownIcon").classList.toggle("rotate-180");
    };
</script>

<!-- SPACER -->
<div class="h-20"></div>

<!-- =============== HERO =============== -->
<section class="bg-gradient-to-b from-green-700 to-green-600 text-center py-16 px-4">
    <div class="max-w-3xl mx-auto text-white">
        <div class="w-14 h-14 rounded-full border border-white/40 flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8 10a4 4 0 118 0c0 1.657-1.333 2.5-2.5 3.25C12.5 14 12 15 12 16m.01 3h-.02"/>
            </svg>
        </div>
        <h2 class="text-3xl font-bold mb-2">Pertanyaan yang Sering Diajukan</h2>
        <p class="text-sm text-green-100">
            Temukan jawaban untuk pertanyaan umum tentang layanan dan kebijakan perpustakaan kami
        </p>
    </div>
</section>

<!-- SEARCH -->
<section class="bg-white py-6 border-b">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-gray-50 border rounded-full px-4 py-3 flex items-center gap-3 max-w-xl mx-auto">
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z"/>
            </svg>
            <input class="w-full bg-transparent text-sm outline-none" type="text" placeholder="Cari jawaban...">
        </div>
    </div>
</section>

<!-- FAQ CONTENT -->
<section class="py-10 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-6">

        <!-- SIDEBAR -->
        <aside class="bg-white rounded-2xl shadow-sm p-4 text-sm">

            <p class="text-xs font-semibold text-gray-500 mb-3">Kategori</p>

            <div class="space-y-2">

                <button class="category-btn flex items-center gap-2 px-3 py-2 rounded-xl w-full text-left
                       hover:bg-gray-50 border border-transparent text-gray-600"
                        data-category="keanggotaan">
                    <span class="category-badge w-6 h-6 rounded-full border flex items-center justify-center text-[10px]">1</span>
                    <span>Keanggotaan</span>
                </button>

                <button class="category-btn flex items-center gap-2 px-3 py-2 rounded-xl w-full text-left
                       hover:bg-gray-50 border border-transparent text-gray-600"
                        data-category="peminjaman">
                    <span class="category-badge w-6 h-6 rounded-full border flex items-center justify-center text-[10px]">2</span>
                    <span>Peminjaman</span>
                </button>

                <button class="category-btn flex items-center gap-2 px-3 py-2 rounded-xl w-full text-left
                       bg-green-50 text-green-700 border border-green-500"
                        data-category="denda">
                    <span class="category-badge w-6 h-6 rounded-full bg-green-600 text-white flex items-center justify-center text-[10px]">3</span>
                    <span>Denda & Biaya</span>
                </button>

                <button class="category-btn flex items-center gap-2 px-3 py-2 rounded-xl w-full text-left
                        hover:bg-gray-50 border border-transparent text-gray-600"
                        data-category="jam">
                    <span class="category-badge w-6 h-6 rounded-full border flex items-center justify-center text-[10px]">4</span>
                    <span>Jam & Akses</span>
                </button>

            </div>
        </aside>

        <!-- ============= SECTION: KEANGGOTAAN ============= -->
        <div class="md:col-span-3 bg-white rounded-2xl shadow-sm p-6 hidden"
             data-category-section="keanggotaan">

            <div class="mb-5">
                <h3 class="font-semibold text-base text-gray-800">Keanggotaan</h3>
                <p class="text-xs text-gray-500">Pertanyaan umum tentang pendaftaran dan status anggota</p>
            </div>

            <div class="space-y-3 text-sm">

                @php
                    $faq_keanggotaan = [
                        ['id' => 'k1', 'q' => 'Bagaimana cara mendaftar menjadi anggota?', 
                        'a' => 'Anda dapat mendaftar secara online melalui halaman Pendaftaran Anggota atau datang langsung ke perpustakaan.'],

                        ['id' => 'k2', 'q' => 'Apa saja persyaratan menjadi anggota?', 
                        'a' => 'Persyaratan umum meliputi kartu identitas, email aktif, dan formulir pendaftaran.'],

                        ['id' => 'k3', 'q' => 'Berapa lama masa berlaku kartu anggota?', 
                        'a' => 'Masa berlaku kartu anggota adalah 1 tahun dan dapat diperpanjang.']
                    ];
                @endphp

                @foreach ($faq_keanggotaan as $f)
                <div class="border rounded-xl bg-gray-50">
                    <button class="w-full flex justify-between items-center px-4 py-3 text-left"
                            data-faq-toggle="faq-{{ $f['id'] }}">
                        <span>{{ $f['q'] }}</span>
                        <svg class="w-4 h-4 text-gray-400 transition-transform"
                             data-faq-icon="faq-{{ $f['id'] }}" fill="none"
                             stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div id="faq-{{ $f['id'] }}" class="px-4 pb-4 text-xs text-gray-600 hidden">
                        {{ $f['a'] }}
=======
                <!-- =============== HERO =============== -->

                <section class="bg-greens-600 text-center py-16 px-4">
                    <div class="max-w-3xl mx-auto text-white">
                        <div class="flex justify-center mb-5">
                            <div class="w-14 h-14 rounded-xl flex items-center justify-center bg-[#59996D]">
                                <img src="{{ asset('assets/img/faq.png') }}" class="w-7 h-7">
                            </div>
                        </div>
                        <h2 class="text-3xl font-bold mb-3">FAQ</h2>
                        <p class="text-white/90 text-sm">Temukan jawaban untuk pertanyaan umum tentang layanan dan kebijakan
                            perpustakaan kami</p>
                    </div>
                </section>

                <!-- SEARCH -->
                <section class="bg-white py-6 border-b">
                    <div class="max-w-6xl mx-auto px-4">
                        <div class="bg-gray-50 border rounded px-4 py-3 flex items-center gap-3 mx-auto">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                            </svg>
                            <input id="faqSearch" class="w-full bg-transparent text-sm outline-none" type="text"
                                placeholder="Cari jawaban...">
                        </div>
>>>>>>> Stashed changes
                    </div>
                </section>

                <!-- FAQ CONTENT -->
                <section class="py-10 bg-gray-50">
                    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-6">
                        <!-- SIDEBAR -->
                        <aside class="bg-white rounded-2xl shadow-sm p-4 text-sm">
                            <p class="text-xs font-semibold text-gray-500 mb-3">Kategori</p>
                            <div class="grid grid-cols-2 md:grid-cols-1 gap-2">
                                @php
    $categories = [
        'keanggotaan' => 'Keanggotaan',
        'peminjaman' => 'Peminjaman',
        'denda' => 'Denda & Biaya',
        'jam' => 'Jam & Akses'
    ];
                                @endphp
                                @foreach ($categories as $key => $label)
                                    <button
                                        class="category-btn flex items-center gap-2 px-3 py-2 rounded-xl w-full text-left border border-gray-200 text-gray-600 {{ $key == 'keanggotaan' ? 'bg-greens-600 text-white border-greens-600' : '' }}"
                                        data-category="{{ $key }}">
                                        <span
                                            class="category-badge w-6 h-6 rounded-lg flex items-center justify-center text-xs {{ $key == 'keanggotaan' ? 'bg-white text-green-700' : 'border' }}">
                                            ?
                                        </span>
                                        <span class="text-xs md:text-sm">{{ $label }}</span>
                                    </button>
                                @endforeach
                            </div>
                        </aside>
                        <!-- ============= SECTION: KEANGGOTAAN ============= -->
                        <div class="md:col-span-3 bg-white rounded-2xl shadow-sm p-6 hidden" data-category-section="keanggotaan">
                            <div class="mb-5">
                                <h3 class="font-semibold text-base text-gray-800">Keanggotaan</h3>
                                <p class="text-xs text-gray-500">Pertanyaan umum tentang pendaftaran dan status anggota</p>
                            </div>
                            <div class="space-y-3 text-sm">
                                @php
    $faq_keanggotaan = [
        [
            'id' => 'k1',
            'q' => 'Bagaimana cara mendaftar menjadi anggota?',
            'a' => 'Anda dapat mendaftar secara online melalui halaman Pendaftaran Anggota atau datang langsung ke perpustakaan.'
        ],

        [
            'id' => 'k2',
            'q' => 'Apa saja persyaratan menjadi anggota?',
            'a' => 'Persyaratan umum meliputi kartu identitas, email aktif, dan formulir pendaftaran.'
        ],

        [
            'id' => 'k3',
            'q' => 'Berapa lama masa berlaku kartu anggota?',
            'a' => 'Masa berlaku kartu anggota adalah 1 tahun dan dapat diperpanjang.'
        ]
    ];
                                @endphp
                                @foreach ($faq_keanggotaan as $f)
                                    <div class="border rounded-xl bg-gray-50">
                                        <button class="w-full flex justify-between items-center px-4 py-3 text-left"
                                            data-faq-toggle="faq-{{ $f['id'] }}">
                                            <span>{{ $f['q'] }}</span>
                                            <svg class="w-4 h-4 text-gray-400 transition-transform" data-faq-icon="faq-{{ $f['id'] }}"
                                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div id="faq-{{ $f['id'] }}" class="px-4 pb-4 text-xs text-gray-600 hidden">
                                            {{ $f['a'] }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- ============= SECTION: PEMINJAMAN ============= -->
                        <div class="md:col-span-3 bg-white rounded-2xl shadow-sm p-6 hidden" data-category-section="peminjaman">
                            <div class="mb-5">
                                <h3 class="font-semibold text-base text-gray-800">Peminjaman</h3>
                                <p class="text-xs text-gray-500">Pertanyaan umum tentang peminjaman & pengembalian</p>
                            </div>
                            @php
    $faq_peminjaman = [
        ['id' => 'p1', 'q' => 'Berapa banyak buku yang dapat dipinjam?', 'a' => 'Anda dapat meminjam maksimal 5 buku.'],
        ['id' => 'p2', 'q' => 'Berapa lama masa peminjaman?', 'a' => 'Masa peminjaman standar adalah 14 hari.'],
        ['id' => 'p3', 'q' => 'Apakah masa peminjaman dapat diperpanjang?', 'a' => 'Ya, perpanjang 1–2 kali jika buku tidak sedang dipesan.']
    ];
                            @endphp
                            <div class="space-y-3 text-sm">
                                @foreach ($faq_peminjaman as $f)
                                    <div class="border rounded-xl bg-gray-50">
                                        <button class="w-full flex justify-between items-center px-4 py-3 text-left"
                                            data-faq-toggle="faq-{{ $f['id'] }}">
                                            <span>{{ $f['q'] }}</span>
                                            <svg class="w-4 h-4 text-gray-400 transition-transform" data-faq-icon="faq-{{ $f['id'] }}"
                                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div id="faq-{{ $f['id'] }}" class="px-4 pb-4 text-xs text-gray-600 hidden">
                                            {{ $f['a'] }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- ============= SECTION: DENDA (DEFAULT OPEN) ============= -->
                        <div class="md:col-span-3 bg-white rounded-2xl shadow-sm p-6" data-category-section="denda">
                            <div class="mb-5">
                                <h3 class="font-semibold text-base text-gray-800">Denda & Biaya</h3>
                                <p class="text-xs text-gray-500">Informasi tentang denda keterlambatan & biaya penggantian</p>
                            </div>
                            @php
    $faq_denda = [
        [
            'id' => 'd1',
            'q' => 'Apakah ada denda keterlambatan?',
            'a' => 'Ya, denda dikenakan per hari untuk keterlambatan pengembalian.'
        ],

        [
            'id' => 'd2',
            'q' => 'Apa yang terjadi jika buku hilang?',
            'a' => 'Buku hilang harus diganti dengan buku yang sama atau membayar biaya pengganti.'
        ],

        [
            'id' => 'd3',
            'q' => 'Bagaimana cara membayar denda?',
            'a' => 'Denda dapat dibayar di loket, baik tunai maupun non-tunai.'
        ],

        [
            'id' => 'd4',
            'q' => 'Apakah denda memiliki batas maksimal?',
            'a' => 'Ya, terdapat batas maksimal denda per buku.'
        ]
    ];
                            @endphp
                            <div class="space-y-3 text-sm">
                                @foreach ($faq_denda as $f)
                                    <div class="border rounded-xl bg-gray-50">
                                        <button class="w-full flex justify-between items-center px-4 py-3 text-left"
                                            data-faq-toggle="faq-{{ $f['id'] }}">
                                            <span>{{ $f['q'] }}</span>
                                            <svg class="w-4 h-4 text-gray-400 transition-transform" data-faq-icon="faq-{{ $f['id'] }}"
                                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div id="faq-{{ $f['id'] }}" class="px-4 pb-4 text-xs text-gray-600 hidden">
                                            {{ $f['a'] }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- ============= SECTION: JAM & AKSES ============= -->
                        <div class="md:col-span-3 bg-white rounded-2xl shadow-sm p-6 hidden" data-category-section="jam">
                            <div class="mb-5">
                                <h3 class="font-semibold text-base text-gray-800">Jam & Akses</h3>
                                <p class="text-xs text-gray-500">Pertanyaan tentang jam operasional & akses digital</p>
                            </div>
                            @php
    $faq_jam = [
        [
            'id' => 'j1',
            'q' => 'Jam operasional perpustakaan?',
            'a' => 'Senin–Jumat: 08.00–20.00, Sabtu: 09.00–18.00, Minggu: 10.00–16.00.'
        ],

        [
            'id' => 'j2',
            'q' => 'Apakah koleksi digital bisa diakses dari rumah?',
            'a' => 'Ya, koleksi digital dapat diakses 24 jam melalui portal online.'
        ],

        [
            'id' => 'j3',
            'q' => 'Apakah perpustakaan tutup di hari libur?',
            'a' => 'Biasanya tutup pada hari libur nasional tertentu.'
        ]
    ];
                            @endphp
                            <div class="space-y-3 text-sm">
                                @foreach ($faq_jam as $f)
                                    <div class="border rounded-xl bg-gray-50">
                                        <button class="w-full flex justify-between items-center px-4 py-3 text-left"
                                            data-faq-toggle="faq-{{ $f['id'] }}">
                                            <span>{{ $f['q'] }}</span>
                                            <svg class="w-4 h-4 text-gray-400 transition-transform" data-faq-icon="faq-{{ $f['id'] }}"
                                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div id="faq-{{ $f['id'] }}" class="px-4 pb-4 text-xs text-gray-600 hidden">
                                            {{ $f['a'] }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA -->
                <section class="pb-16 bg-gray-50">
                    <div class="max-w-4xl mx-auto px-4">
                        <div class="bg-white rounded-2xl shadow-sm p-8 text-center">
                            <div class="flex justify-center mb-5">
                                <div class="w-14 h-14 rounded-xl flex items-center justify-center bg-[#59996D]">
                                    <img src="{{ asset('assets/img/faq.png') }}" class="w-7 h-7">
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                Siap bergabung dengan kami?
                            </h3>

                            <p class="text-xs text-gray-500 mb-6">
                                Gabung dengan kami dan mulailah menjelajahi koleksi kami
                            </p>

                            <a href="{{ url('/register') }}"
                                class="inline-block px-6 py-2 border-2 border-greens-600 text-greens-600 rounded-lg text-sm font-semibold hover:bg-green-50 transition">
                                Daftar Anggota
                            </a>

                        </div>
                    </div>
                </section>
        <script>
            document.addEventListener("DOMContentLoaded", function () {

                /* =======================
                   ACCORDION FAQ
                ======================= */
                document.querySelectorAll("[data-faq-toggle]").forEach(btn => {
                    btn.addEventListener("click", () => {
                        const id = btn.dataset.faqToggle;
                        const content = document.getElementById(id);
                        const icon = document.querySelector(`[data-faq-icon="${id}"]`);

                        const isOpen = !content.classList.contains("hidden");

                        // tutup semua
                        document.querySelectorAll("[id^='faq-']").forEach(c => c.classList.add("hidden"));
                        document.querySelectorAll("[data-faq-icon]").forEach(i => i.classList.remove("rotate-180"));

                        // buka yang diklik
                        if (!isOpen) {
                            content.classList.remove("hidden");
                            icon.classList.add("rotate-180");
                        }
                    });
                });


                /* =======================
                   CATEGORY SWITCH
                ======================= */
                const categoryButtons = document.querySelectorAll(".category-btn");
                const categorySections = document.querySelectorAll("[data-category-section]");

                categoryButtons.forEach(btn => {
                    btn.addEventListener("click", () => {
                        const selected = btn.dataset.category;

                        // reset semua button
                        categoryButtons.forEach(b => {
                            b.classList.remove("bg-greens-600", "text-white", "border-greens-600");
                            b.classList.add("text-gray-600", "border-gray-200");

                            const badge = b.querySelector(".category-badge");
                            badge.classList.remove("bg-white", "text-greens-600");
                            badge.classList.add("border");
                        });

                        // aktifkan button terpilih
                        btn.classList.add("bg-greens-600", "text-white", "border-greens-600");
                        btn.classList.remove("text-gray-600");

                        const activeBadge = btn.querySelector(".category-badge");
                        activeBadge.classList.remove("border");
                        activeBadge.classList.add("bg-white", "text-greens-600");

                        // tampilkan section sesuai kategori
                        categorySections.forEach(section => {
                            section.classList.toggle(
                                "hidden",
                                section.dataset.categorySection !== selected
                            );
                        });
                    });
                });

            });
        </script>

<<<<<<< Updated upstream
            btn.classList.add("bg-green-50", "text-green-700", "border-green-500");
            const badge = btn.querySelector(".category-badge");
            badge.classList.add("bg-green-600", "text-white");
            badge.classList.remove("border");

            catSections.forEach(sec => {
                sec.classList.toggle("hidden", sec.getAttribute("data-category-section") !== category);
            });
        });
    });
</script>

<!-- CTA -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-sm p-8 text-center">

            <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center mx-auto mb-4">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M8 10a4 4 0 118 0c0 1.657-1.333 2.5-2.5 3.25C12.5 14 12 15 12 16m.01 3h-.02"/>
                </svg>
            </div>

            <h3 class="text-lg font-semibold text-gray-800 mb-1">Masih Ada Pertanyaan?</h3>
            <p class="text-xs text-gray-500 mb-6">
                Tidak menemukan yang Anda cari? Hubungi tim kami!
            </p>

            <div class="flex flex-wrap justify-center gap-3">
                <a href="{{ url('/contact') }}"
                   class="px-5 py-2 bg-green-600 text-white rounded-lg text-sm hover:bg-green-700">
                    Hubungi Kami
                </a>

                <a href="{{ url('/register') }}"
                   class="px-5 py-2 border border-green-600 text-green-700 rounded-lg text-sm hover:bg-green-50">
                    Daftar Anggota
                </a>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
@include('pengunjung.footer')

</body>

</html>
=======
@endsection
>>>>>>> Stashed changes
