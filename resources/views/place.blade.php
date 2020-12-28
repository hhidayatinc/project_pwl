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
<<<<<<< HEAD
        <img class="img-fluid rounded" src="{{ url('storage/app/public/images'.$p->image) }}" alt="">
=======
        <img class="img-fluid rounded" src="{{asset('storage/'.$p->image)}}" alt="">
>>>>>>> 6607049b1ce43036fc4bb1b501b66705d1a876f9
      </div>      
      <div class="col-lg-6" style="text-align:left;">
        <h2>{{ $p->title }}</h2>
        <!-- <p>{{ $p->description }}</p> -->
        <strong>Harga : {{ $p->price }}</strong>
        <br><br>
<<<<<<< HEAD
        <a href="/wisata/{{$p ->id}}"><button type="button" class="btn btn-outline-warning" style="border-radius: 20px; ">
        More Detail</button></a>
=======
        <a href="/detailplace/{{$p->id}}"><button type="button" class="btn btn-outline-warning" style="border-radius: 20px; ">
        More Information</button></a>
>>>>>>> 6607049b1ce43036fc4bb1b501b66705d1a876f9
      </div>
</div>
<br><br><br>
@endforeach
@endsection
