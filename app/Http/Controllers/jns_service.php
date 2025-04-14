<?php

namespace App\Http\Controllers;

use App\Models\jns_service as ModelsJns_service;
use Illuminate\Http\Request;

class jns_service extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsJns_service::get();
        //dd($data);
        return view('jns_Service.tampilJenisService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jns_service.tambahJenisService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new ModelsJns_service();
        $data->jenis_service=$request->jenis_service;
        $data->keterangan=$request->keterangan;
        $data->save();
        return redirect('jenis-service');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsJns_service::where('id', '=', $id)->get();
        return view('jenis-service.editJenisService', compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ModelsJns_service::where('id', '=', $id);
        $data->update([
                'jenis_service'=>$request->jenis_service,
                'keterangan'=>$request->keterangan,
        ]);
        return redirect('jenis-service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ModelsJns_service::where('id','=', $id);
        $data->delete();
        return redirect('jenis-service');
    }
}
