@extends('layouts.master2')
@section('content')
<br><br><br><br><br>
<div class="container" style="color:black;">
    <div class="jumbotron">
        <p class="h1 text-center"> Form Tambah Jenis Wisata </p>
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
        <form action="/create" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="form-group">
                <label for="title">Nama Tempat Wisata</label>
                <input type="text" class="form-control" required="required" name="title"></br>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi</label>
                <textarea class="form-control" required="required" name="description" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="title">Harga</label>
                <input type="text" class="form-control" required="required" name="price"></br>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" required="required" name="image">
            </div>
                 <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>

@endsection