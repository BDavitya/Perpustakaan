@extends('layouts.pengunjung')

@section('title', 'Katalog - BookTech')

<<<<<<< Updated upstream
<!-- ================= HEADER ================= -->
@include('pengunjung.navbar')

<!-- SPACER -->
<div class="h-20"></div>

<!-- HERO -->
<section class="bg-green-600 text-center py-16 px-4">
    <div class="max-w-4xl mx-auto text-white">
        <h2 class="text-3xl font-bold mb-3">Katalog Buku</h2>
        <p class="text-white/90 text-sm">
            Jelajahi koleksi buku kami yang luas di berbagai genre dan subjek
        </p>
    </div>
</section>

<!-- SEARCH & FILTER -->
<section class="py-10">
    <div class="max-w-6xl mx-auto px-4 lg:px-8">

        <div class="bg-white shadow rounded-xl p-4 flex flex-col md:flex-row items-center gap-4">
            <input type="text" id="searchInput" class="w-full border rounded-lg px-4 py-3 text-sm 
                   focus:ring-2 focus:ring-green-500 outline-none"
                   placeholder="Cari buku berdasarkan judul, penulis, atau ISBN...">

            <button id="searchBtn" class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white rounded-lg text-sm font-semibold">
                Cari
            </button>
            
            <button id="resetBtn" class="px-6 py-3 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm font-semibold">
                Reset
            </button>
        </div>

        <!-- Categories -->
        <div class="flex flex-wrap gap-3 mt-6">
            <button class="category-btn px-5 py-2 text-sm bg-green-600 text-white rounded-full" data-category="all">Semua Buku</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="Fiksi">Fiksi</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="Pengembangan">Pengembangan Diri</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="Keuangan">Keuangan</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="Sejarah">Sejarah</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="Produktivitas">Produktivitas</button>
            <button class="category-btn px-5 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-full" data-category="Psikologi">Psikologi</button>
        </div>

    </div>
</section>

<!-- BOOK LIST -->
<section class="pb-14">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <h3 class="font-semibold text-gray-700 mb-4">Buku Tersedia</h3>
        <p class="text-sm text-gray-500 mb-6">
            Menampilkan <span id="bookCount">12</span> buku
        </p>

        <div id="bookGrid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
            <!-- Books will be dynamically loaded here -->
        </div>  
=======
@section('content')

    <!-- ================= HERO ================= -->
    <section class="bg-greens-600 text-center py-16 px-4">
        <div class="max-w-4xl mx-auto text-white">
            <h2 class="text-3xl font-bold mb-3">Katalog Buku</h2>
            <p class="text-white/90 text-sm">
                Jelajahi koleksi buku kami yang luas di berbagai genre dan subjek
            </p>
        </div>
    </section>

    <!-- SEARCH -->
    <section class="py-8">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            <div class="relative w-full">
                <!-- ICON SEARCH -->
                <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </span>

                <!-- INPUT -->
                <input id="searchInput" type="text" placeholder="Cari buku berdasarkan judul, penulis, atau ISBN..." class="w-full pl-12 pr-4 py-4 text-sm rounded-xl bg-gray-100 
                                                       focus:bg-white focus:ring-2 focus:ring-green-500 
                                                       outline-none transition">
            </div>
        </div>
    </section>


    <!-- ================= BOOK LIST ================= -->
    <section class="pb-14">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">

            <h3 class="font-semibold text-gray-700 mb-1">Buku Tersedia</h3>
            <p id="totalInfo" class="text-sm text-gray-500 mb-6"></p>

            @php
                $images = ['book1.jpg', 'book2.jpg'];
                $titles = [
                    "The Midnight Library",
                    "Atomic Habits",
                    "The Psychology of Money",
                    "Sapiens",
                    "Deep Work",
                    "Thinking, Fast and Slow",
                    "1984",
                    "The Power of Now"
                ];
                $authors = [
                    "Matt Haig",
                    "James Clear",
                    "Morgan Housel",
                    "Yuval Noah Harari",
                    "Cal Newport",
                    "Daniel Kahneman",
                    "George Orwell",
                    "Eckhart Tolle"
                ];
                $year = ["2021", "2018", "2020", "2011", "2016", "2011", "1949", "1997"];
                $category = ["Fiksi", "Pengembangan Diri", "Keuangan", "Sejarah", "Produktivitas", "Psikologi", "Fiksi", "Pengembangan Diri"];
                $status = ["Tersedia", "Tersedia", "Dipinjam", "Tersedia", "Tersedia", "Tersedia", "Tersedia", "Dipinjam"];
            @endphp

            <!-- GRID -->
            <div id="bookGrid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">

                @for ($i = 0; $i < 8; $i++)
                    <a href="{{ route('pengunjung.detail_book') }}">
                        <div
                            class="book-card bg-white rounded-2xl shadow-sm hover:shadow-md transition overflow-hidden relative">

                            <!-- STATUS -->
                            @if ($status[$i] === "Tersedia")
                                <span
                                    class="absolute top-3 right-3 z-10 text-[10px]
                                                                                                                                     bg-green-600 text-white px-3 py-1 rounded-full font-semibold">
                                    Tersedia
                                </span>
                            @else
                                <span
                                    class="absolute top-3 right-3 z-10 text-[10px]
                                                                                                                                     bg-red-600 text-white px-3 py-1 rounded-full font-semibold">
                                    Dipinjam
                                </span>
                            @endif

                            <!-- IMAGE -->
                            <img src="{{ asset('assets/img/' . $images[$i % 2]) }}"
                                class="w-full h-44 sm:h-52 md:h-60 object-cover">

                            <!-- CONTENT -->
                            <div class="p-4">
                                <h4 class="book-title text-sm font-semibold truncate">
                                    {{ $titles[$i] }}
                                </h4>
                                <p class="book-author text-xs text-gray-500 mt-1">
                                    {{ $authors[$i] }}
                                </p>
                                <p class="book-year text-xs text-gray-400">
                                    {{ $year[$i] }}
                                </p>
                            </div>

                        </div>
                    </a>
                @endfor

            </div>

            <!-- PAGINATION -->
            <div id="pagination" class="flex justify-center items-center gap-2 mt-10"></div>
