<!doctype html>
<html lang="en" dir="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin Dashboard | UNICAL SIWES - @yield('title')</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.min28b5.css?v=2.0.0') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/backend28b5.css?v=2.0.0') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/@icon/dripicons/dripicons.css') }}">

        <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/core/main.css') }}' />
        <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/daygrid/main.css') }}' />
        <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/timegrid/main.css') }}' />
        <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/list/main.css') }}' />
        <link rel="stylesheet" href="{{ asset('assets/vendor/mapbox/mapbox-gl.css') }}">

        @yield('style')
    </head>
    <body class="  ">
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">

            <div class="iq-sidebar  rtl-iq-sidebar sidebar-default ">

                @include('backend.admin.include.sidebar')

            </div>
            <div class="iq-top-navbar rtl-iq-top-navbar ">

                @include('backend.admin.include.topbar')

            </div>
            <div class="content-page rtl-page">

                @yield('content')

            </div>
        </div>
        <!-- Wrapper End-->


        <footer class="iq-footer rtl-footer">

            @include('backend.admin.include.footer')

        </footer>
        <!-- Backend Bundle JavaScript -->

        <!-- Backend Bundle JavaScript -->
        <script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js') }}"></script>
        <script src="{{ asset('assets/js/backend-bundle.min.js') }}"></script>

        <!-- Flextree Javascript-->
        <script src="{{ asset('assets/js/flex-tree.min.js') }}"></script>
        <script src="{{ asset('assets/js/tree.js') }}"></script>

        <!-- Table Treeview JavaScript -->
        <script src="{{ asset('assets/js/table-treeview.js') }}"></script>

        <!-- Masonary Gallery Javascript -->
        <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

        <!-- Mapbox Javascript -->
        <script src="{{ asset('assets/js/mapbox-gl.js') }}"></script>
        <script src="{{ asset('assets/js/mapbox.js') }}"></script>

        <!-- Fullcalender Javascript -->
        <script src='{{ asset('assets/vendor/fullcalendar/core/main.js') }}'></script>
        <script src='{{ asset('assets/vendor/fullcalendar/daygrid/main.js') }}'></script>
        <script src='{{ asset('assets/vendor/fullcalendar/timegrid/main.js') }}'></script>
        <script src='{{ asset('assets/vendor/fullcalendar/list/main.js') }}'></script>

        <!-- SweetAlert JavaScript -->
        <script src="{{ asset('assets/js/sweetalert.js') }}"></script>

        <!-- Vectoe Map JavaScript -->
        <script src="{{ asset('assets/js/vector-map-custom.js') }}"></script>

        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('assets/js/customizer.js') }}"></script>
        <script src="{{ asset('assets/js/rtl.js') }}"></script>

        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('assets/js/chart-custom.js') }}"></script>

        <!-- slider JavaScript -->
        <script src="{{ asset('assets/js/slider.js') }}"></script>

        <!-- app JavaScript -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

        @yield('script')
    </body>
</html>
