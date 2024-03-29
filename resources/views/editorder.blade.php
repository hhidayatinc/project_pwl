@extends('layouts.master2')
@section('content')
<br><br><br><br><br>
<div class="container" style="color:black;">
<div class="jumbotron">
<p class="h1 text-center"> Form Edit Jenis Wisata </p>
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
<form action="/updateorder/{{$order->id}}" method="post" enctype="multipart/form-data">
 @csrf 
 <input type="hidden" name="id" ></br>
 <div class="form-group">
 <label for="title">KTP</label>
 <input type="text" class="form-control" 
required="required" name="ktp" value="{{$order->ktp}}"></br>
 </div>
 <div class="form-group">
 <label for="title">Nama</label>
 <input type="text" class="form-control" 
required="required" name="nama" value="{{$order->nama}}"></br>
 </div>
 <div class="form-group">
 <label for="title">No Telpon</label>
 <input type="text" class="form-control" 
required="required" name="notelp" value="{{$order->notelp}}"></br>
 </div>
 <div class="form-group">
 <label for="title">Alamat</label>
 <input type="text" class="form-control" 
required="required" name="alamat" value="{{$order->alamat}}"></br>
 </div>
 <div class="form-group">
 <label for="title">Email</label>
 <input type="text" class="form-control" 
required="required" name="email" value="{{$order->email}}"></br>
 </div>
 <div class="form-group">
 <label for="title">Tempat Wisata</label>
 <select class="form-control" id="id_place" name="id_place">
  <option selected>Pilih Jenis Wisata</option>
  @foreach($place as $p)
  <option value="{{$p->id}}">{{$p->title}}</option>
  @endforeach
</select>
 </div>
 <div class="form-group">
 <label for="title">Tanggal Berkunjung</label>
 <input type="date" class="form-control" 
required="required" name="tglbook" value="{{$order->tglbook}}"></br>
 </div>
 <div class="form-group">
 <label for="title">Jumlah Orang</label>
 <input type="text" class="form-control" 
required="required" name="jmlhorang" value="{{$order->jmlhorang}}"></br>
 </div>
  <button type="submit" class="btn btn-primary">Ubah Pesanan</button>
</form>
</div>
</div>

@endsection