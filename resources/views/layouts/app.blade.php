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
    <link href="{{ asset('css/ekko-lightbox/5.3.0/ekko-lightbox.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light p-0 pt-2 fromTop">
                <!-- logo -->
                <div id="logo" class="mr-auto ml-lg-auto ml-3">
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
                    <div class="bg-secondary line1"></div>
                    <div class="bg-secondary line2"></div>
                    <div class="bg-secondary line3"></div>
                </button>
                <!-- menu -->
                <div class="collapse navbar-collapse align-items-center p-lg-0 my-0 pl-2 pr-5 pl-4 w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto mr-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link menu1" href="{{ url('/') }}">Галерея</a>
                        </li>
                        <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu2" href="{{ url('/') }}">Альбомы</a>
                        </li>
                        <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu3" href="{{ url('/contacts') }}">Контакты</a>
                        </li>
                        <!-- <li class="nav-item"><span class="nav-link link-separator">•</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu4" href="{{ url('/') }}">Отзывы</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>

        <main class="py-0">
            @yield('content')
        </main>

        <footer>
        <div class="container bg-white text-center">
            <div class="row align-items-center">
                <div class="col mt-4 mb-3 pt-3 border-top">
                    <div class="text-muted">
                    <a href="https://moonabyss.com/" target="_blank" class="text-muted">Developed by <span>moonabyss</span> 2019</a>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/ekko-lightbox/5.3.0/ekko-lightbox.min.js') }}"></script>
    <script>
        $(function(){
            @yield('last_scripts')
        });
    </script>
</body>
</html>
