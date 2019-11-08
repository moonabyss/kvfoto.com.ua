<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KVfoto') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- Scripts -->
    @yield('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />
    @yield('styles')
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light pb-0 fromTop">
                <!-- logo -->
                <div id="logo" class="mr-auto ml-lg-auto">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png') }}" height=75>
                    </a>
                </div>
                <!-- button -->
                <button id="menu-toggler" class="navbar-toggler nav-button" type="button" 
                        data-toggle="collapse" data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" 
                        aria-label="{{ __('Toggle navigation') }}"
                        onclick="this.blur();">
                    {{-- <span class="navbar-toggler-icon nav-button"></span> --}}
                    <div class="bg-secondary line1"></div>
                    <div class="bg-secondary line2"></div>
                    <div class="bg-secondary line3"></div>
                </button>
                <!-- menu -->
                <div class="collapse navbar-collapse align-items-center p-lg-0 my-0 pl-2 pr-5 pb-4 ml-n1" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link menu1" href="{{ url('/') }}">Gallery</a>
                        </li>
                        <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu2" href="{{ url('/') }}">Wedding Stories</a>
                        </li>
                        <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu3" href="{{ url('/') }}">Contact</a>
                        </li>
                        <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu4" href="{{ url('/') }}">Feedback</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="py-0">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha256-Y1rRlwTzT5K5hhCBfAFWABD4cU13QGuRN6P5apfWzVs=" crossorigin="anonymous"></script>
    <script>
        @yield('last_scripts')
    </script>
</body>
</html>
