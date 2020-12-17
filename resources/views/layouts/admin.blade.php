<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/site.min.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loading.css') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('global/vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/flag-icon-css/flag-icon.css') }}">


    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('global/fonts/web-icons/web-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('global/fonts/brand-icons/brand-icons.min.css') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    @stack('externalCSS')
    @routes

    <!--[if lt IE 9]>
    <script src="{{ asset('global/vendor/html5shiv/html5shiv.min.js') }}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{ asset('global/vendor/media-match/media.match.min.js') }}"></script>
    <script src="{{ asset('global/vendor/respond/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{ asset('global/vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
        Breakpoints();
    </script>
    <script>
        var baseURL = '{{ env('APP_URL') }}';
        function showMsg(title, text, type) {
            swal({
                title: title,
                text: text,
                type: type,
                showCancelButton: false,
                confirmButtonClass: "btn-success",
                confirmButtonText: 'OK',
                closeOnConfirm: false
            });
        }
    </script>
</head>

<body class="animsition @stack('body-class')">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @include('partials.navbar_account')
    @include('partials.side_menu_bar_account')
    @include('partials.grid_menu')

    <div class="page">
        @yield('content')
    </div>

    <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
    <script src="{{ asset('global/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('global/vendor/popper-js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('global/vendor/animsition/animsition.js') }}"></script>
    <script src="{{ asset('global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
    <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
    <script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>

    <!-- Plugins -->
    <script src="{{ asset('global/vendor/switchery/switchery.js') }}"></script>
    <script src="{{ asset('global/vendor/intro-js/intro.js') }}"></script>
    <script src="{{ asset('global/vendor/screenfull/screenfull.js') }}"></script>
    <script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
    @stack('pluginJS')

    <!-- Scripts -->
    <script src="{{ asset('global/js/Component.js') }}"></script>
    <script src="{{ asset('global/js/Plugin.js') }}"></script>
    <script src="{{ asset('global/js/Base.js') }}"></script>
    <script src="{{ asset('global/js/Config.js') }}"></script>

    <script src="{{ asset('assets/js/Section/Menubar.js') }}"></script>
    <script src="{{ asset('assets/js/Section/GridMenu.js') }}"></script>
    <script src="{{ asset('assets/js/Section/Sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/Section/PageAside.js') }}"></script>
    <script src="{{ asset('assets/js/Plugin/menu.js') }}"></script>

    <script src="{{ asset('global/js/config/colors.js') }}"></script>
    <script src="{{ asset('assets/js/config/tour.js') }}"></script>
    <script>
        Config.set('assets', '../../assets');
    </script>

    <script src="{{ asset('assets/js/Site.js') }}"></script>
    <script src="{{ asset('global/js/Plugin/asscrollable.js') }}"></script>
    <script src="{{ asset('global/js/Plugin/slidepanel.js') }}"></script>
    <script src="{{ asset('global/js/Plugin/switchery.js') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap-sweetalert/sweetalert.js') }}"></script>
    <script src="{{ asset('global/vendor/toastr/toastr.js') }}"></script>

    <script>
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    </script>

    @stack('pageJS')
    <style>
    .site-menubar-body {
        height: 100%;
    }

    scrollable-container {
        height: 100%;
        width: 277px;
    }
    </style>

    <script>
        (function(document, window, $){
        'use strict';

        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
</body>

</html>