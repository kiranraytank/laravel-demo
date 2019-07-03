<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Owl Restaurant is a simple video landing website" />
    <meta name="keywords" content="Video, youtube, vimeo" />

    <!--====== TITLE TAG ======-->
    <title>Home Owl Restaurant</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('front/img/favicon.png') }}" />

    <!--====== STYLESHEETS =======-->
    <link rel="stylesheet" href="{{ asset('front/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/pogo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/font-awesome.min.css') }}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">

    @stack('css')

    <script src="{{ asset('front/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"><i class="fa fa-cutlery"></i></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    @include('shared.header')

    @yield('content')

    @include('shared.footer')

    <!--====== SCRIPTS JS ======-->
    {{-- <script src="{{ asset('front/js/vendor/jquery-1.12.4.min.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('front/js/vendor/bootstrap.min.js') }}"></script>

    <!--====== PLUGINS JS ======-->
    <script src="{{ asset('front/js/vendor/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('front/js/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.pogo-slider.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('front/js/spectragram.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('front/js/timepicker.min.js') }}"></script>
    <script src="{{ asset('front/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/js/contact-form.js') }}"></script>
    <script src="{{ asset('front/js/jquery.sticky.js') }}"></script>

    @stack('scripts')
    <!--===== ACTIVE JS=====-->
    <script src="{{ asset('front/js/main.js') }}"></script>

    {{-- <script type="text/javascript">
        $('.nav li a[href="{{ Request::url() }}"]').parent('li').addClass('active');
    </script> --}}

    <script type="text/javascript">
        $(function(){
            $('#btnLogout').click(function(event){
                event.preventDefault();
                $('#frmLogout').submit();
            });

            $('.act-delete').click(function(event){
                event.preventDefault();
                // var action = $(this).data('url');
                // console.log(action);
                // return false;
                var action = $(this).attr('href');
                var $this = $(this);
                $.ajax({
                    url: action,
                    method: 'DELETE',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}", 
                    },
                    success: function(r) {
                        if(r.status == 200) {
                            $this.closest('tr').remove();
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>