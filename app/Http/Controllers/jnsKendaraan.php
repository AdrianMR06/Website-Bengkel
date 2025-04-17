<?php

namespace App\Http\Controllers;

use App\Models\jnsKendaraan as ModelsJns_kendaraan;
use Illuminate\Http\Request;

class jnsKendaraan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsJns_kendaraan::get();
        //dd($data);
        return view('jns_Kendaraan.tampilDetailjnsKendaraan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jns_Kendaraan.tambahDetailjnsKendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new ModelsJns_kendaraan();
        $data->nm_jns_kendaraan=$request->nm_jns_kendaraan;
        $data->harga=$request->harga;
        $data->save();
        return redirect('jenis-kendaraan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsJns_kendaraan::where('id', '=', $id)->get();
        return view('jenis-kendaraan.editJnsKendaraan', compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelsJns_kendaraan::where('id', '=', $id);
        $data->update([
                'nm_jns_kendaraan'=>$request->nm_jns_kendaraan,
        ]);
        return redirect('jenis-kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ModelsJns_kendaraan::where('id','=', $id);
        $data->delete();
        return redirect('jenis-kendaraan');
    }
}
