@extends('layouts.master2')
@section('content')
<br><br><br><br>
    <main id="main">
    <section>
    <div class="container">
    <div class="row">
    <a href="/add"   class="btn btn-warning float-left" ><i class="fas fa-plus"></i>Tambah Data</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Wisata</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Image</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($place as $p)
      <th>{{$p->id}}</th>
      <td>{{$p->title}}</td>
      <td>{{$p->price}}</td>
      <td>{{$p->description}}</td>
      <td><img width="150px" src="{{asset('storage/'.$p->image)}}"></td>
      <td>
                
   
                    <a class="btn btn-info" href="detailplace/{{$p->id}}">Show</a> 
                    
                    <a class="btn btn-primary" href="edit/{{$p->id}}">Edit</a>
   
                    <a class="btn btn-danger" href="destroy/{{$p->id}}">Delete</a> 
                    
                
            </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
 
  @endsection