>>>>>>> Stashed changes

        <div id="noResults" class="hidden text-center py-12">
            <div class="text-gray-400 text-5xl mb-4">📚</div>
            <p class="text-gray-600 font-semibold">Tidak ada buku yang ditemukan</p>
            <p class="text-gray-500 text-sm mt-2">Coba ubah kata kunci pencarian Anda</p>
        </div>
    </section>

<<<<<<< Updated upstream
        <div id="pagination" class="flex justify-center items-center gap-2 mt-10">
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">‹</button>
            <button class="w-8 h-8 rounded-lg bg-green-600 text-white text-sm">1</button>
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">2</button>
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">3</button>
            <button class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">›</button>
        </div>
=======
    <!-- ================= SCRIPT ================= -->
    <script>
        const searchInput = document.getElementById('searchInput');
        const cards = Array.from(document.querySelectorAll('.book-card'));
        const pagination = document.getElementById('pagination');
        const totalInfo = document.getElementById('totalInfo');
>>>>>>> Stashed changes

        const perPage = 4;
        let currentPage = 1;
        let filteredCards = [...cards];

<<<<<<< Updated upstream
<!-- FOOTER -->
@include('pengunjung.footer')

<script>
// Sample book data (replace with actual data from backend)
// const allBooks = [
//     { id: 1, judul: 'Atomic Habits', penulis: 'James Clear', tahun: 2018, penerbit: 'Penguin', kategori: 'pengembangan', status: 'Tersedia', isbn: '978-0735211292' },
//     { id: 2, judul: 'Sapiens', penulis: 'Yuval Noah Harari', tahun: 2014, penerbit: 'Harper', kategori: 'sejarah', status: 'Tersedia', isbn: '978-0062316097' },
//     { id: 3, judul: 'Rich Dad Poor Dad', penulis: 'Robert Kiyosaki', tahun: 1997, penerbit: 'Warner Books', kategori: 'keuangan', status: 'Dipinjam', isbn: '978-1612680194' },
//     { id: 4, judul: 'The Psychology of Money', penulis: 'Morgan Housel', tahun: 2020, penerbit: 'Harriman', kategori: 'keuangan', status: 'Tersedia', isbn: '978-0857197689' },
//     { id: 5, judul: 'Deep Work', penulis: 'Cal Newport', tahun: 2016, penerbit: 'Grand Central', kategori: 'produktivitas', status: 'Tersedia', isbn: '978-1455586691' },
//     { id: 6, judul: 'Thinking Fast and Slow', penulis: 'Daniel Kahneman', tahun: 2011, penerbit: 'Farrar', kategori: 'psikologi', status: 'Tersedia', isbn: '978-0374533557' },
//     { id: 7, judul: 'Harry Potter', penulis: 'J.K. Rowling', tahun: 1997, penerbit: 'Bloomsbury', kategori: 'fiksi', status: 'Tersedia', isbn: '978-0439708180' },
//     { id: 8, judul: 'The Alchemist', penulis: 'Paulo Coelho', tahun: 1988, penerbit: 'HarperCollins', kategori: 'fiksi', status: 'Dipinjam', isbn: '978-0062315007' },
//     { id: 9, judul: 'Essentialism', penulis: 'Greg McKeown', tahun: 2014, penerbit: 'Crown', kategori: 'produktivitas', status: 'Tersedia', isbn: '978-0804137386' },
//     { id: 10, judul: 'Man Search for Meaning', penulis: 'Viktor Frankl', tahun: 1946, penerbit: 'Beacon Press', kategori: 'psikologi', status: 'Tersedia', isbn: '978-0807014271' },
//     { id: 11, judul: 'The Intelligent Investor', penulis: 'Benjamin Graham', tahun: 1949, penerbit: 'Harper Business', kategori: 'keuangan', status: 'Tersedia', isbn: '978-0060555665' },
//     { id: 12, judul: 'Homo Deus', penulis: 'Yuval Noah Harari', tahun: 2015, penerbit: 'Harper', kategori: 'sejarah', status: 'Tersedia', isbn: '978-0062464347' },
//     { id: 13, judul: '1984', penulis: 'George Orwell', tahun: 1949, penerbit: 'Secker & Warburg', kategori: 'fiksi', status: 'Tersedia', isbn: '978-0451524935' },
//     { id: 14, judul: 'The Power of Habit', penulis: 'Charles Duhigg', tahun: 2012, penerbit: 'Random House', kategori: 'pengembangan', status: 'Tersedia', isbn: '978-0812981605' },
//     { id: 15, judul: 'Think and Grow Rich', penulis: 'Napoleon Hill', tahun: 1937, penerbit: 'Ralston Society', kategori: 'keuangan', status: 'Dipinjam', isbn: '978-1585424337' },
//     { id: 16, judul: 'The 7 Habits', penulis: 'Stephen Covey', tahun: 1989, penerbit: 'Simon & Schuster', kategori: 'produktivitas', status: 'Tersedia', isbn: '978-0743269513' },
//     { id: 17, judul: 'Influence', penulis: 'Robert Cialdini', tahun: 1984, penerbit: 'Harper Business', kategori: 'psikologi', status: 'Tersedia', isbn: '978-0061241895' },
//     { id: 18, judul: 'The Hobbit', penulis: 'J.R.R. Tolkien', tahun: 1937, penerbit: 'Allen & Unwin', kategori: 'fiksi', status: 'Tersedia', isbn: '978-0547928227' },
//     { id: 19, judul: 'A Brief History of Time', penulis: 'Stephen Hawking', tahun: 1988, penerbit: 'Bantam', kategori: 'sejarah', status: 'Dipinjam', isbn: '978-0553380163' },
//     { id: 20, judul: 'The Lean Startup', penulis: 'Eric Ries', tahun: 2011, penerbit: 'Crown Business', kategori: 'produktivitas', status: 'Tersedia', isbn: '978-0307887894' }
// ];

