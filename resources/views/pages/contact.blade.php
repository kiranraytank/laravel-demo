@extends('layouts.app')

@section('content')
<!--PROMOTIONS AREA-->
<section class="contact-area section-padding">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-contact-widget address-widget text-center">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <address>20 floor, Queensland Victoria Building, 60 Califonia Street, California, USA.</address>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-contact-widget address-widget text-center">
                    <div class="contact-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <a href="#">+849-333-666-789</a>
                    <a href="#">0080-987-654-321</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-contact-widget address-widget text-center">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <a href="#">Contact@OLWLTheme.com</a>
                    <a href="#">Infor@OWLTheme.com</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>Contacts</h2>
                    <h3>Send A Message</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="contact-form">
                    <form action="http://quomodosoft.com/html/owl/demo/process.php" id="contact-form" method="post">
                        <div class="form-group" id="name-field">
                            <div class="form-input col-md-6">
                                <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="form-group" id="email-field">
                            <div class="form-input col-md-6">
                                <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group" id="phone-field">
                            <div class="form-input col-md-6">
                                <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Your Phone No">
                            </div>
                        </div>
                        <div class="form-group" id="subject-field">
                            <div class="form-input col-md-6">
                                <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="Your Subject">
                            </div>
                        </div>
                        <div class="form-group" id="message-field">
                            <div class="form-input col-md-12">
                                <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="google-map" id="map" style="height:400px; width:100%;"></div>
            </div>
        </div>
    </div>
</section>
<!--PROMOTIONS AREA END-->
@endsection

@section('headerClass', 'single-page contact-us-page')

@section('banner')
<!--PAGE BARNER AREA-->
<div class="page-barner-area">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="barner-text">
                    <h1>Contact <span>Us</span></h1>
                    <ul class="page-location">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="active"><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--PAGE BARNER AREA END-->
@endsection

@push('scripts')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{ asset('front/js/maps.active.js') }}"></script>
@endpush