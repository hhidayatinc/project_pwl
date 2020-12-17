@extends('layouts.app')
@section('content')
<html>
<section id="header" >
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">Wisata Bromo</a></h1>
      

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/home">Home</a></li>
          <li class="active"><a href="/manage">Manage</a></li>
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
      </nav>

    </div>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
  </header>
  </section>
  <body>
  <main>
  <section>
    <!-- Page Content -->
	<div class="container">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-8">

	<!-- Title -->
	<h1 class="mt-4">{{$place->title}}</h1>

	<!-- Author -->
	<p class="lead">
	  by
	  <a href="#">Start Bootstrap</a>
	</p>

	<hr>

	<!-- Date/Time -->
	<p>Posted on {{$place->created_at}}</p>
	<p>Updated on {{$place->updated_at}}</p>
	<hr>

	<!-- Preview Image -->

	<img class="img-fluid rounded" src="{{asset('storage/'.$place ?? ''->image)}}" alt="">

	<hr>

	<!-- Post Content -->
	<p class="lead"></p>
	<p >{{$place->description}}</p>
  <hr>
  <p>{{$place->price}}</p>
	</div>
	</div>
	</div>
  </section>
  </main>
  </body>
  </html>

@endsection
