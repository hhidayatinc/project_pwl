@extends('layouts.master2')
@section('content')
<br><br><br><br><br>
<<<<<<< HEAD

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
 <label for="title">KTP</label>
 <input type="text" class="form-control" 
required="required" name="ktp"></br>
 </div>
 <div class="form-group">
 <label for="title">Nama</label>
 <input type="text" class="form-control" 
required="required" name="nama"></br>
 </div>
 <div class="form-group">
 <label for="title">No Telpon</label>
 <input type="text" class="form-control" 
required="required" name="notelp"></br>
 </div>
 <div class="form-group">
 <label for="title">Alamat</label>
 <input type="text" class="form-control" 
required="required" name="alamat"></br>
 </div>
 <div class="form-group">
 <label for="title">Email</label>
 <input type="text" class="form-control" 
required="required" name="email"></br>
 </div>
 
 <div class="form-group">
 <label for="title">Tanggal Berkunjung</label>
 <input type="date" class="form-control" 
required="required" name="tglbook"></br>
 </div>
 <div class="form-group">
 <label for="title">Jumlah Orang</label>
 <input type="text" class="form-control" 
required="required" name="jmlhorang"></br>
 </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
=======
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
                <label for="title">KTP</label>
                <input type="text" class="form-control" required="required" name="ktp"></br>
            </div>

            <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" class="form-control" required="required" name="nama"></br>
            </div>

            <div class="form-group">
                <label for="title">No Telpon</label>
                <input type="text" class="form-control" required="required" name="notelp"></br>
            </div>

            <div class="form-group">
                <label for="title">Alamat</label>
                <input type="text" class="form-control" required="required" name="alamat"></br>
            </div>

            <div class="form-group">
                <label for="title">Email</label>
                <input type="text" class="form-control" required="required" name="email"></br>
            </div>

            <div class="form-group">
                <label for="title">Tempat Wisata</label>
                <select class="form-control" id="id_place" name="id_place">
                    @foreach($place  as $p)
                        <option value="{{$p->id}}">{{$p->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="title">Tanggal Berkunjung</label>
                <input type="date" class="form-control" required="required" name="tglbook"></br>
            </div>

            <div class="form-group">
                <label for="title">Jumlah Orang</label>
                <input type="text" class="form-control" required="required" name="jmlhorang"></br>
            </div>

            <div class="form-group">
                <label for="image">Bukti Bayar</label>
                <input type="file" class="form-control-file" required="required" name="statusbayar">
            </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
>>>>>>> 6607049b1ce43036fc4bb1b501b66705d1a876f9
</div>

@endsection