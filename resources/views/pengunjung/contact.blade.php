<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - BookTech</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- ================= HEADER ================= -->
@include('pengunjung.navbar')

<script>
document.getElementById("dropdownBtn").onclick = () => {
    dropdownMenu.classList.toggle("hidden");
    dropdownIcon.classList.toggle("rotate-180");
};
document.addEventListener("click", e => {
    if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add("hidden");
        dropdownIcon.classList.remove("rotate-180");
    }
});
document.getElementById("menuBtn").onclick = () => {
    mobileMenu.classList.toggle("hidden");
};
</script>

<!-- SPACER -->
<div class="h-20"></div>

<!-- ================= HERO CONTACT ================= -->
<section class="bg-gradient-to-b from-green-700 to-green-600 text-center py-16 px-4">
    <div class="max-w-3xl mx-auto text-white">
        <div class="w-14 h-14 rounded-full border border-white/40 flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.8L3 20l1.13-3.39A7.88 7.88 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
        </div>
        <h2 class="text-3xl font-bold mb-2">Get in Touch</h2>
        <p class="text-sm text-green-100">Have questions or feedback? We'd love to hear from you.</p>
    </div>
</section>

<!-- ================= CONTACT INFO ================= -->
<section class="py-10 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-white rounded-2xl shadow-sm p-6 text-center">
        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mb-3 mx-auto">
            📍
        </div>
        <h4 class="font-semibold text-sm">Address</h4>
        <p class="text-xs text-gray-500">
            123 Library Street<br>Jakarta 12345<br>Indonesia
        </p>
    </div>

        <div class="bg-white rounded-2xl shadow-sm p-6 text-center">
            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mb-3 mx-auto">📞</div>
            <h4 class="font-semibold text-sm">Phone</h4>
            <p class="text-xs text-gray-500">
                +62 21 1234 5678<br>+62 812 3456 7890
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm p-6 text-center">
            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mb-3 mx-auto">✉️</div>
            <h4 class="font-semibold text-sm">Email</h4>
            <p class="text-xs text-gray-500">
                info@library.com<br>support@library.com
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm p-6 text-center">
            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mb-3 mx-auto">⏰</div>
            <h4 class="font-semibold text-sm">Open Hours</h4>
            <p class="text-xs text-gray-500">
                Mon–Fri: 8.00–20.00<br>
                Sat–Sun: 9.00–18.00
            </p>
        </div>

    </div>
</section>

<!-- ================= FORM & HOURS ================= -->
<section class="pb-16">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- FORM -->
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <h3 class="font-semibold">Send us a Message</h3>
            <p class="text-xs text-gray-500 mb-5">Fill out the form below</p>

            <form method="post">
                @csrf
                <div class="space-y-4 text-sm">

                    <div>
                        <label class="font-medium">Your Name *</label>
                        <input type="text" name="name" class="w-full border rounded-lg px-3 py-2">
                    </div>

                    <div>
                        <label class="font-medium">Email *</label>
                        <input type="email" name="email" class="w-full border rounded-lg px-3 py-2">
                    </div>

                    <div>
                        <label class="font-medium">Phone Number</label>
                        <input type="text" name="phone" class="w-full border rounded-lg px-3 py-2">
                    </div>

                    <div>
                        <label class="font-medium">Subject *</label>
                        <input type="text" name="subject" class="w-full border rounded-lg px-3 py-2">
                    </div>

                    <div>
                        <label class="font-medium">Message *</label>
                        <textarea name="message" rows="4" class="w-full border rounded-lg px-3 py-2"></textarea>
                    </div>

                    <button type="submit"
                            class="px-5 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 text-sm">
                        Send Message ➤
                    </button>

                </div>
            </form>
        </div>

        <!-- OPEN HOURS -->
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <h3 class="font-semibold">Opening Hours</h3>
            <p class="text-xs text-gray-500 mb-4">Come visit us</p>

            <div class="text-sm space-y-3">
                <div class="flex justify-between">
                    <p class="font-medium">Monday - Friday</p>
                    <p class="text-gray-600">8:00 AM - 8:00 PM</p>
                </div>

                <div class="flex justify-between">
                    <p class="font-medium">Saturday</p>
                    <p class="text-gray-600">9:00 AM - 6:00 PM</p>
                </div>

                <div class="flex justify-between">
                    <p class="font-medium">Sunday</p>
                    <p class="text-gray-600">10:00 AM - 4:00 PM</p>
                </div>
            </div>

            <p class="mt-6 text-xs bg-blue-50 text-blue-700 px-3 py-2 rounded-lg border">
                <strong>Note:</strong> Digital resources available 24/7.
            </p>
        </div>

    </div>
</section>

<!-- ================= CTA JOIN ================= -->
<section class="py-16 bg-gradient-to-r from-green-700 to-green-600 text-white text-center">
    <h3 class="text-2xl font-bold">Ready to Join Our Library?</h3>
    <p class="text-sm text-green-100 mt-2">Start exploring our collection today</p>

    <a href="{{ url('/register') }}"
       class="mt-6 inline-block px-6 py-3 bg-white text-green-700 rounded-lg text-sm font-semibold hover:bg-gray-100">
        Become a Member
    </a>
</section>

<!-- ================= FOOTER ================= -->
@include('pengunjung.footer')

</body>
</html>
