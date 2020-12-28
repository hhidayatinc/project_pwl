<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Place;
use App\Order;
use Illuminate\Support\Facades\Gate;

class PlaceController extends Controller
{
    public function __construct()
    //this method for authentication, not article
{
    //$this->middleware('auth');
    $this->middleware(function($request, $next){
        if(Gate::allows('manage-places')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses');
        });
       
}
    public function index(){
        $place  = Place::all();
        return view('manage', ['place' => $place]);
    }

    public function edit($id)
    {
        $place = Place::find($id);
        return view('editplace',['place'=>$place]);
    }
    public function update($id, Request $req)
    {
        $place = Place::find($id);
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
        $place->title = $req->title;
        $place->description = $req->description;
        $place->price = $req->price;
        
        
        if($place->image && file_exists(storage_path('app/public/' . $place->image)))
        {
        \Storage::delete('public/'.$place->image);
        }
        $image_name = $req->file('image')->store('images', 'public');
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
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
        $place = new Place;
        $place->title = $req->title;
        $place->description = $req->description;
        $place->price = $req->price;
        if($req->file('image')){
        $gambar = $req->file('image')->store('images','public');
        $place->image = $gambar;
        }
        $place->save();
        return redirect('/manage')->with('success', 'Jenis Wisata created successfully');
    }
    public function destroy($id)
    {
        $place = Place::find($id);
        $place->delete();
        return redirect('/manage') ->with('success', 'Jenis Wisata delete successfully');
    }
    public function manage(){
        $order  = Order::all();
        return view('manageorders', ['order' => $order]);
    }
    public function hapusadmin($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/manageorders')->with('success', 'Order deleted successfully');
    }
}
