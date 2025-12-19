@extends('layouts.pengunjung')

@section('title', 'Pendaftaran - BookTech')

<<<<<<< Updated upstream
    {{-- asdsa --}}
<!-- ================= HEADER ================= -->
<header class="bg-white shadow-sm fixed inset-x-0 top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-4 flex items-center justify-between">
=======
@section('content')
>>>>>>> Stashed changes

    <!-- ================= FORM REGISTRASI ================= -->
    <section class="max-w-4xl mx-auto px-4 lg:px-0 mb-10">

        <div class="bg-white rounded-2xl shadow-md p-8 space-y-10">

            <!-- ================= INFORMASI PRIBADI ================= -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div
                        class="w-8 h-8 rounded-full bg-greens-600 text-white flex items-center justify-center text-sm font-bold">
                        1
                    </div>
                    <h2 class="text-lg font-semibold">Informasi Pribadi</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">

                    <div>
                        <label class="text-sm font-semibold">Nama Lengkap *</label>
                        <input type="text" class="mt-1 w-full px-4 py-2 border rounded-lg text-sm"
                            placeholder="Masukkan nama lengkap">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Email *</label>
                        <input type="email" class="mt-1 w-full px-4 py-2 border rounded-lg text-sm"
                            placeholder="nama@email.com">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Nomor Telepon *</label>
                        <input type="text" class="mt-1 w-full px-4 py-2 border rounded-lg text-sm"
                            placeholder="08xx xxxx xxxx">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Tanggal Lahir *</label>
                        <input type="date" class="mt-1 w-full px-4 py-2 border rounded-lg text-sm">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="text-sm font-semibold">Jenis Kelamin *</label>
                    <div class="flex items-center gap-6 mt-2 text-sm">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender" class="accent-green-600"> Laki-laki
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender" class="accent-green-600"> Perempuan
                        </label>
                    </div>
                </div>

                <div class="mt-6">
                    <label class="text-sm font-semibold">Alamat Lengkap *</label>
                    <textarea class="mt-1 w-full px-4 py-2 border rounded-lg text-sm h-24"
                        placeholder="Masukkan alamat lengkap"></textarea>
                </div>
            </div>

<<<<<<< Updated upstream
            <a href="{{ url('/login') }}" class="text-green-700 font-semibold mt-2">Login</a>
        </nav>
    </div>
</header>

<!-- JS DROPDOWN -->
<script>
    document.getElementById("menuBtn").onclick = () => {
        document.getElementById("mobileMenu").classList.toggle("hidden");
    };

    const dropdownBtn = document.getElementById("dropdownBtn");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const dropdownIcon = document.getElementById("dropdownIcon");

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

    const mobileBtn = document.getElementById("mobileDropdownBtn");
    const mobileMenu = document.getElementById("mobileDropdownMenu");
    const mobileIcon = document.getElementById("mobileDropdownIcon");

    mobileBtn.onclick = () => {
        mobileMenu.classList.toggle("hidden");
        mobileIcon.classList.toggle("rotate-180");
    };
</script>

<!-- ================= SPACER ================= -->
<div class="h-20"></div>

<!-- ================= FORM REGISTRASI ================= -->
<section class="max-w-4xl mx-auto px-4 lg:px-0 mb-20">

    <form action="{{ route('register.store') }}" method="POST" class="max-w-4xl mx-auto px-4 lg:px-0 mb-20">
    @csrf
        <div class="bg-white rounded-2xl shadow-md p-8 space-y-10">

            <!-- INFORMASI PRIBADI -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center text-sm font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                </div>
                    
                    <h2 class="text-lg font-semibold">Daftar Anggota</h2>
=======
            <!-- ================= INFORMASI AKUN ================= -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div
                        class="w-8 h-8 rounded-full bg-yellow-500 text-white flex items-center justify-center text-sm font-bold">
                        2
                    </div>
                    <h2 class="text-lg font-semibold">Informasi Akun</h2>
>>>>>>> Stashed changes
                </div>

                <div class="grid md:grid-cols-2 gap-6">

                    <div>
