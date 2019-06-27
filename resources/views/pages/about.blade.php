@extends('layouts.app')

@section('content')
<!--ABOUT AREA-->
<section class="about-area section-padding">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="area-title">
                    <h2>Our <span>Story</span></h2>
                </div>
                <div class="about-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12 hidden-xs">
                <div class="about-video">
                    <img src="{{ asset('front/img/about/about_circle.png') }}" alt="">
                    <a href="https://www.youtube.com/watch?v=H6Yjc37axBY" class="about-video-button" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT AREA END-->

<!--COUNTER AREA-->
<div class="counter-area section-padding">
    <div class="count-area-bg"></div>
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-counter text-center">
                    <div class="counter-icon"><i class="fa fa-heart-o"></i></div>
                    <h3 class="counter">25.000</h3>
                    <p>Daily Meal</p>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-counter text-center">
                    <div class="counter-icon"><i class="fa fa-smile-o"></i></div>
                    <h3 class="counter">56.000</h3>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-counter text-center">
                    <div class="counter-icon"><i class="fa fa-cutlery"></i></div>
                    <h3 class="counter">66.000</h3>
                    <p>Percel Today</p>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-counter text-center">
                    <div class="counter-icon"><i class="fa fa-map-o"></i></div>
                    <h3 class="counter">78.000</h3>
                    <p>online store</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--COUNTER AREA END-->

<!--TEAM AREA-->
<section class="team-area section-padding">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>Our chefs</h2>
                    <h3>Awesome chefs</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 team-slider">
                <div class="single-team-member text-center">
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
                </div>
            </div>
        </div>
    </div>
</section>
<!--TEAM AREA END-->

<!--TESTMONIAL AREA-->
<section class="testmonial-area section-padding">
    <div class="testmonial-area-bg"></div>
    <div class="container-fluid wow fadeIn">
        <div class="row testmonial-slider">
            <div class="col-md-offset-2 col-lg-offset-2 col-lg-8  col-md-8 col-sm-12 col-xs-12">
                <div class="single-testmonail text-center">
                    <div class="quate-icon"><i class="fa fa-quote-right"></i></div>
                    <p>Nothing in life is to be feared, it's to be understood. Now is the time to understand more, so that we may fear less – Marie Curie</p>
                    <div class="testmonial-member-name-title">
                        <h4>John Doe</h4>
                        <p>Creative Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-offset-2 col-lg-offset-2 col-lg-8  col-md-8 col-sm-12 col-xs-12">
                <div class="single-testmonail text-center">
                    <div class="quate-icon"><i class="fa fa-quote-right"></i></div>
                    <p>Nothing in life is to be feared, it's to be understood. Now is the time to understand more, so that we may fear less – Marie Curie</p>
                    <div class="testmonial-member-name-title">
                        <h4>John Doe</h4>
                        <p>Creative Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-offset-2 col-lg-offset-2 col-lg-8  col-md-8 col-sm-12 col-xs-12">
                <div class="single-testmonail text-center">
                    <div class="quate-icon"><i class="fa fa-quote-right"></i></div>
                    <p>Nothing in life is to be feared, it's to be understood. Now is the time to understand more, so that we may fear less – Marie Curie</p>
                    <div class="testmonial-member-name-title">
                        <h4>John Doe</h4>
                        <p>Creative Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--TESTMONIAL AREA END-->
@endsection

@section('banner')
<!--PAGE BARNER AREA-->
<div class="page-barner-area">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="barner-text">
                    <h1>About <span>Us</span></h1>
                    <ul class="page-location">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="active"><a href="{{ route('about') }}">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--PAGE BARNER AREA END-->
@endsection

@section('headerClass', 'single-page about-page')

@include('shared.test')

@push('css')
<style type="text/css">
    .about-content p { color: aquamarine; }
</style>
@endpush