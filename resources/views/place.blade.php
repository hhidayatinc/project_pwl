@extends('layouts.master2')
@section('content')
<br><br><br><br><br>
@foreach($place as $p)
<div class="row" style="margin-left:100px; margin-right:100px;">
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="{{ url('storage/app/public/images'.$p->image) }}" alt="">
      </div>      
      <div class="col-lg-6" style="text-align:left;">
        <h2>{{ $p->title }}</h2>
        <!-- <p>{{ $p->description }}</p> -->
        <strong>Harga : {{ $p->price }}</strong>
        <br><br>
        <a href="/wisata/{{$p ->id}}"><button type="button" class="btn btn-outline-warning" style="border-radius: 20px; ">
        More Detail</button></a>
      </div>
</div>
<br><br><br>
@endforeach
@endsection