<<<<<<< Updated upstream
                        <label class="text-sm font-semibold">Nama Lengkap *</label>
                        <input type="text" name="name" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="Masukkan nama lengkap">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Email *</label>
                        <input type="email" name="email" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="nama@email.com">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Nomor Telepon *</label>
                        <input type="text" name="phone" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="08xx xxxx xxxx">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Tanggal Lahir *</label>
                        <input type="date" name="birth_date" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="text-sm font-semibold">Jenis Kelamin *</label>
                    <div class="flex items-center gap-6 mt-2 text-sm">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender" value="L" class="accent-green-600"> Laki-laki
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender" value="P" class="accent-green-600"> Perempuan
                        </label>
                    </div>
                </div>

                <div class="mt-6">
                    <label class="text-sm font-semibold">Alamat Lengkap *</label>
                    <textarea class="mt-1 w-full px-4 py-2 border rounded-lg text-sm h-24" name="address" required placeholder="Masukkan alamat lengkap"></textarea>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mt-6">
                    <div>
                        <label class="text-sm font-semibold">Password *</label>
                        <input type="password" name="password" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="Minimal 8 karakter">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Konfirmasi Password *</label>
                        <input type="password" name="password_confirmation" required class="mt-1 w-full px-4 py-2 border rounded-haspopup rounded-lg text-sm" placeholder="Masukkan ulang password">
                    </div>
                </div>
            </div>

            <!-- INFORMASI AKUN -->
            <div>
                {{-- <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-8 rounded-full bg-yellow-500 text-white flex items-center justify-center text-sm font-bold">2</div>
                    <h2 class="text-lg font-semibold">Informasi Akun</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-sm font-semibold">Username *</label>
                        <input type="text" name="username" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="Pilih username">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Password *</label>
                        <input type="password" name="password" required class="mt-1 w-full px-4 py-2 border rounded-lg text-sm" placeholder="Minimal 8 karakter">
                    </div>

                    <div class="md:col-span-2">
                        <label class="text-sm font-semibold">Konfirmasi Password *</label>
                        <input type="password" name="password_confirmation" required class="mt-1 w-full px-4 py-2 border rounded-haspopup rounded-lg text-sm" placeholder="Masukkan ulang password">
                    </div>
                </div> --}}

                <div class="mt-5">
                    <label class="flex items-start gap-2 text-sm">
                        <input type="checkbox" name="terms" required class="mt-1 accent-green-600">
                        <span>Saya menyetujui syarat dan ketentuan perpustakaan.</span>
                    </label>
                </div>

                <div class="mt-6 flex justify-end">
                    <button class="px-6 py-2 bg-green-600 text-white rounded-lg text-sm font-semibold hover:bg-green-700">
                        Daftar
                    </button>
                </div>
            </div>

=======
                        <label class="text-sm font-semibold">Username *</label>
                        <input type="text" class="mt-1 w-full px-4 py-2 border rounded-lg text-sm"
                            placeholder="Pilih username">
                    </div>

                    <div>
                        <label class="text-sm font-semibold">Password *</label>
                        <input type="password" class="mt-1 w-full px-4 py-2 border rounded-lg text-sm"
                            placeholder="Minimal 8 karakter">
                    </div>

                    <div class="md:col-span-2">
                        <label class="text-sm font-semibold">Konfirmasi Password *</label>
                        <input type="password" class="mt-1 w-full px-4 py-2 border rounded-lg text-sm"
                            placeholder="Masukkan ulang password">
                    </div>
                </div>

                <div class="mt-5">
                    <label class="flex items-start gap-2 text-sm">
                        <input type="checkbox" class="mt-1 accent-green-600">
                        <span>Saya menyetujui syarat dan ketentuan perpustakaan.</span>
                    </label>
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="button" onclick="openModal()"
                        class="w-full md:w-auto px-6 py-2 bg-greens-600 text-white rounded-lg text-sm font-semibold hover:bg-green-700 transition">
                        Daftar
                    </button>
                </div>
            </div>

        </div>

        <!-- ================= INFORMASI PENTING ================= -->
        <div class="bg-blue-50 mt-10 rounded-2xl p-6 shadow-md border border-blue-100">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-8 h-8 bg-blue-600 text-white flex items-center justify-center rounded-full text-sm font-bold">
                    i
                </div>
                <h3 class="text-sm font-semibold text-blue-700">Informasi Penting</h3>
            </div>

            <ul class="text-xs text-gray-600 space-y-1 ml-10" style="list-style-type: disc;">
                <li>Pendaftaran keanggotaan gratis</li>
                <li>Verifikasi membutuhkan waktu 1–2 hari kerja</li>
                <li>Email konfirmasi dikirim setelah verifikasi</li>
                <li>Kartu anggota dapat diambil di perpustakaan</li>
            </ul>
        </div>

        <!-- ================= MODAL SUCCESS ================= -->
        <div id="successModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4">

            <div class="bg-white w-full max-w-sm rounded-2xl shadow-lg p-6 text-center animate-scaleIn">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center" style="background-color: #DCFCE7">
                        <img src="{{ asset('assets/img/checklist.png') }}">
                    </div>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1">
                    Pendaftaran Berhasil!
                </h3>
                <p class="text-sm text-gray-500 mb-6">
                    Anda Telah Menjadi Anggota Perpustakaan
                </p>
                <button onclick="closeModal()"
                    class="w-full py-3 rounded-xl bg-greens-600 text-white font-semibold text-sm hover:bg-green-800 transition">
                    Konfirmasi
                </button>

            </div>
>>>>>>> Stashed changes
        </div>
        <script>
            function openModal() {
                const modal = document.getElementById('successModal');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

<<<<<<< Updated upstream
        <!-- INFORMASI PENTING -->
        <div class="bg-blue-50 mt-10 rounded-2xl p-6 shadow-sm border border-blue-100">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-8 h-8 bg-blue-600 text-white flex items-center justify-center rounded-full text-sm font-bold">i</div>
                <h3 class="text-sm font-semibold text-blue-700">Informasi Penting</h3>
            </div>

            <ul class="text-xs text-gray-600 space-y-1 ml-10">
                <li>Pendaftaran keanggotaan gratis</li>
                <li>Verifikasi membutuhkan waktu 1–2 hari kerja</li>
                <li>Email konfirmasi dikirim setelah verifikasi</li>
                <li>Kartu anggota dapat diambil di perpustakaan</li>
            </ul>
        </div>
    </form>
=======
            function closeModal() {
                const modal = document.getElementById('successModal');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        </script>


    </section>
>>>>>>> Stashed changes

@endsection