<?php

namespace App\Http\Controllers;
use App\Order;
use App\Place;
use App\User;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class OrderController extends Controller
{
    //     public function __construct()
    // {
    // //$this->middleware('auth');
    // $this->middleware(function($request, $next){
    // if(Gate::allows('user-display')) return $next($request);
    // abort(403, 'Silahkan login terlebih dahulu untuk bisa memesan tempat');
    // });
    // }

    public function historypemesanan(){
       
        $order  = Order::all();
        return view('historypemesanan', ['order' => $order]);
    }
    public function order(){

        $place = Place::all();
        $user = User::all();
        return view('frmorder',['place' => $place, 'user' => $user]);
    }
    
    public function add(Request $req){
        $req->validate([
             'id_user' => 'required',
            // 'ktp' => 'required',
            // 'nama' => 'required',
            // 'notelp' => 'required',
            // 'alamat' => 'required',
            // 'email' => 'required',
            'id_place' => 'required',
            'tglbook' => 'required',
            'jmlhorang' => 'required',
        ]);
        $place = Place::all();
        $user = USer::all();
        $order = new Order;
         $order->id_user = $req->id_user;
         $namaorg = ($order->pengunjung->name);
         $order->nama = $namaorg;
         $ktporg = ($order->pengunjung->noktp);
         $order->ktp = $ktporg;
         $emailorg = ($order->pengunjung->email);
         $order->email=$emailorg;
         $alamatorg = ($order->pengunjung->alamat);
         $order->alamat = $alamatorg;
         $telpon = ($order->pengunjung->notelp);
         $order->notelp = $telpon;
        // $order->noktp = $user->noktp;
        // $order->nama = $user->name;
        // $order->notelp = $user->notelp;
        // $order->alamat = $user->alamat;
        // $order->email = $user->email;
        $order->id_place = $req->id_place;
        $order->tglbook = $req->tglbook;
        $order->jmlhorang = $req->jmlhorang;
        $wisata = ($order->tempat->price);
        $org = ($order->jmlhorang);
        $totalbiaya = $wisata * $org;
        $order->total = $totalbiaya;
        $order->save();
            return redirect('/historypemesanan')->with('success', 'Order created successfully');
    }

    public function editorder($id)
    {
        $place = Place::all();
        $order = Order::find($id);
        return view('editorder',['order'=>$order, 'place'=>$place]);
    }

    public function updateorder($id, Request $request){
        $place = Place::all();
        $order = Order::find($id);
        $request->validate([
            'id_user' => 'required',
            // 'ktp' => 'required',
            // 'nama' => 'required',
            // 'notelp' => 'required',
            // 'alamat' => 'required',
            // 'email' => 'required',
            'id_place' => 'required',
            'tglbook' => 'required',
            'jmlhorang' => 'required',
        ]);
        $order->id_user = $req->id_user;
        $namaorg = ($order->pengunjung->name);
        $order->nama = $namaorg;
        $ktporg = ($order->pengunjung->noktp);
        $order->ktp = $ktporg;
        $emailorg = ($order->pengunjung->email);
        $order->email=$emailorg;
        $alamatorg = ($order->pengunjung->alamat);
        $order->alamat = $alamatorg;
        $telpon = ($order->pengunjung->notelp);
        $order->notelp = $telpon;
        $order->id_place = $request->id_place;
        $order->tglbook = $request->tglbook;
        $order->jmlhorang = $request->jmlhorang;
        $wisata = ($order->tempat->price);
        $org = ($order->jmlhorang);
        $totalbiaya = $wisata * $org;
        $order->total = $totalbiaya;
        $order->save();
        return redirect('/historypemesanan',['order'=>$order])->with('success', 'Order updated successfully');
    }
    public function hapus($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/historypemesanan')->with('success', 'Order deleted successfully');
    }

    public function cetak($id, Order $order)
    {  
        $order = Order::find($id);
    	$pdf = PDF::loadview('cetakpesanan',['order'=>$order])->setPaper('a4', 'landscape');
    	return $pdf->stream();
    }
    
    public function upload($id, Request $request){
        $request->validate([
            'statusbayar' => 'required',
        ]);
        $order = Order::find($id);
        if($request->file('statusbayar')){
            $gambar = $request->file('statusbayar')->store('images','public');
            $order->statusbayar = $gambar;
            }
        $order->save();
        return view('/historypemesanan',['order'=>$order])->with('success', 'Upload successfully');
    }
    
    public function bukti($id)
    {
        $order = Order::find($id);
        return view('buktibayar',['order'=>$order]);
    }

}
