<!doctype html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Miramara Casa - Havana, Cuba</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='{{ asset('css/flexslider.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/font-awesome.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/weather-icons.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/bootstrap.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/prettyPhoto.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/mmenu.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/jquery-ui-1.10.4.datepicker.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/style.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/mediaqueries.css') }}'>
    <link rel='stylesheet' href='{{ asset('colors/red.css') }}'>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}">
    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">

    <!-- Per page CSS -->
    @yield('css')

    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <![endif]-->

    <style>
        /*
         When implementing this in a CMS, these styles should remain in the head
         and use if logic to switch between the .fwslider or alternative
         version of the theme (for correct header display). .fwslider or .alt in the body
         tag will convert the header display to white background with grey letters,
         as in index_alt.html -- feel free to delete this comment when you have no
         use for it
        */
        #header {
            background: url("http://placehold.it/1920x230") no-repeat center top;
        }

        .fwslider #header { background: none; }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZAFfh2BcSEpLUtl66cx4a9d7Zo_QpBjI&callback=initMap"></script>

</head>
<body class=" fwslider">

<div id="mobile-bar">
    <a class="menu-trigger" href="#mobilemenu"><i class="fa fa-bars"></i></a>
    <h1 class="mob-title">Casa Miramara</h1>
</div>

<div id="page" style="overflow: hidden">
    @include('sections.nav')
    @include('sections.slider-small')
    @include('sections.header-booking')

    <main id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">

                    @yield('content')

                </div>
            </div>
        </div>
    </main>

    @include('sections.footer')
</div> <!-- #page -->

<!-- Javascript
================================================== -->
<script src='{{ asset('js/jquery-1.10.1.min.js') }}'></script>
<script src='{{ asset('js/jquery-ui-1.10.4.custom.min.js') }}'></script>
<script src='{{ asset('js/superfish.min.js') }}'></script>
<script src='{{ asset('js/jquery.flexslider-min.js') }}'></script>
<script src='{{ asset('js/jquery.mmenu.min.js') }}'></script>
<script src='{{ asset('js/jquery.dropkick-min.js') }}'></script>
<script src='{{ asset('js/jquery.fitvids.js') }}'></script>
<script src='{{ asset('js/jquery.prettyPhoto.js') }}'></script>
<script src='{{ asset('js/contact.js') }}'></script>
<script src='{{ asset('js/scripts.js') }}'></script>

<!-- Per page JS -->
@yield('js')

</body>
</html>