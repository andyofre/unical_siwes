

<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login | UNICAL SIWES</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.min28b5.css?v=2.0.0') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/backend28b5.css?v=2.0.0') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/%40icon/dripicons/dripicons.css') }}">

      <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/core/main.css') }}' />
      <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/daygrid/main.css') }}' />
      <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/timegrid/main.css') }}' />
      <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/list/main.css') }}' />
      <link rel="stylesheet" href="{{ asset('assets/vendor/mapbox/mapbox-gl.css') }}">
</head>
<body class=" ">

      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-12">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <h2 class="mb-2">LOG IN</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                           <div class="row">
                              <div class="col-lg-12">

                                 <div class="floating-label form-group">
                                    <input id="email" class="floating-input form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" type="email" placeholder="" name="email" required autocomplete="email" autofocus>
                                    <label>Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                              </div>

                              <div class="col-lg-12">

                                 <div class="floating-label form-group">
                                    <input class="floating-input form-control @error('password') is-invalid @enderror" name="password" id="password"  type="password" placeholder=" " required autocomplete="current-password">
                                    <label>Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                              </div>

                              <div class="col-lg-6">
                                 <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="customCheck1"  {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                 </div>
                              </div>

                            @if (Route::has('password.request'))
                              <div class="col-lg-6 rtl-left">
                                 <a href="{{ route('password.request') }}" class="text-primary float-right">Forgot Password?</a>
                              </div>
                            @endif
                           </div>
                           <button type="submit" class="btn btn-primary">Sign In</button>
                        </form>
                     </div>
                     <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                        <img src="{{ asset('assets/images/login/01.png') }}" class="img-fluid w-80" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>





    <!-- Backend Bundle JavaScript -->
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
  </body>
</html>
