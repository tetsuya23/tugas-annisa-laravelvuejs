<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Sale;
use App\Models\Petugas;
use App\Models\Categori;
use Illuminate\Http\Request;

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
        //$members = Member::with('user')->get();
        //$sales = Sale::with('petugas')->get();
        //$sales = Sale::with('categori')->get();        
        //$petugas = Petugas::with('sales')->get();
        //$categori = Categori::with('sales')->get();
       

        //return $members;
        //return $sales;
        //return $petugas;
        //return $categori;
        //return $transaction_details;
        return view('home');
    }
}
