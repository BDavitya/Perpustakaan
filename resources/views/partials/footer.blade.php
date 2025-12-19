<!-- ================= FOOTER ================= -->
<footer class="bg-gray-900 text-gray-300">
    <!-- MAIN -->
    <div class="max-w-7xl mx-auto px-4 py-14 grid gap-12 md:grid-cols-2">
        <!-- BRAND -->
        <div class="md:col-span-1">
            <div class="flex items-center gap-3">
                <img src="{{ asset('assets/img/logoperpus.png') }}" class="w-10 h-10">
                <div>
                    <h3 class="text-white font-semibold leading-tight">BookTech</h3>
                    <p class="text-xs text-gray-400">Perpustakaan Digital</p>
                </div>
            </div>
            <p class="text-sm text-gray-400 mt-4 leading-relaxed max-w-md text-center sm:text-start">
                Sistem informasi perpustakaan modern yang menyediakan akses ke ribuan koleksi buku,
                referensi akademik, dan sumber pengetahuan terpercaya.
            </p>
        </div>
        <!-- LINKS (MOBILE: 2 KOLOM) -->
        <div class="grid grid-cols-2 gap-8 md:grid-cols-3">
            <!-- TAUTAN CEPAT -->
            <div>
                <h4 class="text-white font-semibold mb-4">Tautan Cepat</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('pengunjung.katalog') }}" class="text-gray-400 hover:text-white">Katalog
                            Buku</a></li>
                    <li><a href="{{ route('pengunjung.agenda') }}" class="text-gray-400 hover:text-white">Agenda</a>
                    </li>
                    <li><a href="{{ route('pengunjung.pengumuman') }}"
                            class="text-gray-400 hover:text-white">Pengumuman</a></li>
                    <li><a href="{{ route('pengunjung.register') }}"
                            class="text-gray-400 hover:text-white">Pendaftaran</a></li>
                </ul>
            </div>
            <!-- INFORMASI -->
            <div>
                <h4 class="text-white font-semibold mb-4">Informasi</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('pengunjung.faq') }}" class="text-gray-400 hover:text-white">FAQ</a></li>
                    <li><a href="{{ route('pengunjung.contact') }}" class="text-gray-400 hover:text-white">Kontak
                            Kami</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Kebijakan Privasi</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Syarat & Ketentuan</a></li>
                </ul>
            </div>
            <!-- KONTAK -->
            <div class="col-span-2 md:col-span-1">
                <h4 class="text-white font-semibold mb-4">Kontak</h4>
                <ul class="space-y-4 text-sm text-gray-400">
                    <li class="flex gap-3">
                        <img src="{{ asset('assets/img/location.png') }}" class="w-5 h-5 mt-0.5">
                        <span>Jl. Pendidikan No.123 Jakarta Selatan, 12345</span>
                    </li>
                    <li class="flex gap-3">
                        <img src="{{ asset('assets/img/telephone.png') }}" class="w-5 h-5 mt-0.5">
                        <span>(021) 1234-5678</span>
                    </li>
                    <li class="flex gap-3">
                        <img src="{{ asset('assets/img/email.png') }}" class="w-5 h-5 mt-0.5">
                        <span>info@perpustakaan.ac.id</span>
                    </li>
                </ul>
                <!-- SOSIAL MEDIA -->
                <div class="flex gap-3 mt-6 justify-center md:justify-start">
                    <a href="https://www.facebook.com/"
                        class="w-9 h-9 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700">
                        <!-- Facebook -->
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2v1.8h2.3l-.4 3h-1.9v7A10 10 0 0022 12z" />
                        </svg>
                    </a>
                    <a href="https://www.x.com/"
                        class="w-9 h-9 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700">
                        <!-- Twitter -->
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 001.88-2.37 8.6 8.6 0 01-2.72 1.04 4.3 4.3 0 00-7.3 3.92A12.2 12.2 0 013 5.1a4.3 4.3 0 001.33 5.73 4.2 4.2 0 01-1.95-.54v.05a4.3 4.3 0 003.44 4.2 4.3 4.3 0 01-1.94.07 4.3 4.3 0 004 3 8.6 8.6 0 01-5.34 1.84A8.9 8.9 0 012 19.54a12.1 12.1 0 006.56 1.92c7.88 0 12.2-6.53 12.2-12.2v-.56A8.7 8.7 0 0022.46 6z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/"
                        class="w-9 h-9 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700">
                        <!-- Instagram -->
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.9a1.1 1.1 0 11-2.2 0 1.1 1.1 0 012.2 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- BOTTOM -->
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 py-4 text-center sm:text-start text-xs text-gray-500">
            © 2024 Perpustakaan Digital. All rights reserved.
        </div>
    </div>

</footer>