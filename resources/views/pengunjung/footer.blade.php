<footer class="bg-gray-900 text-gray-300 pt-10 pb-6">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-6">

        <div>
            <h4 class="font-semibold text-sm">Perpustakaan Digital</h4>
            <p class="text-xs text-gray-400 mt-3">Akses ribuan buku digital.</p>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Tautan Cepat</h4>
            <ul class="space-y-2 text-xs">
                <li><a href="{{ url('/home-pengunjung') }}" class="hover:text-white">Home</a></li>
                <li><a href="{{ url('/agenda') }}" class="hover:text-white">Agenda</a></li>
                <li><a href="{{ url('/pengumuman') }}" class="hover:text-white">Pengumuman</a></li>
                <li><a href="{{ url('/register') }}" class="hover:text-white">Pendaftaran</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Informasi</h4>
            <ul class="space-y-2 text-xs">
                <li><a href="{{ url('/faq') }}" class="hover:text-white">FAQ</a></li>
                <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-sm mb-3">Kontak</h4>
            <p class="text-xs text-gray-400">
                Jl. Pendidikan No. 123<br>
                Jakarta Selatan, 12345
            </p>
            <p class="text-xs text-gray-400 mt-2">info@perpustakaan.id</p>
        </div>

    </div>

    <div class="border-t border-gray-800 pt-4">
        <div class="max-w-7xl mx-auto px-4 lg:px-8 flex flex-col md:flex-row justify-between text-xs text-gray-500">
            <p>© 2024 Perpustakaan Digital. All rights reserved.</p>
            <div class="flex gap-4 mt-2 md:mt-0">
                <a href="#" class="hover:text-white">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>