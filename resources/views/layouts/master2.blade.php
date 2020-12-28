<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ticketing</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v1.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +62 8525 9302 344
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Everyday : 05:00 AM - 23:00 PM</span>
      </div>
      <div class="languages">
        <ul>
          <li>En</li>
          <li><a href="#">Ina</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Bromo Ticketing</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
      <ul>
            <li class="active"><a href="/">Home</a></li>
            <li class="active"><a href="/place">Wisata</a></li>
            <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
              @can('manage-places')
              <a class="nav-link" href="/manage">Manage Wisata</a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('manageorders') ? 'active' : '' }}">
              @can('manage-places')
              <a class="nav-link" href="/manageorders">Manage Pemesanan</a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('historypemesanan') ? 'active' : '' }}">
              @can('user-display')
              <a class="nav-link" href="/historypemesanan">History Pemesanan</a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('order') ? 'active' : '' }}">
              @can('user-display')
              <a class="nav-link" href="/order">Form Pemesanan</a>
              @endcan
            </li>
                          @guest
                            <li class="active">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="active">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                          @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="color:black;"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
      </nav><!-- .nav-menu -->
      </div>    
    </div>
  </header><!-- End Header -->

  <main class="py-4">
            @yield('content')
    </main>

    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Bromo Ticketing</h3>
              <p>
                in East Java <br>
                Indonesia<br><br>
                <strong>Phone:</strong> +62 8525 9302 344<br>
                <strong>Email:</strong> bromoticketing@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Jenis Wisata Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/place">Jenis Wisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/order">Order</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Logout</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Jenis Wisata Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Gunung Bromo</li>
              <li><i class="bx bx-chevron-right"></i>Bukit Teletabis</li>
              <li><i class="bx bx-chevron-right"></i>Ranu Pani</li>
              <li><i class="bx bx-chevron-right"></i>Ranu Kumbolo</li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Thank You!</h4>
            <p>for coming into our website</p>
            

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bromo Ticketing</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Ticketing Team</a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main2.js') }}"></script>

</body>

</html>