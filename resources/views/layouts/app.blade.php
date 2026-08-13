<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'LITUS Maldives — leading inter-atoll freight and logistics company in the Republic of Maldives.')">
    <title>@yield('title', 'LITUS Maldives') — Logistics Beyond Expectation</title>
    <link rel="icon" href="{{ asset('images/favicon/litus-maldives-favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon/litus-maldives-favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative min-h-screen overflow-x-clip bg-litus-bg text-litus-navy">
    <x-navbar />

    <main class="relative overflow-x-clip">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
