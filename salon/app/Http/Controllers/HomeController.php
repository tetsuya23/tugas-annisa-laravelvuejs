<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Sale;
use App\Models\Petugas;
use App\Models\Categori;
use App\Models\Transaction;
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
//no1
        $data = Member::select('*')
                            ->join('users', 'users.member_id', '=', 'members.id')     
                            ->get();
       
//no2
        $data2 = Member::select('*')
                            ->leftJoin('users', 'users.member_id', '=', 'members.id')
                            ->where('users.id', NULL)
                            ->get();
//no3
        $data3 = Transaction::select('members.id', 'members.name')
                            ->rightJoin('members', 'members.id', '=', 'transactions.member_id')
                            ->where('transactions.member_id', NULL)
                            ->get();
//no4
        $data4 = Member::select('members.id', 'members.name', 'members.phone_number')
                            ->join('transactions', 'transactions.member_id', '=', 'members.id')
                            ->orderBy('members.id', 'asc')
                            ->get();

        //return $members;
        //return $sales;
        //return $petugas;
        //return $categori;
        //return $transaction_details;
        //return $data;
        //return $data2;
        //return $data3;
        return $data4;
        return view('home');
    }
}
