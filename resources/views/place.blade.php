@extends('layouts.master2')
@section('content')
<br><br><br><br><br>
<!-- <div class="container">
  <form action="/place/search" method="GET" class="form-inline">
      <input type="search" class="form-control mr-sm-2"name="search" placeholder="Cari Tempat Wisata .." value="{{ old('search') }}">
      <input type="submit" value="Search" class="btn btn-outline-warning" style="border-radius: 20px; ">
  </form>
</div>
<br><br> -->
@foreach($place as $p)
<div class="row" style="margin-left:100px; margin-right:100px;">
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="{{asset('storage/'.$p->image)}}" alt="">
      </div>      
      <div class="col-lg-6" style="text-align:left;">
        <h2>{{ $p->title }}</h2>
        <p>{{ $p->description }}</p>
        <strong>Harga : {{ $p->price }}</strong>
        <br><br>
        <a href="/detailplace/{{$p->id}}"><button type="button" class="btn btn-outline-warning" style="border-radius: 20px; ">
        More Information</button></a>
      </div>
</div>
<br><br><br>
@endforeach
@endsection
