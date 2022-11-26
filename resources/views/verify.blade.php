<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>Unical | Student Industrial Work Experience Scheme - SIWES</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.min.css') }}">

    <!-- IMAGE POPUP -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lc_lightbox.css') }}" />

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('css/skin/skin-9.css') }}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/switcher.css') }}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/navigation.css') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;display=swap" rel="stylesheet">

</head>

<body class="footer-fixed">
<style>
    .site-header{
        border-bottom: 2px solid #f7f7f7;
    }

    .form-control{
        font-family: 'Inter', sans-serif;
        color: #131e22;
        font-weight: 400;
        height: 49px;
        border-color: #9d9b9b !important;
        letter-spacing: .035em;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }

    .form-control:focus {
        color: #495057;
        /*background-color: #fff;*/
        /*border-color: #80bdff;*/
        outline: 1px;
        -webkit-box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
        box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
    }

    control:focus {
        color: #5e6466;
        border-color: #948bca;
        -webkit-box-shadow: 0 0 28px rgb(0 0 0 / 10%);
        box-shadow: 0 0 28px rgb(0 0 0 / 10%);
    }

</style>

<div class="page-wraper">



    <!-- HEADER START -->
    <header class="site-header header-style-2 mobile-sider-drawer-menu">

        <div class="top-bar site-bg-secondry">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <div class="wt-topbar-left d-flex flex-wrap align-content-start">

                    </div>

                    <div class="wt-topbar-right d-flex flex-wrap align-content-center">


                    </div>
                </div>

            </div>
        </div>

        <div class="sticky-header main-bar-wraper  navbar-expand-lg">
            <div class="main-bar">
                <div class="container clearfix">

                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="" />
                            </a>
                        </div>
                    </div>

                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>

                    <div class="extra-nav header-2-nav">
                        <div class="extra-cell">

                            <div class="header-nav-request">
                                <a href="{{ route('login') }}" class="">Login</a>
                            </div>

                        </div>

                    </div>


                    <!-- MAIN Vav -->
                    <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center border-bottom-1">

                        {{--                        <ul class=" nav navbar-nav">--}}
                        {{--                            <li>--}}
                        {{--                                <a href="javascript:;">Home</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="javascript:;">About</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="javascript:;">Departments</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="javascript:;">Faculties</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="javascript:;">L</a>--}}
                        {{--                            </li>--}}


                        {{--                        </ul>--}}

                    </div>


                </div>
            </div>

        </div>

    </header>

    <div class="row py-5">

        <div class="col-md-3"></div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">





                    <form method="post" action="{{ route('preregister') }}">
                        @csrf

                        @include('inc.frontMessage')

                        <div class="m-b30">
                            <!-- TITLE END -->

                            <h3 class="m-b30 text-center py-4">Verify you are a student</h3>

                            @if(Session::has('error_message'))
                                <div class="alert alert-danger   fade show mb-5" role="alert">

                                    {{Session::get('error_message')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span>&times;</span>
                                    </button>
                                </div>
                            @endif

                            {{--                        <input type="hidden" name="payment_code" value="{{ $data['payment_code'] }}">--}}
                            <div class="container">
                                <div class="row">


                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input name="payment_code" type="text" class="form-control  @error('session') is-invalid @enderror"  placeholder="Payment code"  value="">

                                            @error('payment_code')
                                            <small class="text-sm text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select name="session"  class="form-control  @error('session') is-invalid @enderror" >
                                                <option value="" disabled="" selected>select</option>
                                                <option value="2020/2021">2020/2021</option>

                                            </select>
                                            @error('session')
                                            <small class="text-sm text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 py-3">
                                        <button type="submit" class="btn btn-primary ">Verify Pin</button>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>



</div>


<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{ asset('js/jquery-2.2.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script  src="{{ asset('js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{ asset('js/bootstrap-select.min.js') }}"></script><!-- Form js -->
<script  src="{{ asset('js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{ asset('js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
<script  src="{{ asset('js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script  src="{{ asset('js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   -->
<script  src="{{ asset('js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{ asset('js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script  src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script  src="{{ asset('js/lc_lightbox.lite.js') }}" ></script><!-- IMAGE POPUP -->
<script  src="{{ asset('js/switcher.js') }}"></script><!-- SHORTCODE FUCTIONS  -->



<!-- REVOLUTION JS FILES -->

<script  src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script  src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<script  src="{{ asset('plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ asset('js/rev-script-2.js') }}"></script>

</body>


</html>
