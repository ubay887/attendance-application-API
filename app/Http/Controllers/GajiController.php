<?php

namespace App\Http\Controllers;

use App\Gaji;
use App\Pegawai;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();    
        
        return view('/updateGaji',compact('pegawai','gaji'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    // api munculin data semua
    public function apiall($id)
    {
        $gaji = Gaji::with('user')->where('id_user',$id)->get();
        return $gaji;
    }

    // api tambahin data

    public function apitambah(Request $request)
    {
        $gaji = new Gaji;

        $gaji->bulan = $request->bulan;
        $gaji->jumlah = $request->jumlah;
        $gaji->bonus = $request->bonus;
        $gaji->potongan = $request->potongan;
        $gaji->subtotal = $request->subtotal;
        $gaji->id_user = $request->id_user;

        $gaji->save();

        return "Data ditambah";
    }
    
    // api delete

    public function apihapus($id)
    {
        $gaji = Gaji::findOrFail($id)->delete();
        return "Data berhasil di hapus";
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $validasi=$request->validate([
        //     'id_user'=>'required',
        //     'jumlah'=>'required',
        //     'bonus'=>'required',
        //     'potongan'=>'required',
        //     'subtotal'=>'required',
        //     'bulan'=>'required'
        // ]);
        $gaji = new Gaji;

        $gaji->bulan = $request->bulan;
        $gaji->jumlah = $request->jumlah;
        $gaji->bonus = $request->bonus;
        $gaji->potongan = $request->potongan;
        $gaji->subtotal = $request->subtotal;
        $gaji->id_user = $request->id_user;

        $gaji->save();

        return redirect('/slipGaji');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show(Gaji $gaji)
    {
        //join 1 table 
        $gaji = Gaji::with('pegawai')->get();
        // return $penugasan;
        return view('/slipGaji',compact('gaji'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit(Gaji $gaji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gaji $gaji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gaji = Gaji::findOrFail($id)->delete();
        return redirect('/slipGaji');
    }
}
