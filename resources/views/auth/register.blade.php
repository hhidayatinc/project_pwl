@extends('layouts.master2')
@section('content')
<!-- <section id="header" >
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">Wisata Bromo</a></h1>
      

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/home">Home</a></li>
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
    <style>
body{
    background-color:black;;
}
.card{
    background-color:black;
    color : white;
}
</style> 
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
  </header>
  </section> -->
  <br><br><br><br><br>
<div class="container" style="color:black;">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> -->
            <div class="jumbotron">
                    <p class="h1 text-center"> Register Account </p>
                    <br><br>
                <!-- <div class="card-header" style=" border-width:2px; border-style:solid; border-color: #F8CB10;">{{ __('Register') }}</div> -->

                <!-- <div class="card-body" style=" border-width:2px; border-style:solid; border-color: #F8CB10;"> -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noktp" class="col-md-4 col-form-label text-md-right">{{ __('No KTP') }}</label>

                            <div class="col-md-6">
                                <input id="noktp" type="text" class="form-control @error('noktp') is-invalid @enderror" name="noktp" value ="{{ old('noktp') }}" required autocomplete="noktp" autofocus>

                                @error('noktp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="notelp" class="col-md-4 col-form-label text-md-right">{{ __('No Telpon') }}</label>

                            <div class="col-md-6">
                                <input id="notelp" type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value ="{{ old('notelp') }}" required autocomplete="notelp" autofocus>

                                @error('notelp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value ="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="border-radius: 5px; ">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <p>Have an account? <a href="{{ route('login') }}">
                                <button type="submit" class="btn btn-primary" style="border-radius: 5px; ">
                                    {{ __('Login') }}
                                </button>
                                </a><p>
                            </div>
                        </div>
                    <!-- <p>Have an account? <a href="{{ route('login') }}">{{ __('Login') }}</a><p> -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div>
    </div> -->
</div>

@endsection
