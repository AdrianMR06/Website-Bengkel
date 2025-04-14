<?php

namespace App\Http\Controllers;

use App\Models\pemilik as ModelsPemilik;
use Illuminate\Http\Request;

class pemilik extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsPemilik::get();
        //dd($data);
        return view('pemilik.tampilPemilik', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemilik.tambahPemilik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new ModelsPemilik();
        $data->nama_pemilik=$request->nama_pemilik;
        $data->tgl_lahir=$request->tgl_lahir;
        $data->alamat=$request->alamat;
        $data->nik=$request->nik;
        $data->no_hp=$request->no_hp;
        $data->save();
        return redirect('pemilik');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsPemilik::where('id', '=', $id)->get();
        return view('pemilik.editPemilik', compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelsPemilik::where('id', '=', $id);
        $data->update([
                'nama_pemilik'=>$request->nama_pemilik,
                'tgl_lahir'=>$request->tgl_lahir,
                'alamat'=>$request->alamat,
                'nik'=>$request->nik,
                'no_hp'=>$request->no_hp,
        ]);
        return redirect('pemilik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ModelsPemilik::where('id','=', $id);
        $data->delete();
        return redirect('pemilik');
    }
}
