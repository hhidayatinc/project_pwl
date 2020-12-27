<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function getAll(){
        $place  = Place::all();
        return view('place', ['place' => $place]);
    }

    public function getById($id){
        $place = Place::find($id);
        return view('detailplace', ['place' => $place]);
    }
    public function search(Request $request)
	{
		$search = $request->search;
    	$place = DB::table('places')
		->where('title','like',"%".$search."%");
        return view('place',['place' => $place]);
    }
    
}
