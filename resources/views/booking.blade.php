@extends('layouts.master2')
@section('content')
<br><br><br><br><br><br>
<div class="container">
<p class="h1 text-center"> Form Booking </p>
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
@csrf
 <input type="hidden" name="id" ></br>

 <div class="form-group">
 <label for="title">Nama : </label>
 <input type="text" class="form-control" 
 required="required" name="title" value="{{$order->nama}}"></br>
 </div>

 <div class="form-group">
 <label for="title">No Ktp : </label>
 <input type="text" class="form-control" 
 required="required" name="title" value="{{$order->ktp}}"></br>
 </div>

 <div class="form-group">
 <label for="title">Telepon : </label>
 <input type="text" class="form-control" 
 required="required" name="title" value="{{$order->telepon}}"></br>
 </div>
 
 <div class="form-group">
 <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea class="form-control" required="required" name="description" rows="3" value="{{$order->alamat}}"></textarea>
 </div>

 <div class="form-group">
 <label for="title">Email : </label>
 <input type="text" class="form-control" 
 required="required" name="title" value="{{$order->email}}"></br>
 </div>

 <div class="form-group">
 <label for="title">Nama : </label>
 <input type="text" class="form-control" 
 required="required" name="title" value="{{$order->nama}}"></br>
 </div>
 <div class="form-group">
 <label for="title">Harga</label>
 <input type="text" class="form-control" 
 required="required" name="price" value="{{$place->price}}"></br>
 </div>

 <div class="form-group">
 <label for="image">Image</label>
 <input type="file" class="form-control-file" required="required" 
 name="image" value="{{$place->image}}">
 </div>

  <button type="submit" class="btn btn-primary" >Ubah Data</button>
</form>
</div>

@endsection