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
    <main id="main">
    <section>
    <div class="container">
    <div class="row">
    <a href="/add"   class="btn btn-primary float-left" ><i class="fas fa-plus"></i>Tambah Data</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Wisata</th>
      <th scope="col">Harga</th>
       <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($place as $p)
      <th>{{$p->id}}</th>
      <td>{{$p->title}}</td>
      <td>{{$p->price}}</td>
      <td>{{$p->description}}</td>
      <td>
                
   
                    <a class="btn btn-info" href="wisata/{{$p->id}}">Show</a> 
                    
                    <a class="btn btn-primary" href="edit/{{$p->id}}">Edit</a>
   
                    <a class="btn btn-danger" href="destroy/{{$p->id}}">Delete</a> 
                    
                
            </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
    </section>
    </main>
    </body>
  @endsection