<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
use PDF;

class BookingController extends Controller
{
    public function index(){
        $order  = Order::all();
        return view('booking', ['order' => $order]);
    }
}