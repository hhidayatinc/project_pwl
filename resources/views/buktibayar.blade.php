@extends('layouts.app')
@section('content')
<br><br><br><br><br>
<div class="container" style="color:black;">
<div class="jumbotron">
<p class="h1 text-center"> Form Pemesanan </p>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/add" method="post" enctype="multipart/form-data">
 @csrf 
 <div class="form-group">
    <label for="image">Total Biaya </label>
    <input type="file" class="form-control-file" value="{{$order->totalbiaya}}"
name="totalbiaya">
  </div>
 <div class="form-group">
    <label for="image">Bukti Bayar</label>
    <input type="file" class="form-control-file" required="required" 
name="statusbayar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

@endsection