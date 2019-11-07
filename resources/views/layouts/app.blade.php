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
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
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
                <div class="collapse navbar-collapse align-items-center my-0" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Gallery</a>
                        </li>
                        <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Wedding Stories</a>
                        </li>
                        <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Contact</a>
                        </li>
                        <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Feedback</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container flex-column">
                <div class="row justify-content-center">
                    <div class="mx-auto text-center">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('img/logo.png') }}">
                        </a>
                    </div>
                </div>
                <button id="menu-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="row">
                    <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Gallery</a>
                            </li>
                            <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Wedding Stories</a>
                            </li>
                            <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Contact</a>
                            </li>
                            <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Feedback</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav> -->

        <main class="py-lg-4 py-0">
            @yield('content')
        </main>
    </div>
</body>
</html>
