<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <link rel="shortcut icon" type="png" href="images/icon/favicon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <title>{{ $title ?? 'Page Title' }}</title>
    <meta name="desciption" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/style.css') }}">
    <script type="text/javascript" src="{{ asset('front-end/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
        $(window).on('scroll', function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <!-- Navigation Bar -->
    <header id="header" style="height: auto">
        <nav>
            <div class="logo" style="height: 20px">
                <img src="{{ asset('logo.png') }}" alt="logo" style="height: 100%">
            </div>
            <ul>
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a wire:navigate href="/">Beranda</a>
                </li>
                <li class="{{ request()->routeIs('pembelajaran') ? 'active' : '' }}"><a wire:navigate
                        href="{{ route('pembelajaran') }}">Pembelajaran</a></li>
                <li class="{{ request()->routeIs('tabel-aksara') ? 'active' : '' }}"><a wire:navigate
                        href="{{ route('tabel-aksara') }}">Tabel Aksara</a></li>
                <li class="{{ request()->routeIs('video') ? 'active' : '' }}"><a wire:navigate
                        href="{{ route('daftar-video-pembelajaran') }}">Video</a></li>
                <li class="{{ request()->routeIs('tentang') ? 'active' : '' }}"><a wire:navigate
                        href="{{ route('tentang') }}">Tentang</a></li>
            </ul>
            <a class="get-started" href="login.html">Masuk</a>
            <img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
        </nav>

        @stack('header-content')

        <div class="side-menu" id="side-menu">
            <div class="close" onclick="sideMenu(1)"><img src="/front-end/images/icon/close.png" alt=""></div>
            <div class="user">
                <img src="/front-end/images/creator/roshan.jpeg" alt="Username">
                <p>Roshan</p>
            </div>
            <ul>
                <li><a class="active" href="">Beranda</a></li>
                <li><a href="#portfolio_section">Pembelajaran</a></li>
                <li><a href="#team_section">Tabel Aksara</a></li>
                <li><a href="#services_section">Video</a></li>
                <li><a href="#contactus_section">Tentang</a></li>
            </ul>
        </div>

    </header>

    {{ $slot }}

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="left-col">
                <img src="{{ asset('/umi.png') }}" style="width: 200px;">
                <div class="logo"></div>
                <div class="social-media">
                    <a href="#"><img src="/front-end/images/icon\fb.png"></a>
                    <a href="#"><img src="/front-end/images/icon\insta.png"></a>
                    <a href="#"><img src="/front-end/images/icon\tt.png"></a>
                    <a href="#"><img src="/front-end/images/icon\ytube.png"></a>
                    <a href="#"><img src="/front-end/images/icon\linkedin.png"></a>
                </div><br><br>
                <p class="rights-text">Copyright © 2024</p>
                <br>
                <p> Universitas Muslim Indonesia, Jl. Urip Sumohardjo, Kecamatan Makassar, Kota Makassar, Sulawesi
                    Selatan 90231 <br></p>
            </div>
        </div>
    </footer>

</body>

</html>