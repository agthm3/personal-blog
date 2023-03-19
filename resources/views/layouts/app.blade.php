<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <title>Andi GigaTera.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Template by Dry Themes" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="DryThemes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="shortcut icon" href="images/tabicon.png" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/clear.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/carouFredSel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/prettyPhoto.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/sm-clean.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/style.css') }}" />
    <script src="https://kit.fontawesome.com/795e24dc42.js" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->


</head>

<body class="page">

    <div class="header-search">
        <div class="content-1330 center-relative">
            <form class="search-form">
                <label>
                    <input type="search" class="search-field" placeholder="Search ..." value="" name="s"
                        title="Search for:" />
                </label>
            </form>
        </div>
    </div>
    <div class="body-wrapper">
        <div class="content-1330 header-holder center-relative">
            <div class="header-logo left">
                <!--
                    <h1 class="site-title">
                        <a href="index.html">
                            <img src="images/sunDefaultLogo.png" alt="Sun-">
                        </a>
                    </h1> -->
                <h1 class="site-title">
                    <span style="color: red"> Andi</span> GigaTera.
                </h1>
            </div>

            @include('includes.navbar')
            <div class="clear"></div>
        </div>

        <div id="content" class="site-content">
            @yield('content')
        </div>

        @include('includes.footer')

        <!-- End .body-border -->
    </div>

    <script src="{{ asset('pages/js/jquery.js') }}"></script>
    <script src="{{ asset('pages/>js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.smartmenus.min.js') }}"></script>
    <script src="{{ asset('pages/js/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('pages/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.carouFredSel-6.0.0-packed.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.touchSwipe.min.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.ba-throttle-debounce.min.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('pages/js/main.js') }}"></script>
</body>

</html>
