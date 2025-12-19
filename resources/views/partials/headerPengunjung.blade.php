<!-- ================= HEADER ================= -->
<header class="bg-white shadow-sm fixed inset-x-0 top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-4 flex items-center justify-between">

        <!-- Brand -->
        <div class="flex items-center gap-2">
            <img src="{{ asset('assets/img/logoperpus.png') }}" class="w-10 h-10 object-contain">
            <div>
                <h1 class="text-lg font-bold text-green-700 leading-tight">BookTech</h1>
                <p class="text-xs text-gray-500 -mt-1">Perpustakaan Digital</p>
            </div>
        </div>

        <!-- Right -->
        <div class="flex items-center gap-8">

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-6 text-sm">

                <a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'text-green-600 font-semibold' : 'text-gray-600' }}">
                    Home
                </a>

                <a href="{{ route('katalog') }}"
                    class="{{ request()->routeIs('katalog') ? 'text-green-600 font-semibold' : 'text-gray-600' }}">
                    Katalog
                </a>

                <a href="{{ route('pengumuman') }}"
                    class="{{ request()->routeIs('pengumuman') ? 'text-green-600 font-semibold' : 'text-gray-600' }}">
                    Pengumuman
                </a>

                <a href="{{ route('agenda') }}"
                    class="{{ request()->routeIs('agenda') ? 'text-green-600 font-semibold' : 'text-gray-600' }}">
                    Agenda
                </a>

                <!-- Dropdown -->
                <div class="relative">
                    <button id="dropdownBtn" class="flex items-center gap-1 text-gray-600 hover:text-green-600">
                        Lainnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="dropdownMenu"
                        class="hidden absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-md text-sm">
                        <a href="{{ route('register.show') }}"
                            class="block px-4 py-2 {{ request()->routeIs('register.show') ? 'text-green-600 font-semibold' : 'text-gray-600' }} hover:bg-gray-100">
                            Pendaftaran
                        </a>
                        <a href="{{ route('faq') }}"
                            class="block px-4 py-2 {{ request()->routeIs('faq') ? 'text-green-600 font-semibold' : 'text-gray-600' }} hover:bg-gray-100">
                            FAQ
                        </a>
                    </div>
                </div>
            </nav>

            <!-- Login Desktop -->
            <a href="{{ route('login.show') }}"
                class="hidden md:inline-block px-5 py-2 rounded-lg bg-greens-600 text-white text-sm font-semibold">
                Login
            </a>

            <!-- Mobile Button -->
            <button id="menuBtn" class="md:hidden text-2xl text-gray-700">
                ☰
            </button>
        </div>
    </div>
</header>

<!-- Overlay -->
<div id="menuOverlay" class="fixed inset-0 bg-black/40 z-40 hidden md:hidden"></div>

<!-- ================= MOBILE DRAWER ================= -->
<div id="mobileMenu"
    class="fixed top-0 right-0 h-full w-72 bg-white z-50 transform translate-x-full transition-transform duration-300 md:hidden">
    <!-- Header -->
    <div class="flex items-center justify-between px-4 py-4 border-b">
        <h3 class="text-lg font-semibold">Menu</h3>
        <button id="closeMenu" class="text-2xl">&times;</button>
    </div>
    <!-- Content -->
    <nav class="flex flex-col px-4 py-4 space-y-1 text-sm">
        <!-- Dashboard -->
        <a href="{{ route('home') }}"
            class="flex items-center gap-3 p-3 rounded-lg {{ request()->routeIs('home') ? 'bg-green-50 text-green-700 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l9-9 9 9M4 10v10h6v-6h4v6h6V10" />
            </svg>
            Home
        </a>
        <!-- Katalog -->
        <a href="{{ route('katalog') }}"
            class="flex items-center gap-3 p-3 rounded-lg {{ request()->routeIs('katalog') ? 'bg-green-50 text-green-700 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6l-2-2H4a2 2 0 00-2 2v14l4-2 4 2 4-2 4 2V6a2 2 0 00-2-2h-6z" />
            </svg>
            Katalog
        </a>
        <!-- Pengumuman -->
        <a href="{{ route('pengumuman') }}"
            class="flex items-center gap-3 p-3 rounded-lg {{ request()->routeIs('pengumuman') ? 'bg-green-50 text-green-700 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11 a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341 C7.67 6.165 6 8.388 6 11v3.159 c0 .538-.214 1.055-.595 1.436L4 17h5" />
            </svg>
            Pengumuman
        </a>
        <!-- Agenda -->
        <a href="{{ route('agenda') }}"
            class="flex items-center gap-3 p-3 rounded-lg {{ request()->routeIs('agenda') ? 'bg-green-50 text-green-700 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3M5 11h14M5 19h14 a2 2 0 002-2V7a2 2 0 00-2-2H5 a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            Agenda
        </a>
        @php
            $mobileLainnyaActive = request()->routeIs(
                'register.show',
                'faq',
                'contact'
            );
        @endphp
        <!-- Lainnya -->
        <div>
            <button id="mobileDropdownBtn"
                class="w-full flex justify-between items-center p-3 rounded-lg {{ $mobileLainnyaActive ? 'bg-green-50 text-green-700 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
                <span class="flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    Lainnya
                </span>
                <svg id="mobileDropdownIcon" class="w-4 h-4 transition {{ $mobileLainnyaActive ? 'rotate-180' : '' }}"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="mobileDropdownMenu" class="ml-11 mt-2 space-y-2 {{ $mobileLainnyaActive ? '' : 'hidden' }}">
                <a href="{{ route('register.show') }}"
                    class="block px-4 py-2 rounded-lg text-sm {{ request()->routeIs('register.show') ? 'bg-green-100 text-green-700 font-semibold' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
                    Pendaftaran
                </a>
                <a href="{{ route('faq') }}"
                    class="block px-4 py-2 rounded-lg text-sm {{ request()->routeIs('faq') ? 'bg-green-100 text-green-700 font-semibold' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
                    FAQ
                </a>
            </div>
        </div>
        <!-- GARIS PEMBATAS -->
        <hr class="my-4">
        <!-- Login -->
        <a href="{{ route('login.show') }}"
            class="block w-full text-center py-3 bg-green-700 text-white rounded-xl font-semibold">
            Login
        </a>
    </nav>
</div>

<script>
    const dropdownBtn = document.getElementById('dropdownBtn');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const dropdownIcon = document.getElementById('dropdownIcon');

    dropdownBtn.onclick = (e) => {
        e.stopPropagation();
        dropdownMenu.classList.toggle('hidden');
        dropdownIcon.classList.toggle('rotate-180');
    };

    document.addEventListener('click', (e) => {
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
            dropdownIcon.classList.remove('rotate-180');
        }
    });
</script>


<!-- ================= SCRIPT ================= -->
<script>
    const menuBtn = document.getElementById('menuBtn');
    const closeMenu = document.getElementById('closeMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuOverlay = document.getElementById('menuOverlay');

    const mobileDropdownBtn = document.getElementById('mobileDropdownBtn');
    const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');
    const mobileDropdownIcon = document.getElementById('mobileDropdownIcon');

    menuBtn.onclick = () => {
        mobileMenu.classList.remove('translate-x-full');
        menuOverlay.classList.remove('hidden');
    };

    closeMenu.onclick = () => {
        mobileMenu.classList.add('translate-x-full');
        menuOverlay.classList.add('hidden');
    };

    menuOverlay.onclick = closeMenu;

    mobileDropdownBtn.onclick = () => {
        mobileDropdownMenu.classList.toggle('hidden');
        mobileDropdownIcon.classList.toggle('rotate-180');
    };
</script>