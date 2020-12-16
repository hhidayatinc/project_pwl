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
        Order::create([
            'ktp' => $req->ktp,
            'nama' => $req->nama,
            'notelp' =>$req->notelp,
            'alamat' => $req->alamat,
            'email' => $req->email,
            'jenis' => $req->jenis,
            'tglbook' => $req->tglbook,
            'jmlhorang' => $req->jmlhorang,
            'statusbayar' => $req->statusbayar,
            ]);
            return redirect('/manageorders');
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
        $order->statusbayar = $request->statusbayar;
        $order->save();
        return redirect()->route('manageorders')
                        ->with('success', 'Order updated succsessfully');
    }
    public function hapus($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('manage')
        ->with('success', 'Order delete successfully');
    }

    public function cetak($id)
    {
        
    }
}
