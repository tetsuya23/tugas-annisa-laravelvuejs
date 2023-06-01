<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = Petugas::all();
        // // return $petugas;
        return view('admin.petugas', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'  =>['required'],
        'gender'  =>['required'], 
        'email'  =>['required'], 
        'phone_number'  =>['required'], 
        'address'  =>['required']
    ]);
        Petugas::create($request->all());
        
        return redirect('petugas');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas)
    {
        //  return $petugas;
        // return view('admin.petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        $this->validate($request,[
            'name'  =>['required'],
            'gender'  =>['required'], 
            'email'  =>['required'], 
            'phone_number'  =>['required'], 
            'address'  =>['required']
        ]);
                
        $petugas->update($request->all());
        
        return redirect('petugas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas)
    {
        $petugas->delete();

        // return redirect('petugas');
    }
}