const allBooks = @json($buku);

let currentBooks = [...allBooks];
let currentCategory = 'all';
let searchQuery = '';
let currentPage = 1;
const booksPerPage = 8;

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    renderBooks(currentBooks);
    setupEventListeners();
});

function renderBooks(books) {
    const grid = document.getElementById('bookGrid');
    const noResults = document.getElementById('noResults');
    const bookCount = document.getElementById('bookCount');
    
    bookCount.textContent = books.length;
    
    if (books.length === 0) {
        grid.classList.add('hidden');
        noResults.classList.remove('hidden');
        document.getElementById('pagination').classList.add('hidden');
        return;
    }
    
    grid.classList.remove('hidden');
    noResults.classList.add('hidden');
    
    // Calculate pagination
    const totalPages = Math.ceil(books.length / booksPerPage);
    const startIndex = (currentPage - 1) * booksPerPage;
    const endIndex = startIndex + booksPerPage;
    const paginatedBooks = books.slice(startIndex, endIndex);
    const assetBase = "{{ asset('assets/img/books') }}";
    const detailRoute = "{{ route('buku.show', ':id') }}";
    
    grid.innerHTML = paginatedBooks.map(book => `
        <a href="${detailRoute.replace(':id', book.id_buku)}" class="bg-white rounded-xl shadow hover:shadow-md transition p-3 flex flex-col">
            <div class="rounded-xl overflow-hidden bg-gradient-to-br from-green-400 to-green-600">
               <img src="${assetBase}/${book.gambar}" alt="${book.judul}" class="w-full h-40 object-cover">
            </div>

            ${book.status_ketersediaan === 'Tersedia' 
                ? '<span class="mt-3 inline-block text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full w-fit">Tersedia</span>'
                : '<span class="mt-3 inline-block text-xs bg-red-100 text-red-700 px-3 py-1 rounded-full w-fit">Dipinjam</span>'
            }

            <h4 class="font-semibold text-sm mt-2">${book.judul}</h4>
            <p class="text-xs text-gray-500">${book.penulis}</p>
            <p class="text-xs text-gray-400">${book.tahun_terbit}</p>

            <span class="mt-2 text-[10px] bg-gray-100 px-2 py-1 rounded-full text-gray-600 w-fit">
                ${book.kategori}
            </span>
        </a>
    `).join('');
    
    renderPagination(totalPages);
}

