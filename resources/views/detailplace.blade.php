@extends('layouts.master2')
@section('content')
<br><br><br><br><br>
    <!-- Page Content -->
	<div class="container">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-8">

	<!-- Title -->
	<h1 class="mt-4" style="margin-left:400px;">{{$place->title}}</h1>
	<hr><hr>
	  
	  <a href="#" style="margin-left:100px;">by Bromo Ticketing</a>
	  <p style="margin-left:100px;">Posted on {{$place->created_at}} </p>
	
	
	<hr>
	<!-- Preview Image -->
	<img class="img-fluid rounded mb-4" style="margin-left:200px;" src="{{asset('storage/'.$place->image)}}" alt="">
	
	<hr>

	<!-- Post Content -->
	<p style="text-align:left; margin-left:200px; font-size:20px;">{{$place->description}}</p>
  <hr>
  <p style="text-align:left; margin-left:200px; font-size:18px; color:#F1C40F;"><b>Harga : Rp {{$place->price}}</b></p>
  <br>
        <a href="/order"><button type="button" class="btn btn-outline-warning" 
        style="text-align:left; margin-left:200px;">Booking</button></a>
	</div>
	</div>
	</div>
@endsection