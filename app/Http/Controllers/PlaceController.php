<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
    public function getAll(){
        $place  = Place::all();
        return view('place', ['place' => $place]);
    }
    public function index(){
        $place  = Place::all();
        return view('manage', ['place' => $place]);
    }

    public function getById($id){
        $place = Place::find($id);
        return view('wisata', ['wisata' => $place]);
    }
    public function edit($id)
    {
        $place = Place::find($id);
        return view('editplace',['place'=>$place]);
    }
    public function update($id, Request $request)
    {
        $place = Place::find($id);
        $place->title = $request->title;
        $place->description = $request->description;
        
        if($place->image && file_exists(storage_path('app/public/' . $place->image)))
        {
        \Storage::delete('public/'.$place->image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $place->image = $image_name;
        $place->save();
        return redirect('/manage')->with('success', 'Jenis Wisata updated successfully');
    }
    public function add()
    {
        return view('addplace');
    }
    public function create(Request $req)
    {
        if($req->file('image')){
        $gambar = $req->file('image')->store('images','public');
        }
        Place::create([
        'title' => $req->title,
        'description' => $req->description,
        'price' =>$req->price,
        'image' => $gambar,
        ]);
        return redirect('/manage')->with('success', 'Jenis Wisata created successfully');
    }
    public function destroy($id)
    {
        $place = Place::find($id);
        $place->delete();
        return redirect('/manage') ->with('success', 'Jenis Wisata delete successfully');
    }
}
