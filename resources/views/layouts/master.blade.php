<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>amu</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('css/master.css') }}">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <script src="{{ asset('js/jquery-2.1.4.min') }}" defer></script>
  <script src="{{ asset('js/jquery-3.3.1.min') }}" defer></script>
  <!-- Template CSS -->

</head><br>
<body style="background-color: black;">
<!--w3l-banner-slider-main-->
<div class="w3l-banner-slider-main">
	
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="index.html">
						Spry<span class="lohny">S</span>tore</a>
					<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
					<!--/search-right-->
					<div class="search-right">

						<a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
							<span class="search-text">Search here</span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">

								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Keyword" name="search" required="required"
										autofocus="">
									<button type="submit" class="btn">Search</button>
								</form>

							</div>
							<a class="close" href="#">×</a>
						</div>
						<!-- /search popup -->
					</div>
					<!--//search-right-->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html">What We Offer</a>
							  </li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
						</li>
						</ul>

					</div>
				</div>
			</nav>
			<!--//nav-->

</div>
        <main class="py-4">
            @yield('content');
        </main>
</body>

<section class="w3l-footer-22">
    
<ul class="social-footerhny mt-lg-5 mt-4">

<li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
</li>
<li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
</li>
<li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
</li>
<li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
</li>
</ul>
</section>

</html>
