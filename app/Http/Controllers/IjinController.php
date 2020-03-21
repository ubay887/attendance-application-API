<?php

namespace App\Http\Controllers;

use App\Ijin;
use App\Pegawai;
use Illuminate\Http\Request;

class IjinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ijin  $ijin
     * @return \Illuminate\Http\Response
     */
    public function show(Ijin $ijin)
    {
        //join 1 table 
        $ijin = Ijin::with('pegawai')->get();
        // return $pengajuan;
        return view('/ijin',compact('ijin'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ijin  $ijin
     * @return \Illuminate\Http\Response
     */
    public function edit(Ijin $ijin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ijin  $ijin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ijin $ijin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ijin  $ijin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ijin $ijin)
    {
        $ijin = Ijin::findOrFail($id)->delete();
        return redirect('/ijin');
    }
}
