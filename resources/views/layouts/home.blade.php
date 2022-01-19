<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">
    <meta name="author" content=" Serife Tezel ">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="{{ asset('assets')}}/bootstrap/css/bootstrap.css" />

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script src="{{ asset('assets')}}/bootstrap/js/bootstrap.js"></script>

    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets')}}/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/owl-carousel/owl.theme.css">
    <script src="{{ asset('assets')}}/owl-carousel/owl.carousel.js"></script>
    <!-- Owl stylesheet -->

    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/slitslider/css/custom.css" />
    <script type="text/javascript" src="{{ asset('assets')}}/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="{{ asset('assets')}}/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets')}}/slitslider/js/jquery.slitslider.js"></script>
    <!-- slitslider -->
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='{{ asset('assets')}}/https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='{{ asset('assets')}}/text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/superfish.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/flexslider.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/cs-select.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/cs-skin-border.css">

    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">

    <!-- Modernizr JS -->
    <script src="{{ asset('assets')}}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
    @yield("css")
    @yield("headerjs")
    @yield('javascript')
</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
@include('home._header')
@section('content')
        @show
@include('home._footer')

    </div>
</div>
@yield("footerjs")
</body>
</html>
