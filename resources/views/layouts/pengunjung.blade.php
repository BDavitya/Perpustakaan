<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BookTech')</title>

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
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    {{-- HEADER --}}
    @include('partials.headerPengunjung')

    {{-- SPACER (karena header fixed) --}}
    <div class="h-20"></div>

    {{-- MAIN CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

    @stack('scripts')
</body>

</html>