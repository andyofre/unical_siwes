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
                                <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                                    <ul class=" nav navbar-nav">
                                        <li>
                                            <a href="javascript:;">Home</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">About</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Departments</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Faculties</a>
                                        </li>
                                        <li>
                                            <a href="{{route('verify.student')}}">Register</a>
                                        </li>


                                    </ul>

                                </div>


                            </div>
                        </div>

                </div>

            </header>
            <!-- HEADER END -->

            <!-- CONTENT START -->
            <div class="page-content">

               <!-- SLIDER START -->
                <div class="slider-outer">

                    <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
                        <div id="welcome_two" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                            <ul>

                                <!-- SLIDE 1 -->
                                <li data-index="rs-901"
                                data-transition="fade"
                                data-slotamount="default"
                                data-hideafterloop="0"
                                data-hideslideonmobile="off"
                                data-easein="default"
                                data-easeout="default"
                                data-masterspeed="default"
                                data-thumb="{{ asset('assets/img/bgg.jpg') }}"
                                data-rotate="0"
                                data-fstransition="fade"
                                data-fsmasterspeed="300"
                                data-fsslotamount="7"
                                data-saveperformance="off"
                                data-title="Slide Title"
                                data-param1="Additional Text"
                                data-param2=""
                                data-param3=""
                                data-param4=""
                                data-param5=""
                                data-param6=""
                                data-param7=""
                                data-param8=""
                                data-param9=""
                                data-param10=""
                                data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('assets/img/bgg.jpg') }}"  alt=""  data-lazyload="{{ asset('assets/img/bgg.jpg') }}" data-bgposition="center center"
                                    data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                    id="slide-901-layer-0"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="nowrap"
                                    data-type="shape"
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"

                                    style="z-index: 1;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>

                                    <!-- LAYER NR. 2 [ Black Box ] -->
                                    <div class="tp-caption   tp-resizeme site-text-primary"
                                    id="slide-901-layer-2"
                                    data-x="['left','left','left','left']" data-hoffset="['100','120','34','30']"
                                    data-y="['top','top','top','top']" data-voffset="['80','180','180','180']"
                                    data-fontsize="['48','48','48','34']"
                                    data-lineheight="['48','48','48','48']"
                                    data-width="['700','700','96%','96%']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"

                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[10,10,10,4]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[10,10,10,4]"
                                    data-paddingleft="[30,30,30,20]"

                                    style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 300;
                                    font-family: 'Teko', sans-serif; border-left:8px solid #00173c">UNICAL SIWES</div>

                                    <!-- LAYER NR. 3 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                    id="slide-901-layer-3"
                                    data-x="['left','left','left','left']" data-hoffset="[100','120','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['180','280','280','260']"
                                    data-fontsize="['120','72','72','38']"
                                    data-lineheight="['100','66','48','38']"
                                    data-width="['700','700','96%','96%']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"

                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[5,5,5,5]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"

                                    style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 300;
                                    color:#00173c;
                                    border-width:0px; font-family: 'Teko', sans-serif; text-transform:uppercase;">Services For Industries</div>

                                    <!-- LAYER NR. 4 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme"
                                    id="slide-901-layer-4"
                                    data-x="['left','left','left','left']" data-hoffset="['100','120','30','30']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['70','40','40','-10']"
                                    data-fontsize="['20','20','20','16']"
                                    data-lineheight="['30','30','30','22']"
                                    data-width="['600','600','90%','90%']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"

                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"

                                    style="z-index: 13;
                                    font-weight: 500;
                                    color:#00173c;
                                    border-width:0px;font-family: 'Poppins', sans-serif;">
                                    </div>

                                    <!-- LAYER NR. 5 [ for see all service botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                    id="slide-901-layer-5"
                                    data-x="['left','left','left','left']" data-hoffset="['100','120','30','30']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['160','130','130','80']"
                                    data-lineheight="['none','none','none','none']"
                                    data-width="['200','200','200','200']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"

                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"

                                    style="z-index:13; text-transform:uppercase;">
                                    <a href="{{route('verify.student')}}" class="site-button site-btn-effect">Register</a>
                                    </div>



                                </li>

                                <!-- SLIDE 2 -->
                                <li data-index="rs-902"
                                data-transition="fade"
                                data-slotamount="default"
                                data-hideafterloop="0"
                                data-hideslideonmobile="off"
                                data-easein="default"
                                data-easeout="default"
                                data-masterspeed="default"
                                data-thumb="{{ asset('assets/img/bgg.jpg') }}"
                                data-rotate="0"
                                data-fstransition="fade"
                                data-fsmasterspeed="300"
                                data-fsslotamount="7"
                                data-saveperformance="off"
                                data-title="Slide Title"
                                data-param1="Additional Text"
                                data-param2=""
                                data-param3=""
                                data-param4=""
                                data-param5=""
                                data-param6=""
                                data-param7=""
                                data-param8=""
                                data-param9=""
                                data-param10=""
                                data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('assets/img/bgg.jpg') }}"  alt=""  data-lazyload="{{ asset('assets/img/bgg.jpg') }}" data-bgposition="center center"
                                    data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                    id="slide-902-layer-0"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="nowrap"
                                    data-type="shape"
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"

                                    style="z-index: 1;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>

                                    <!-- LAYER NR. 2 [ Black Box ] -->
                                    <div class="tp-caption   tp-resizeme site-text-primary"
                                    id="slide-902-layer-2"
                                    data-x="['left','left','left','left']" data-hoffset="['100','120','34','30']"
                                    data-y="['top','top','top','top']" data-voffset="['80','180','180','180']"
                                    data-fontsize="['48','48','48','34']"
                                    data-lineheight="['48','48','48','48']"
                                    data-width="['700','700','96%','96%']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"

                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[10,10,10,4]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[10,10,10,4]"
                                    data-paddingleft="[30,30,30,20]"

                                    style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 300;
                                    font-family: 'Teko', sans-serif; border-left:8px solid #00173c">UNICAL SIWES</div>

                                    <!-- LAYER NR. 3 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                    id="slide-902-layer-3"
                                    data-x="['left','left','left','left']" data-hoffset="[100','120','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['180','280','280','260']"
                                    data-fontsize="['120','72','72','38']"
                                    data-lineheight="['100','66','48','38']"
                                    data-width="['700','700','96%','96%']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"

                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[5,5,5,5]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"

                                    style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 300;
                                    color:#00173c;
                                    border-width:0px; font-family: 'Teko', sans-serif; text-transform:uppercase;">Services For Industries</div>

                                    <!-- LAYER NR. 4 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme"
                                    id="slide-902-layer-4"
                                    data-x="['left','left','left','left']" data-hoffset="['100','120','30','30']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['70','40','40','-10']"
                                    data-fontsize="['20','20','20','16']"
                                    data-lineheight="['30','30','30','22']"
                                    data-width="['600','600','90%','90%']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"

                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"

                                    style="z-index: 13;
                                    font-weight: 500;
                                    color:#00173c;
                                    border-width:0px;font-family: 'Poppins', sans-serif;">

                                    </div>

                                    <!-- LAYER NR. 5 [ for see all service botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                    id="slide-902-layer-5"
                                    data-x="['left','left','left','left']" data-hoffset="['100','120','30','30']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['160','130','130','80']"
                                    data-lineheight="['none','none','none','none']"
                                    data-width="['200','200','200','200']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"

                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"

                                    style="z-index:13; text-transform:uppercase;">
                                    <a href="#" class="site-button site-btn-effect contact-slide-show">Register</a>
                                    </div>


                                </li>


                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div>

                </div>
                <!-- SLIDER END -->


                <!-- TOP HALF SECTION START -->
                <div class="section-full small-device p-b40 top-half-section-outer">

                    <div class="container">

                        <!-- IMAGE CAROUSEL START -->
                        <div class="section-content clearfix">
                            <div class="top-half-section">

                                <div class="row d-flex justify-content-center">

                                    <div class="col-lg-4 col-md-6 m-b50">
                                        <div class="service-border-box">
                                            <div class="wt-box service-box-1 bg-white">

                                                <div class="service-box-title title-style-2 site-text-secondry">
                                                    <span  class="s-title-one">Oil & </span>
                                                    <span  class="s-title-two">Gas Engineering</span>
                                                </div>
                                                <div class="service-box-content">

                                                </div>
                                                <div class="wt-icon-box-wraper">
                                                    <div class="wt-icon-box-md site-bg-primary">
                                                        <span class="icon-cell text-white"><i class="flaticon-industry"></i></span>
                                                    </div>
                                                    <div class="wt-icon-number"><span>01</span></div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-md-6 m-b50">
                                        <div class="service-border-box">
                                            <div class="wt-box service-box-1 bg-white">

                                                <div class="service-box-title title-style-2 site-text-secondry">
                                                    <span class="s-title-one">Mechanical</span>
                                                    <span  class="s-title-two">Engineering</span>
                                                </div>
                                                <div class="service-box-content">

                                                </div>
                                                <div class="wt-icon-box-wraper">
                                                    <div class="wt-icon-box-md site-bg-primary">
                                                        <span class="icon-cell text-white"><i class="flaticon-conveyor"></i></span>
                                                    </div>
                                                    <div class="wt-icon-number"><span>02</span></div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-6 m-b50">
                                        <div class="service-border-box">
                                            <div class="wt-box service-box-1 bg-white">

                                                <div class="service-box-title title-style-2 site-text-secondry">
                                                    <span  class="s-title-one">Automotive</span>
                                                    <span  class="s-title-two">Manufacturing</span>
                                                </div>
                                                <div class="service-box-content">

                                                </div>
                                                <div class="wt-icon-box-wraper">
                                                    <div class="wt-icon-box-md site-bg-primary">
                                                        <span class="icon-cell text-white"><i class="flaticon-robotic-arm"></i></span>
                                                    </div>
                                                    <div class="wt-icon-number"><span>03</span></div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- TOP HALF SECTION END -->


            </div>
            <!-- CONTENT END -->

            <!-- FOOTER START -->
            <footer class="site-footer footer-large footer-dark text-white footer-style2" >


                <div class="footer-bottom">
                  <div class="container">
                    <div class="wt-footer-bot-left d-flex justify-content-between">
                        <span class="copyrights-text">Copyright © 2021 <span class="site-text-primary">Aegean Industries LTD</span></span>
                        <ul class="copyrights-nav">
                            <li><a href="javascript:void(0);">Terms  &amp; Condition</a></li>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                  </div>
                </div>


            </footer>
            <!-- FOOTER END -->

            <!-- Get In Touch -->
            <div id="intourch">
                <div class="contact-slide-hide bg-cover bg-no-repeat">
                    <div class="contact-nav">
                        <a href="javascript:void(0)" class="contact_close">&times;</a>
                        <div class="contact-nav-form">
                            <div class="contact-nav-info bg-white p-a30 bg-center bg-no-repeat">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <form class="cons-contact-form" method="post"  id="preregister">
                                            @csrf
                                            <div class="m-b30">
                                                <!-- TITLE START -->
                                                <h2 class="m-b30">Student's SIWES Registeration</h2>
                                                <!-- TITLE END -->
                                                    <div class="row" id="pre-form">
                                                    <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <input name="payment_code" type="text" class="form-control @error('payment_code') is-invalid @enderror" placeholder="Payment Code">
                                                                @error('payment_code')
                                                                    <small class="text-sm text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <select name="session"  class="form-control  @error('session') is-invalid @enderror" >
                                                                    <option value="">Select Session</option>
                                                                    <option value="2020/2021">2020/2021</option>
                                                                    <option value="2021/2022">2021/2022</option>
                                                                </select>
                                                                @error('session')
                                                                    <small class="text-sm text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    <div class="col-md-4">
                                                            <button type="submit" class="site-button site-btn-effect">Check Fee Status</button>
                                                        </div>

                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!-- BUTTON TOP START -->
            <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>


       {{-- onclick="event.preventDefault(); document.getElementById('reissue{{ $assessment->id }}').submit();"  --}}
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

    <script type="text/javascript">
        $(document).ready(function(){
          $("#preregister").on('submit', function(e){
              e.preventDefault();

              var postData = $(this).serialize();

              $.ajax({
                  url: "{{ route('preregister')}}",
                  type: 'POST',
                  data: postData,
                  headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                //   beforeSend : function(http) {
                //       $("#intourch").html('<div class="container"><h6 style="margin-top:10px;" class="text-center"><i class="fa fa-spinner fa-spin text-danger"></i> Fetching Data...</h6><div>').fadeIn();
                //   },
                  success: function(data) {
                      // console.log(data);
                        $("#intourch").html(data);
                  },
                  error: function(data) {
                        $("#intourch").html(data);
                  }
              });
            });
          });
      </script>
    </body>


    </html>
