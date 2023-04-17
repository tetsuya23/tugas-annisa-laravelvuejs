<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoris = Categori::all();

        //return $categoris;
        return view('admin.categori.index', compact('categoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.categori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,['name' =>['required']]);
        // cara menambahkan ke database
        // cara 1
        // $categori = new Categori;
        // $categori->name = $request->name;
        // $categori->save();

        // cara 2
        Categori::create($request->all());
        
        return redirect('categoris');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categori $categori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categori $categori)
    {
        // untuk lihat datanya 
        // return $categori;
        return view('admin.categori.edit', compact('categori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categori $categori)
    {
        $this->validate($request,['name' =>['required']]);
        
        $categori->update($request->all());
        
        return redirect('categoris');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categori $categori)
    {
        $categori->delete();

        return redirect('categoris');
    }
}