function filterBooks() {
    let filtered = [...allBooks];
    
    // Filter by category
    if (currentCategory !== 'all') {
        filtered = filtered.filter(book => book.kategori === currentCategory);
    }
    
    // Filter by search query
    if (searchQuery) {
        const query = searchQuery.toLowerCase();
        filtered = filtered.filter(book => 
            book.judul.toLowerCase().includes(query) ||
            book.penulis.toLowerCase().includes(query) ||
            book.isbn.includes(query)
        );
    }
    
    currentBooks = filtered;
    currentPage = 1; // Reset to first page
    renderBooks(currentBooks);
}

function renderPagination(totalPages) {
    const pagination = document.getElementById('pagination');
    
    if (totalPages <= 1) {
        pagination.classList.add('hidden');
        return;
    }
    
    pagination.classList.remove('hidden');
    
    let pages = '';
    
    // Previous button
    pages += `
        <button onclick="changePage(${currentPage - 1})" 
                ${currentPage === 1 ? 'disabled class="w-8 h-8 rounded-lg border bg-gray-100 text-gray-400 text-sm cursor-not-allowed"' : 'class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm"'}>
            ‹
        </button>
    `;
    
    // Page numbers
    const maxVisible = 5;
    let startPage = Math.max(1, currentPage - Math.floor(maxVisible / 2));
    let endPage = Math.min(totalPages, startPage + maxVisible - 1);
    
    if (endPage - startPage < maxVisible - 1) {
        startPage = Math.max(1, endPage - maxVisible + 1);
    }
    
    // First page
    if (startPage > 1) {
        pages += `
            <button onclick="changePage(1)" class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">
                1
            </button>
        `;
        if (startPage > 2) {
            pages += `<span class="px-2 text-gray-500">...</span>`;
        }
    }
    
    // Page range
    for (let i = startPage; i <= endPage; i++) {
        pages += `
            <button onclick="changePage(${i})" 
                    class="w-8 h-8 rounded-lg ${i === currentPage ? 'bg-green-600 text-white' : 'border bg-white hover:bg-gray-100'} text-sm">
                ${i}
            </button>
        `;
    }
    
    // Last page
    if (endPage < totalPages) {
        if (endPage < totalPages - 1) {
            pages += `<span class="px-2 text-gray-500">...</span>`;
        }
        pages += `
            <button onclick="changePage(${totalPages})" class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm">
                ${totalPages}
            </button>
        `;
    }
    
    // Next button
    pages += `
        <button onclick="changePage(${currentPage + 1})" 
                ${currentPage === totalPages ? 'disabled class="w-8 h-8 rounded-lg border bg-gray-100 text-gray-400 text-sm cursor-not-allowed"' : 'class="w-8 h-8 rounded-lg border bg-white hover:bg-gray-100 text-sm"'}>
            ›
        </button>
    `;
    
    pagination.innerHTML = pages;
}

