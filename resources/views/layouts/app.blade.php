<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Andi Gigatera</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Website Portofolio Andi Gigatera Halil M" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="DryThemes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/clear.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/carouFredSel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/prettyPhoto.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/css/sm-clean.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages/style.css') }}" />
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
</head>

<body class="single single-post">
    <table class="doc-loader">
        <tbody>
            <tr>
                <td>
                    <img src="{{ asset('pages/images/ajax-document-loader.gif') }}" alt="Loading..." />
                </td>
            </tr>
        </tbody>
    </table>

    {{-- <div class="header-search">
        <div class="content-1330 center-relative">
            <form class="search-form">
                <label>
                    <input type="search" class="search-field" placeholder="Search ..." value="" name="s"
                        title="Search for:" />
                </label>
            </form>
        </div>
    </div> --}}

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

            <div class="header-menu right">
                @include('includes.navbar')

                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

        <div id="content" class="site-content content-1330 center-relative">
            @yield('content')
        </div>

        <!--Footer-->

        @include('includes.footer')

        <!-- End .body-border -->
    </div>

    <!--Load JavaScript-->
    <script src="{{ asset('pages/js/jquery.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.fitvids.js') }}"></script>
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
