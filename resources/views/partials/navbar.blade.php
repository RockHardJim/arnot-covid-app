<div class="mobile_canvus_menu">
    <div class="close_btn">
        <img src="assets/images/icon/close-dark.png" alt="">
    </div>
    <div class="close_btn">
        <img src="assets/images/icon/close-dark.png" alt="">
    </div>
    <div class="menu_part_lux">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-2x.png') }}"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                    <li class="active"><a href="{{ route('tracker') }}">Tracker</a></li>
                    @auth
                    <li class="active"><a href="{{ route('checkin', 1) }}">Check-in</a></li>
                    @endauth
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="checker_btn">
                        @guest
                            <a href="{{ route('login') }}"><i class="linearicons-pulse"></i>Account</a>
                        @endguest
                        @auth
                            <a href="{{ route('dashboard') }}"><i class="linearicons-pulse"></i>Dashboard</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="menu_btm">
        <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Symptom Checker</a>
    </div>
</div>
<!--================End Mobile Canvus Menu Area =================-->

<header class="header_area">
    <ul class="nav menu_social flex-column">
        <li>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </li>
        <li>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
    </ul>
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-2x.png') }}" height="100" width="120"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li class="active"><a href="{{ route('tracker') }}">Tracker</a></li>

                        <li class="active">
                            <a href="#" role="button" aria-haspopup="true"
                               aria-expanded="false">Announcements
                            </a>
                        </li>
                        <li class="active"><a href="{{ route('checkin', 1) }}">Check-in</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="checker_btn">
                            @guest
                            <a href="{{ route('login') }}"><i class="linearicons-pulse"></i>Account</a>
                            @endguest
                            @auth
                            <a href="{{ route('dashboard') }}"><i class="linearicons-pulse"></i>Dashboard</a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>