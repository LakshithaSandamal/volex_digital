<header class="header-one">
    <div class="topbar-area fix hidden-xs">
        <div class="container">
            <div class="row">
                <div class=" col-md-9 col-sm-9">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="mailto:info@volexdigital.com"><i class="fa fa-envelope"></i>info@volexdigital.com</a></li>
                            <li><a href="tel:+94714921477"><i class="fa fa-phone-square"></i>+94 714 921 477</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="top-social">
                        <ul>
                            <li><a target="_blank" href="https://web.facebook.com/volexdigitalsoftware"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/volex-digital/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/VolexDigital"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/volexdigital/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticker" class="header-area header-area-3 hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <a class="navbar-brand page-scroll white-logo" href="{{ route('portfolio') }}">
                            <img src="{{ asset('img/logo/logo2.png') }}" alt="">
                        </a>
                        <a class="navbar-brand page-scroll black-logo" href="{{ route('portfolio') }}">
                            <img src="{{ asset('img/logo/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="header-right-link">
                        <a class="s-menu" href="#">It Consultant</a>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                            <div class="main-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ route('portfolio') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('team') }}">Team</a></li>
                                    <li><a href="{{ route('contact') }}">contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('img/logo/logo.png') }}" alt="" /></a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                <li><a href="{{ route('portfolio') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('team') }}">Team</a></li>
                                <li><a href="{{ route('contact') }}">contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
