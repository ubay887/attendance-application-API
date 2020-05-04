<?php

namespace App\Http\Controllers;

use App\Cuti;
use App\Pegawai;
use Illuminate\Http\Request;

class CutiController extends Controller
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
     * @param  \App\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function show(Cuti $cuti)
    {
        //join 1 table 
        $cuti = Cuti::with('pegawai')->get();
        // return $cuti;
        return view('/pengajuan',compact('cuti'));    
    }

    public function showApi(Cuti $cuti)
    {
        //join 1 table 
        $cuti = Cuti::with('pegawai')->get();
        return $cuti;        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuti $cuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuti $cuti , $id)
    {
        $cuti = Cuti::find($id);
        $cuti->status="SETUJU";
        $cuti->save();

        return redirect("/pengajuan")->with('disableButton', true);
    }

    public function tolak($id)
    {
        $cuti = Cuti::find($id);
        $cuti->status="TOLAK";
        $cuti->save();

        return redirect("/pengajuan")->with('disableButton',true);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuti = Cuti::findOrFail($id)->delete();
        return redirect('/pengajuan');
    }

    public function cuti(Request $request)
    {
        $cuti = new Cuti;

        $cuti->nama_cuti = $request->nama_cuti;
        $cuti->lama_cuti = $request->lama_cuti;
        $cuti->mulai_cuti = $request->mulai_cuti;
        $cuti->alasan = $request->alasan;
        $cuti->id_user = $request->id_user;
        $cuti->tgl_ajukan = $request->tgl_ajukan;

        $cuti->save();

        return "data sudah berhasil ditambahkan";
    }

    public function apiall($id)
    {
        $cuti = Cuti::with('user')->where('id_user',$id)->get();
        return $cuti;
    }

    public function updatestatus(Request $request)
    {
        //
        $cuti = new Cuti;
        
        $cuti->nama_cuti = $request->nama_cuti;
        $cuti->lama_cuti = $request->lama_cuti;
        $cuti->mulai_cuti = $request->mulai_cuti;
        $cuti->alasan = $request->alasan;
        $cuti->id_user = $request->id_user;
        $cuti->tgl_ajukan = $request->tgl_ajukan;
        $cuti->status = "Setuju";

        $cuti->save();
        return "data disetujui";
    }

}
