@extends('layouts.master2')
@section('content')
<<<<<<< HEAD
  <br><br><br><br><br>
  <body>
    <main id="main">
    <section>
=======
<br><br><br><br><br>
>>>>>>> 6607049b1ce43036fc4bb1b501b66705d1a876f9
    <div class="container">
    <div class="row">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Ktp</th>
      <th scope="col">Nama</th>
       <th scope="col">Jenis Wisata</th>
       <th scope="col">Harga</th>
       <th scope="col">Tanggal Berkunjung</th>
       <th scope="col">Jumlah Orang</th>
       <th scope="col">Total Biaya</th>
       <th scope="col">Bukti Bayar</th>
       <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($order as $o)
        <th>{{$o->id}}</th>
      <td>{{$o->ktp}}</td>
      <td>{{$o->nama}}</td>
      <td>{{$o->tempat->title}}</td>
      <td>{{$o->tempat->price}}</td>
      <td>{{$o->tglbook}}</td>
      <td>{{$o->jmlhorang}}</td>
      <td>{{$o->totalbiaya}}</td>
      <td>{{$o->statusbayar}}</td>
      <td>
<<<<<<< HEAD

      <a class="btn btn-primary" href="editorder/{{$o->id}}">Edit</a>
      <a class="btn btn-danger" href="hapus/{{$o->id}}">Delete</a> 
      <a class="btn btn-danger" href="cetak/{{$o->id}}">Cetak Order</a> 

        </td>
=======
   <a class="btn btn-danger" href="hapusadmin/{{$o->id}}">Delete</a> 
            </td>
>>>>>>> 6607049b1ce43036fc4bb1b501b66705d1a876f9
    </tr>
    @endforeach
  </tbody>
</table>
</div>
 
  @endsection