@extends('layouts.app')

@section('content')
    <!--ABOUT AREA-->
    <section class="about-area section-padding">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="area-title">
                        <h2>Our <span>Story</span></h2>
                    </div>
                    <div class="about-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        <a href="#" class="read-more">Read more</a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="about-img">
                                <img src="{{ asset('front/img/about/about_one.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="about-img">
                                <img src="{{ asset('front/img/about/about_two.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--PROMOTIONS AREA-->
    <section class="promotions-area section-padding">
        <div class="promotion-area-bg"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Specials</h2>
                        <h3>Specials Promotion</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($specialMenus as $menu)
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="single-promotions text-center">
                            <div class="promotions-img">
                                <img src="{{ asset('front/img/promotions/promo_1.jpg') }}" alt="">
                                <div class="pakage-rate">
                                    <p><span>Rs. {{ $menu->price }}</span></p>
                                </div>
                            </div>
                            <div class="promotions-details">
                                <h4>Special {{ $menu->name }}</h4>
                                <a href="#" class="read-more">Order now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-promotions text-center">
                        <div class="promotions-img">
                            <img src="{{ asset('front/img/promotions/promo_1.jpg') }}" alt="">
                            <div class="pakage-rate">
                                <p>Form <span>$15</span></p>
                            </div>
                        </div>
                        <div class="promotions-details">
                            <h4>Special Breakfast</h4>
                            <a href="#" class="read-more">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-promotions text-center">
                        <div class="promotions-img">
                            <img src="{{ asset('front/img/promotions/promo_2.jpg') }}" alt="">
                            <div class="pakage-rate">
                                <p>Form <span>$25</span></p>
                            </div>
                        </div>
                        <div class="promotions-details">
                            <h4>Special Lunch</h4>
                            <a href="#" class="read-more">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-promotions text-center">
                        <div class="promotions-img">
                            <img src="{{ asset('front/img/promotions/promo_3.jpg') }}" alt="">
                            <div class="pakage-rate">
                                <p>Form <span>$35</span></p>
                            </div>
                        </div>
                        <div class="promotions-details">
                            <h4>Special Dinner</h4>
                            <a href="#" class="read-more">Order now</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--PROMOTIONS AREA END-->

    <!--MENUS AREA-->
    <section class="menus-area section-padding" id="menu">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Delicius</h2>
                        <h3>Today’s menu</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="food-menu-list-menu">
                        <ul>
                            <li class="filter active" data-filter="all">All</li>
                            @foreach($categories as $category)
                                {{-- @dump($category->getOriginal('name')) --}}
                                <li class="filter" data-filter=".cat-{{ strtolower(str_replace(' ','-', $category->name)) }}">{{ $category->name }}</li>
                            @endforeach
                            {{-- <li class="filter" data-filter=".breakfast">Breakfast</li>
                            <li class="filter" data-filter=".lunch">Lunch</li>
                            <li class="filter" data-filter=".dinner">Dinner</li>
                            <li class="filter" data-filter=".coffee">Coffe</li>
                            <li class="filter" data-filter=".snacks">Snacks</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row food-menu-list">
                @foreach($menus as $menu)
                    <div class="mix col-md-3 col-lg-3 col-sm-6 col-xs-12 single-menu cat-{{ strtolower(str_replace(' ','-', $menu->category->name)) }}">
                        <div class="food-menu-img">
                            <a href="{{ asset('front/img/menu/menu_1.jpg') }}" class="menu-popup" data-effect="mfp-zoom-out"><img src="{{ asset('front/img/menu/menu_1.jpg') }}" alt=""></a>
                        </div>
                        <div class="food-menu-details">
                            <h4>{{ $menu->name }}</h4>
                            <p class="menu-price">Rs. {{ $menu->price }}</p>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="mix col-md-3 col-lg-3 col-sm-6 col-xs-12 single-menu breakfast coffee snacks">
                    <div class="food-menu-img">
                        <a href="{{ asset('front/img/menu/menu_1.jpg') }}" class="menu-popup" data-effect="mfp-zoom-out"><img src="{{ asset('front/img/menu/menu_1.jpg') }}" alt=""></a>
                    </div>
                    <div class="food-menu-details">
                        <h4>Cupcake Recipes</h4>
                        <p class="menu-price">$120.00</p>
                    </div>
                </div>
                <div class="mix col-md-3 col-lg-3 col-sm-6 col-xs-12 single-menu dinner snacks">
                    <div class="food-menu-img">
                        <a href="{{ asset('front/img/menu/menu_2.jpg') }}" class="menu-popup" data-effect="mfp-zoom-out"><img src="{{ asset('front/img/menu/menu_2.jpg') }}" alt=""></a>
                    </div>
                    <div class="food-menu-details">
                        <h4>Cupcake Recipes</h4>
                        <p class="menu-price">$120.00</p>
                    </div>
                </div>
                <div class="mix col-md-3 col-lg-3 col-sm-6 col-xs-12 single-menu breakfast">
                    <div class="food-menu-img">
                        <a href="{{ asset('front/img/menu/menu_3.jpg') }}" class="menu-popup" data-effect="mfp-zoom-out"><img src="{{ asset('front/img/menu/menu_3.jpg') }}" alt=""></a>
                    </div>
                    <div class="food-menu-details">
                        <h4>Cupcake Recipes</h4>
                        <p class="menu-price">$120.00</p>
                    </div>
                </div>
                <div class="mix col-md-3 col-lg-3 col-sm-6 col-xs-12 single-menu dinner lunch breakfast snacks">
                    <div class="food-menu-img">
                        <a href="{{ asset('front/img/menu/menu_4.jpg') }}" class="menu-popup" data-effect="mfp-zoom-out"><img src="{{ asset('front/img/menu/menu_4.jpg') }}" alt=""></a>
                    </div>
                    <div class="food-menu-details">
                        <h4>Cupcake Recipes</h4>
                        <p class="menu-price">$120.00</p>
                    </div>
                </div>
                <div class="mix col-md-3 col-lg-3 col-sm-6 col-xs-12 single-menu lunch coffee">
                    <div class="food-menu-img">
                        <a href="{{ asset('front/img/menu/menu_5.jpg') }}" class="menu-popup" data-effect="mfp-zoom-out"><img src="{{ asset('front/img/menu/menu_5.jpg') }}" alt=""></a>
                    </div>
                    <div class="food-menu-details">
                        <h4>Cupcake Recipes</h4>
                        <p class="menu-price">$120.00</p>
                    </div>
                </div>
                <div class="mix col-md-3 col-lg-3 col-sm-6 col-xs-12 single-menu breakfast">
                    <div class="food-menu-img">
                        <a href="{{ asset('front/img/menu/menu_6.jpg') }}" class="menu-popup" data-effect="mfp-zoom-out"><img src="{{ asset('front/img/menu/menu_6.jpg') }}" alt=""></a>
                    </div>
                    <div class="food-menu-details">
                        <h4>Cupcake Recipes</h4>
                        <p class="menu-price">$120.00</p>
                    </div>
                </div>
                <div class="mix col-md-3 col-lg-3 col-sm-6 col-xs-12 single-menu lunch dinner">
                    <div class="food-menu-img">
                        <a href="{{ asset('front/img/menu/menu_7.jpg') }}" class="menu-popup" data-effect="mfp-zoom-out"><img src="{{ asset('front/img/menu/menu_7.jpg') }}" alt=""></a>
                    </div>
                    <div class="food-menu-details">
                        <h4>Cupcake Recipes</h4>
                        <p class="menu-price">$120.00</p>
                    </div>
                </div>
                <div class="mix col-md-3 col-lg-3 col-sm-6 col-xs-12 single-menu lunch dinner">
                    <div class="food-menu-img">
                        <a href="{{ asset('front/img/menu/menu_8.jpg') }}" class="menu-popup" data-effect="mfp-zoom-out"><img src="{{ asset('front/img/menu/menu_8.jpg') }}" alt=""></a>
                    </div>
                    <div class="food-menu-details">
                        <h4>Cupcake Recipes</h4>
                        <p class="menu-price">$120.00</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--MENUS AREA END-->

    <!--TEAM AREA-->
    <section class="team-area section-padding">
        <div class="container wow fadeIn">
            <div class="row"> 
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Delicius</h2>
                        <h3>Awesome chefs</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 team-slider">
                    @foreach($staff as $st)
                        <div class="single-team-member text-center">
                            <div class="team-member-img ">
                                <img src="{{ asset('front/img/team/team-1.jpg') }}" alt="">
                            </div>
                            <div class="member-details">
                                <h3>{{ $st->name }}</h3>
                                <p>{{ $st->email }}</p>
                                <p>{{ $st->mobile }}</p>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="{{ asset('front/img/team/team-1.jpg') }}" alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Mark Angelila</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="{{ asset('front/img/team/team-2.jpg') }}" alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Angel Meskat</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="{{ asset('front/img/team/team-3.jpg') }}" alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Jon Doe</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="{{ asset('front/img/team/team-4.jpg') }}" alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Angel Di Maria</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="{{ asset('front/img/team/team-5.jpg') }}" alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Park Ji Sung</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--TEAM AREA END-->
    
    <!--INSTAGRAM FEED-->
    <section class="instagram-area section-padding">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h4>Follow us on Instagram <a href="#">@OWLTheme</a></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="instagram-feed-content text-center">
                        <ul class="instagram-feed"></ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--INSTAGRAM FEED END-->
@endsection

@section('banner')
<!--HHOME SLIDER AREA-->
<div class="slider-area">
    <div class="pogoSlider">
        <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background:url({{ asset('front/img/slider/slide_1.jpg') }}) no-repeat scroll 0 0 / cover;">
            <h2 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="700">Welcome to</h2>
            <h1 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500"><span>OWL</span> Cafe & Restaurant</h1>
            <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="reservation.html">Reservation Now</a></h3>
        </div>
        <div class="pogoSlider-slide" data-transition="fade" style="background:url({{ asset('front/img/slider/slide_2.jpg') }}) no-repeat scroll 0 0 / cover;">
            <h2 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="700">Our menus</h2>
            <h1 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500">See What's <span>new</span> today</h1>
            <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="#menu">Todays Menu</a></h3>
        </div>
        <div class="pogoSlider-slide" data-transition="fade" style="background:url({{ asset('front/img/slider/slide_3.jpg') }}) no-repeat scroll 0 0 / cover;">
            <h2 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="700">Get ready</h2>
            <h1 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500">to <span>Join</span> with us</h1>
            <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="reservation.html">Book A Table</a></h3>
        </div>
    </div>
</div>
<!--HOME SLIDER AREA END-->
@endsection