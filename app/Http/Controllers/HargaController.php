<?php

namespace App\Http\Controllers;

use App\Models\Harga;
use App\Models\Member;
use Illuminate\Http\Request;

class HargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Harga::all();
        return view('harga.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('harga.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Harga::create([
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);
        return redirect('/harga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function show(Harga $harga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function edit(Harga $harga)
    {
        return view('harga.edit', compact('harga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Harga $harga)
    {
        $harga->update([
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);
        return redirect('/harga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harga $harga)
    {
        $harga->delete();
        return redirect('/harga');
    }
}
