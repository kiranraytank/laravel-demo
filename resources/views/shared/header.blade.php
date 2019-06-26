<!--START TOP AREA-->

<header class="top-area @yield('headerClass')" id="home">
    @if(Route::currentRouteName() != 'home')
        <div class="page-barner-bg"></div>
    @endif
    <div class="header-top-area">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-6 col-sm-8">
                        <div class="call-to-action">
                            <p><i class="fa fa-envelope-o"></i>Email: <a href="#">info@Owl Restaurant.com</a></p>
                            <p><i class="fa fa-phone"></i>Telephone: <a href="#">+1 800 234 5678</a></p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 col-sm-4">
                        <div class="book-table-popup">
                            <a href="reservation.html">Book a table</a>
                        </div>
                        <div class="top-social-bookmark">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-feed"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--MAINMENU AREA-->
        <div class="mainmenu-area" id="mainmenu-area">
            <div class="mainmenu-area-bg"></div>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html" class="navbar-brand"><img src="{{ asset('front/img/main_logo_black.png') }}" alt="logo"></a>
                        <a href="index.html" class="navbar-brand white"><img src="{{ asset('front/img/main_logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                        <div class="search-form-area">
                            <div class="search-form-overlay"></div>
                            <a class="search-form-trigger" href="#search-form">Search<span></span></a>
                            <div id="search-form" class="search-form">
                                <form>
                                    <input type="search" placeholder="Search...">
                                </form>
                            </div>
                        </div>
                        <ul id="nav" class="nav navbar-nav cl-effect-11">
                            {{-- <li><a href="{{ url('/') }}">Home</a></li> --}}
                            <li @if(Route::is('home')) class="active" @endif><a href="{{ route('home') }}">Home</a></li>
                            <!-- <li><a href="{{ url('about') }}">about us</a></li> -->
                            <li @if(Route::is('about')) class="active" @endif><a href="{{ route('about') }}">about us</a></li>
                            <li><a href="reservation.html">Reservation</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="menu.html">Menu</a></li>
                            <li><a href="blog.html">blog</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--END MAINMENU AREA END-->
    </div>

    @yield('banner')

</header>
<!--END TOP AREA-->

@section('css')
<style type="text/css">
    .barner-text h1 { color: aqua;  }
</style>
@endsection