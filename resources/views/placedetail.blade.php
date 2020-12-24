@extends('layouts.master2')
@section ('content')

<br><br><br><br><br>
<div class="row" style="margin-left:100px; margin-right:100px;">
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="{{ url('storage/app/public/'.$place->image) }}" alt="">
        <h2>{{ $place->title }}</h2>
        <p>{{ $place->description }}</p>
        <strong>Harga : {{ $p->price }}</strong>
        <br><br>
        <a href="/order"><button type="button" class="btn btn-outline-warning" style="border-radius: 20px; ">
        More Detail</button></a>
      </div>
</div>

@endsection