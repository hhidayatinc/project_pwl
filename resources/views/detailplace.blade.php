@extends('layouts.master2')
@section('content')
<br><br><br><br><br>
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
	  <a href="#">Bromo Ticketing</a>
	</p>

	<hr>

	<!-- Date/Time -->
	<p>Posted on {{$place->created_at}} </p>
	
	<hr>

	<!-- Preview Image -->

	<img class="img-fluid rounded" src="{{asset('storage/'.$place->image)}}" alt="">

	<hr>

	<!-- Post Content -->
	<p class="lead"></p>
	<p >{{$place->description}}</p>
  <hr>
  <p>Harga : Rp {{$place->price}}</p>
  <br><br>
        <a href="/order"><button type="button" class="btn btn-outline-warning" style="border-radius: 20px; ">
        Booking</button></a>
	</div>
	</div>
	</div>
  

@endsection
