<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'HIMTI - Teknik Informatika')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Common CSS -->
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    
    <!-- Page-specific CSS -->
    @if(request()->is('about') || request()->is('/'))
        <link href="{{ asset('css/about/style.css') }}" rel="stylesheet">
    @elseif(request()->is('department/ekonomi-kreatif'))
        <link href="{{ asset('css/depart/style.css') }}" rel="stylesheet">
    @elseif(request()->is('coming-soon') || request()->is('news') || request()->is('sop/*') || request()->is('features/*') || request()->is('contact') || request()->is('events') || request()->is('gallery') || request()->is('department/*'))
        <link href="{{ asset('css/coming-soon.css') }}" rel="stylesheet">
    @endif
</head>
<body>
    @yield('content')

    <!-- Back to top button -->
    <div id="back-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
        </svg>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    
    <!-- Extra JS -->
    @yield('extra-js')
</body>
</html>
