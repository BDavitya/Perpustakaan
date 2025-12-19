<header class="bg-white shadow-sm fixed inset-x-0 top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-4 flex items-center justify-between">

        <!-- Brand -->
        <div class="flex items-center gap-2">
            <img src="{{ asset('assets/img/logoperpus.png') }}" class="w-10 h-10 object-contain">
            <a href="{{ route('home') }}" class="cursor-pointer">
                <div>
                    <h1 class="text-lg font-bold text-green-700 leading-tight">BookTech</h1>
                    <p class="text-xs text-gray-500 -mt-1">Perpustakaan Digital</p>
                </div>
            </a>
        </div>

        <!-- Right side: Nav + Auth Section + Mobile button -->
        <div class="flex items-center gap-8">

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-6 text-sm text-gray-600">
                <a href="{{ url('/') }}" class="hover:text-green-600">Home</a>
                <a href="{{ url('/katalog') }}" class="hover:text-green-600">Katalog</a>
                <a href="{{ url('/pengumuman') }}" class="hover:text-green-600">Pengumuman</a>
                <a href="{{ route('agenda') }}" class="hover:text-green-600">Agenda</a>

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

            <!-- Auth Section Desktop -->
            @auth
                <!-- User Dropdown (Logged In) -->
                <div class="hidden md:flex items-center gap-3">
                    <div class="relative">
                        <button id="userDropdownBtn" class="flex items-center gap-2 hover:bg-gray-50 px-3 py-2 rounded-lg transition">
                            <!-- Avatar -->
                            <div class="w-9 h-9 rounded-full bg-green-600 text-white flex items-center justify-center font-semibold text-sm">
                                {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                            </div>
                            <span class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</span>
                            <svg id="userDropdownIcon" xmlns="http://www.w3.org/2000/svg"
                                 class="w-4 h-4 transition duration-300 text-gray-500" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="userDropdownMenu"
                            class="absolute right-0 mt-2 w-48 bg-white shadow-lg border rounded-lg py-2 text-sm hidden z-50">
                            <div class="px-4 py-2 border-b border-gray-100">
                                <p class="font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                            </div>
                            <a href="{{ url('/profil') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Profil
                            </a>
                           
                            <div class="border-t border-gray-100 my-1"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-2 px-4 py-2 hover:bg-red-50 text-red-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <!-- Login Button (Not Logged In) -->
                <a href="{{ url('/login') }}"
                   class="hidden md:inline-block px-5 py-2 rounded-lg bg-green-600 text-white text-sm font-semibold hover:bg-green-700">
                    Login
                </a>
            @endauth

            <!-- Mobile button -->
            <button id="menuBtn" class="md:hidden text-gray-700 text-2xl">
                ☰
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden bg-white border-t border-gray-200 md:hidden">
        <nav class="flex flex-col p-4 text-sm text-gray-700 space-y-3">

            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/katalog') }}">Katalog</a>
            <a href="{{ url('/pengumuman') }}">Pengumuman</a>
            <a href="{{ url('/agenda') }}">Agenda</a>

            <!-- Dropdown MOBILE -->
            <div class="border-t pt-3">
                <button id="mobileDropdownBtn"
                        class="flex justify-between w-full text-left py-2">
                    Lainnya
                    <svg id="mobileDropdownIcon" xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 transition duration-300" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="mobileDropdownMenu" class="hidden pl-4 space-y-2">
                    <a href="{{ url('/register') }}" class="block py-1">Pendaftaran</a>
                    <a href="{{ url('/faq') }}" class="block py-1">FAQ</a>
                    <a href="{{ url('/contact') }}" class="block py-1">Kontak</a>
                </div>
            </div>

            <!-- Auth Section Mobile -->
            @auth
                <div class="border-t pt-3">
                    <!-- User Info -->
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-full bg-green-600 text-white flex items-center justify-center font-semibold">
                            {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    
                    <!-- Menu Links -->
                    <div class="space-y-2 pl-2">
                        <a href="{{ url('/profil') }}" class="flex items-center gap-2 py-2 text-gray-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Profil
                        </a>
                        <a href="{{ url('/layanan') }}" class="flex items-center gap-2 py-2 text-gray-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            Layanan
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="flex items-center gap-2 py-2 text-red-600 w-full text-left">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ url('/login') }}" class="text-green-700 font-semibold mt-2">Login</a>
            @endauth
        </nav>
    </div>
</header>

<!-- JavaScript for dropdowns -->
<script>
    // Mobile menu toggle
    document.getElementById("menuBtn").onclick = () => {
        document.getElementById("mobileMenu").classList.toggle("hidden");
    };

    // Desktop "Lainnya" dropdown
    const dropdownBtn = document.getElementById("dropdownBtn");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const dropdownIcon = document.getElementById("dropdownIcon");

    if (dropdownBtn) {
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
    }

    // Mobile "Lainnya" dropdown
    const mobileBtn = document.getElementById("mobileDropdownBtn");
    const mobileMenu = document.getElementById("mobileDropdownMenu");
    const mobileIcon = document.getElementById("mobileDropdownIcon");

    if (mobileBtn) {
        mobileBtn.onclick = () => {
            mobileMenu.classList.toggle("hidden");
            mobileIcon.classList.toggle("rotate-180");
        };
    }

    // User dropdown (Desktop)
    const userDropdownBtn = document.getElementById("userDropdownBtn");
    const userDropdownMenu = document.getElementById("userDropdownMenu");
    const userDropdownIcon = document.getElementById("userDropdownIcon");

    if (userDropdownBtn) {
        userDropdownBtn.onclick = () => {
            userDropdownMenu.classList.toggle("hidden");
            userDropdownIcon.classList.toggle("rotate-180");
        };

        document.addEventListener("click", (e) => {
            if (!userDropdownBtn.contains(e.target) && !userDropdownMenu.contains(e.target)) {
                userDropdownMenu.classList.add("hidden");
                userDropdownIcon.classList.remove("rotate-180");
            }
        });
    }
</script>