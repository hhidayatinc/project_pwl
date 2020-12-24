<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
use PDF;

class OrderController extends Controller
{
    public function manage(){
        $order  = Order::all();
        return view('manageorders', ['order' => $order]);
    }
    public function order(){
        return view('frmorder');
    }

    public function add(Request $req){
        if($req->file('image')){
            $gambar = $req->file('image')->store('images','public');
            }
        Order::create([
            'ktp' => $req->ktp,
            'nama' => $req->nama,
            'notelp' =>$req->notelp,
            'alamat' => $req->alamat,
            'email' => $req->email,
            'jenis' => $req->jenis,
            'tglbook' => $req->tglbook,
            'jmlhorang' => $req->jmlhorang,
            'statusbayar' => $gambar,
            ]);
            return redirect('/manageorders')->with('success', 'Order created successfully');
    }
    public function editorder($id)
    {
        $order = Order::find($id);
        return view('editorder',['order'=>$order]);
    }

    public function updateorder($id, Request $request){
        $order = Order::find($id);
        $order->ktp = $request->ktp;
        $order->nama = $request->nama;
        $order->notelp = $request->notelp;
        $order->alamat = $request->alamat;
        $order->email = $request->email;
        $order->jenis = $request->jenis;
        $order->tglbook = $request->tglbook;
        $order->jmlhorang = $request->jmlhorang;
        if($order->statusbayar && file_exists(storage_path('app/public/' . $order->statusbayar)))
        {
        \Storage::delete('public/'.$order->statusbayar);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $order->statusbayar = $image_name;
        $order->save();
        return redirect('/manageorders')->with('success', 'Order updated successfully');
    }
    public function hapus($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/manageorders')->with('success', 'Order deleted successfully');
    }

    public function cetak($id)
    {
        
    }
}
