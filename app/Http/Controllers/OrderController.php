<?php

namespace App\Http\Controllers;
use App\Order;
use App\Place;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Gate;
>>>>>>> 6607049b1ce43036fc4bb1b501b66705d1a876f9

class OrderController extends Controller
{
        public function __construct()
    {
    //$this->middleware('auth');
    $this->middleware(function($request, $next){
    if(Gate::allows('user-display')) return $next($request);
    abort(403, 'Silahkan login terlebih dahulu untuk bisa memesan tempat');
    });
    }

    public function historypemesanan(){
       
        $order  = Order::all();
        return view('historypemesanan', ['order' => $order]);
    }
    public function order(){

        $place = Place::all();
        return view('frmorder',['place' => $place]);
    }
    
    public function add(Request $req){
        // $totalbiaya=DB::table('orders')
        //                 ->leftJoin('places', 'orders.id_place', '=', 'places=id')
        //                 ->select('orders.*', '(places.price*orders.jmlhorang)','as','totalbiaya')
        //                 ->get();
        $req->validate([
            'ktp' => 'required',
            'nama' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'id_place' => 'required',
            'tglbook' => 'required',
            'jmlhorang' => 'required',
            'statusbayar' => 'required',
        ]);
        $place = Place::all();
        $order = new Order;
        $order->ktp = $req->ktp;
        $order->nama = $req->nama;
        $order->notelp = $req->notelp;
        $order->alamat = $req->alamat;
        $order->email = $req->email;
        $order->id_place = $req->id_place;
        $order->tglbook = $req->tglbook;
        $order->jmlhorang = $req->jmlhorang;
        if($req->file('image')){
            $gambar = $req->file('image')->store('images','public');
            $order->statusbayar = $gambar;
            }
<<<<<<< HEAD
        Order::create([
            'ktp' => $req->ktp,
            'nama' => $req->nama,
            'notelp' =>$req->notelp,
            'alamat' => $req->alamat,
            'email' => $req->email,
            'tglbook' => $req->tglbook,
            'jmlhorang' => $req->jmlhorang,
            ]);
            return redirect('/manageorders')->with('success', 'Order created successfully');
=======
        // if($req->file('image')){
        //     $gambar = $req->file('image')->store('images','public');
        //     $order->statusbayar = $gambar;
        // }
        $order->save();
            return redirect('/historypemesanan')->with('success', 'Order created successfully');
>>>>>>> 6607049b1ce43036fc4bb1b501b66705d1a876f9
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
            'ktp' => 'required',
            'nama' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'id_place' => 'required',
            'tglbook' => 'required',
            'jmlhorang' => 'required',
            'statusbayar' => 'required',
        ]);
        $order->ktp = $request->ktp;
        $order->nama = $request->nama;
        $order->notelp = $request->notelp;
        $order->alamat = $request->alamat;
        $order->email = $request->email;
        $order->id_place = $request->id_place;
        $order->tglbook = $request->tglbook;
        $order->jmlhorang = $request->jmlhorang;
        if($order->statusbayar && file_exists(storage_path('app/public/' . $order->statusbayar)))
        {
        \Storage::delete('public/'.$order->statusbayar);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $order->statusbayar = $image_name;
        $order->save();
        return redirect('/historypemesanan',['order'=>$order,'place' => $place])->with('success', 'Order updated successfully');
    }
    public function hapus($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/historypemesanan')->with('success', 'Order deleted successfully');
    }

    public function cetak($id, Order $order)
    {
<<<<<<< HEAD
        $order = DB::table('orders')
            ->join('places', 'places.id', '=', 'orders.id_place')
            ->select('orders.*', 'places.title', 'places.price')
            ->get();
    //GET DATA BERDASARKAN ID
    $order = Order::find($id);
    //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
    //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
    $pdf = PDF::loadView('cetak', compact('order'))->setPaper('a4', 'landscape');
    return $pdf->stream();
=======
       
        $order = Order::find($id);
    	$pdf = PDF::loadview('cetakpesanan',['order'=>$order])->setPaper('a4', 'landscape');
    	return $pdf->stream();
>>>>>>> 6607049b1ce43036fc4bb1b501b66705d1a876f9
    }

   

}
