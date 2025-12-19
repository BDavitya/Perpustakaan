<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password - Perpustakaan Digital</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }

        .bg-greens-600 {
            background-color: #2F7F48;
        }

        .bg-books {
            background-image: url('{{ asset("assets/img/bgbooks.png") }}');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bg-greens-600 min-h-screen md:flex md:items-center md:justify-center">


    <!-- ================= MOBILE HERO ================= -->
    <section class="md:hidden bg-books relative text-white px-6 pt-6 pb-28">
        <div class="absolute inset-0 bg-greens-600/90"></div>

        <div class="relative z-10 space-y-4">
            <a href="{{ route('home') }}" class="text-sm underline block text-right">
                Masuk ke Home
            </a>

            <h2 class="text-2xl font-bold leading-snug">
                Buat Password Baru
            </h2>

            <p class="text-sm text-white/90">
                Masukkan password baru untuk akun ahmad@email.com
            </p>
        </div>
    </section>

    <!-- ================= LOGIN CARD ================= -->
    <section class="relative z-20 -mt-24 md:mt-0 md:px-4 w-full">

        <div class="bg-white w-full md:max-w-5xl md:mx-auto
                 rounded-t-[32px] md:rounded-2xl
                 shadow-2xl grid grid-cols-1 md:grid-cols-2 overflow-hidden">

            <!-- ================= LEFT FORM ================= -->
            <div class="p-8 sm:p-10">

                <!-- Logo -->
                <div class="flex items-center gap-3 mb-6">
                    <img src="{{ asset('assets/img/logoperpus.png') }}" class="w-12 h-12">
                    <div>
                        <h1 class="text-xl font-bold text-green-700">BookTech</h1>
                        <p class="text-sm text-gray-500 -mt-1">Perpustakaan Digital</p>
                    </div>
                </div>

                <h2 class="text-xl font-bold">Selamat Datang Kembali</h2>
                <p class="text-gray-600 text-sm mt-1">Silakan login untuk melanjutkan</p>

                <form class="mt-6 space-y-5">

                    <div>
                        <label class="text-sm font-medium">Email</label>
                        <input type="email"
                            class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-500 outline-none"
                            placeholder="nama@email.com">
                    </div>

                    <div>
                        <label class="text-sm font-medium">Password</label>
                        <div class="relative mt-1">
                            <input id="passwordField" type="password"
                                class="w-full px-4 pr-12 py-3 border rounded-lg focus:ring-2 focus:ring-green-500 outline-none"
                                placeholder="Masukkan password">

                            <button type="button" onclick="togglePassword()"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500">
                                👁
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2">
                            <input type="checkbox">
                            <span>Ingat saya</span>
                        </label>
                        <a href="{{ route('password') }}" class="text-green-700 hover:underline">
                            Lupa password?
                        </a>
                    </div>

                    <button
                        class="w-full py-3 bg-greens-600 text-white rounded-lg font-semibold hover:bg-green-700 transition">
                        Masuk
                    </button>

                    <p class="text-center text-sm">
                        Belum punya akun?
                        <a href="{{ route('register.show') }}"
                            class="text-green-700 font-semibold hover:underline">
                            Daftar Sekarang
                        </a>
                    </p>

                </form>
            </div>

            <!-- ================= DESKTOP RIGHT PANEL ================= -->
            <div class="relative bg-books hidden md:flex h-full">

                <div class="absolute inset-0 bg-greens-600/70"></div>
                <div class="absolute inset-0 bg-gradient-to-b from-green-700/60 to-green-800/80"></div>


                <div class="relative text-white p-10 flex flex-col justify-center space-y-6">
                    <a href="{{ route('home') }}" class="absolute top-4 right-4 underline text-sm">
                        Masuk ke Home
                    </a>

                    <h2 class="text-3xl font-bold max-w-sm">
                        Akses Ribuan Koleksi Buku Digital
                    </h2>

                    <p class="text-sm text-white/90 max-w-sm">
                        Login untuk meminjam buku, melihat riwayat peminjaman,
                        dan mengakses fitur perpustakaan digital kami.
                    </p>

                    <div class="space-y-4">
                        <div>
                            <p class="font-semibold text-lg">12,500+ Koleksi Buku</p>
                            <p class="text-sm text-white/80">Berbagai kategori tersedia</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg">Peminjaman Mudah</p>
                            <p class="text-sm text-white/80">Proses cepat dan praktis</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        function togglePassword() {
            const field = document.getElementById("passwordField");
            field.type = field.type === "password" ? "text" : "password";
        }
    </script>

</body>

</html>