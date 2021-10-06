@extends('layouts.master2')
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
            <!-- <div class="form-group">
                <label for="title">KTP</label>
                <input type="text" class="form-control" required="required" name="ktp"></br>
            </div> -->

            <div class="form-group">
                <label for="title">Nama</label>
                <select class="form-control" id="id_user" name="id_user">
                        
                    @foreach($user as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                <!-- <input type="text" class="form-control" value="{{$user->id}}" id="id_user" name="id_user">{{$user->name}}</br> -->
                
            </div>

            <!-- <div class="form-group">
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
            </div> -->

            <div class="form-group">
                <label for="title">Tempat Wisata</label>
                <select class="form-control" id="id_place" name="id_place">
                        <option selected>Pilih Jenis Wisata</option>
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

                <button type="submit" class="btn btn-primary">Buat Pesanan</button>
        </form>
    </div>
</div>

@endsection