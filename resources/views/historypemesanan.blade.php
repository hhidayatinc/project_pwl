@extends('layouts.master2')
@section('content')
<br><br><br><br><br>
    <div class="container" >
    <div class="row">
    <a href="/order"   class="btn btn-primary float-left" ><i class="fas fa-plus"></i>Tambah Data</a>
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
           <a class="btn btn-primary" href="cetak/{{$o->id}}">Cetak</a>
           <a class="btn btn-primary" href="editorder/{{$o->id}}">Edit</a>
          <a class="btn btn-danger" href="hapus/{{$o->id}}">Delete</a> 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
 
  @endsection