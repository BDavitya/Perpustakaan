<nav class="hidden md:flex items-center gap-6 text-sm text-gray-600">
                <a href="{{ url('/') }}" class="hover:text-green-600">Home</a>
                <a href="{{ url('/katalog') }}" class="hover:text-green-600">Katalog</a>
                <a href="{{ url('/pengumuman') }}" class="hover:text-green-600">Pengumuman</a>
                <a href="{{ url('/agenda') }}" class="hover:text-green-600">Agenda</a>

                <!-- Dropdown -->
                <div class="relative">
                    <button id="dropdownBtn" class="flex items-center gap-1 hover:text-green-600">
                        Lainnya
                        <svg id="dropdownIcon" xmlns="http://www.w3.org/2000/svg"
                             class="w-4 h-4 transition duration-300" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="dropdownMenu"
                        class="absolute right-0 mt-2 w-40 bg-white shadow-lg border rounded-lg py-2 text-sm hidden z-50">
                        <a href="{{ url('/register') }}" class="block px-4 py-2 hover:bg-gray-100">Pendaftaran</a>
                        <a href="{{ url('/faq') }}" class="block px-4 py-2 hover:bg-gray-100">FAQ</a>
                        <a href="{{ url('/contact') }}" class="block px-4 py-2 hover:bg-gray-100">Kontak</a>
                    </div>
                </div>
            </nav>