function changePage(page) {
    const totalPages = Math.ceil(currentBooks.length / booksPerPage);
    if (page < 1 || page > totalPages) return;
    
    currentPage = page;
    renderBooks(currentBooks);
    
    // Scroll to top of book list
    document.querySelector('section.pb-14').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function setupEventListeners() {
    // Search input - live search
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', (e) => {
        searchQuery = e.target.value.trim();
        filterBooks();
    });
    
    // Search button
    document.getElementById('searchBtn').addEventListener('click', () => {
        searchQuery = searchInput.value.trim();
        filterBooks();
    });
    
    // Enter key on search
    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            searchQuery = searchInput.value.trim();
            filterBooks();
        }
    });
    
    // Reset button
    document.getElementById('resetBtn').addEventListener('click', () => {
        searchInput.value = '';
        searchQuery = '';
        currentCategory = 'all';
        
        // Reset category buttons
        document.querySelectorAll('.category-btn').forEach(btn => {
            if (btn.dataset.category === 'all') {
                btn.classList.remove('bg-gray-100', 'hover:bg-gray-200');
                btn.classList.add('bg-green-600', 'text-white');
            } else {
                btn.classList.remove('bg-green-600', 'text-white');
                btn.classList.add('bg-gray-100', 'hover:bg-gray-200');
            }
        });
        
        filterBooks();
    });
    
    // Category buttons
    document.querySelectorAll('.category-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            currentCategory = btn.dataset.category;
            
            // Update button styles
            document.querySelectorAll('.category-btn').forEach(b => {
                b.classList.remove('bg-green-600', 'text-white');
                b.classList.add('bg-gray-100', 'hover:bg-gray-200');
            });
            btn.classList.remove('bg-gray-100', 'hover:bg-gray-200');
            btn.classList.add('bg-green-600', 'text-white');
            
            filterBooks();
        });
    });
    
    // Menu toggle
    document.getElementById('menuBtn').addEventListener('click', () => {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
    
    // Desktop dropdown
    const dropdownBtn = document.getElementById('dropdownBtn');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const dropdownIcon = document.getElementById('dropdownIcon');

    dropdownBtn.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
        dropdownIcon.classList.toggle('rotate-180');
    });

    document.addEventListener('click', (e) => {
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
            dropdownIcon.classList.remove('rotate-180');
        }
    });
    
    // Mobile dropdown
    document.getElementById('mobileDropdownBtn').addEventListener('click', () => {
        document.getElementById('mobileDropdownMenu').classList.toggle('hidden');
        document.getElementById('mobileDropdownIcon').classList.toggle('rotate-180');
    });
}
</script>

</body>
</html>
=======
        function renderPage() {
            const start = (currentPage - 1) * perPage;
            const end = start + perPage;

            cards.forEach(card => card.style.display = 'none');

            filteredCards.slice(start, end).forEach(card => {
                card.style.display = 'block';
            });

            totalInfo.innerText = `Menampilkan ${filteredCards.length} buku`;
            renderPagination();
        }

        function renderPagination() {
            pagination.innerHTML = '';
            const totalPages = Math.ceil(filteredCards.length / perPage);

            if (totalPages <= 1) return;

            const prev = document.createElement('button');
            prev.innerText = '‹';
            prev.className = 'w-8 h-8 rounded-lg border bg-white hover:bg-gray-100';
            prev.onclick = () => {
                if (currentPage > 1) {
                    currentPage--;
                    renderPage();
                }
            };
            pagination.appendChild(prev);

            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement('button');
                btn.innerText = i;
                btn.className = `w-8 h-8 rounded-lg text-sm ${i === currentPage
                    ? 'bg-greens-600 text-white'
                    : 'border bg-white hover:bg-gray-100'
                    }`;
                btn.onclick = () => {
                    currentPage = i;
                    renderPage();
                };
                pagination.appendChild(btn);
            }

            const next = document.createElement('button');
            next.innerText = '›';
            next.className = 'w-8 h-8 rounded-lg border bg-white hover:bg-gray-100';
            next.onclick = () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    renderPage();
                }
            };
            pagination.appendChild(next);
        }

        searchInput.addEventListener('keyup', function () {
            const keyword = this.value.toLowerCase();

            filteredCards = cards.filter(card =>
                card.innerText.toLowerCase().includes(keyword)
            );

            currentPage = 1;
            renderPage();
        });

        renderPage();
    </script>

@endsection
>>>>>>> Stashed changes
