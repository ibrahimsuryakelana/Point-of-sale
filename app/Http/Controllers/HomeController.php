<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == "ADMIN"){
            return redirect('/barang');
        }elseif (Auth::user()->role == "KASIR"){
            return redirect('/keranjang');
        }elseif (Auth::user()->role == "MANAGER"){
            return redirect('/manager');
        };
        return view('home');
    }
}
