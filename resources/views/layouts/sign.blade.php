<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light shadow-lg">
            <a class="navbar-brand text-dark p-2" href="{{ url('/') }}">
                Pengaduan Masyarakat
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            </ul>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="mt-5">
                <hr>
                <div class="text-center">
                    <p class="italic text-secondary">© M Fikri Fakhrezi 2021 • All rights reserved</p>
                </div>
            </div>
        </footer>
    </div>
    
    @yield('js')
</body>
</html>
