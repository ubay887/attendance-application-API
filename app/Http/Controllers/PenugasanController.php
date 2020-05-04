<?php

namespace App\Http\Controllers;

use App\Penugasan;
use App\Pegawai;


use Illuminate\Http\Request;

class PenugasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //    
        $pegawai = Pegawai::all();    
        
        return view('/tambahPenugasan',compact('pegawai','penugasan'));        
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

        $penugasan = new Penugasan;

        $penugasan->deadline = $request->deadline;
        $penugasan->detail = $request->detail;
        $penugasan->judul = $request->judul;
        $penugasan->pengecek = $request->pengecek;
        $penugasan->tgl_diberikan_tugas = $request->tgl_diberikan_tugas;
        $penugasan->id_user = $request->id_user;

        $penugasan->save();

        return redirect('/penugasan');

        // $penugasan = Penugasan::create($validasi);        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penugasan  $penugasan
     * @return \Illuminate\Http\Response
     */
    public function show(Penugasan $penugasan)
    {
        //join 1 table 
        $penugasan = Penugasan::with('pegawai')->get();
        // return $penugasan;
        return view('/penugasan',compact('penugasan'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penugasan  $penugasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penugasan $penugasan,$id_user)
    {
        $pegawai = Pegawai::find($id_user);
        $penugasan = Penugasan::all();
        return view('editpenugasan',compact('penugasan','pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penugasan  $penugasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penugasan $penugasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penugasan  $penugasan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $penugasan = Penugasan::findOrFail($id)->delete();
        return redirect('/penugasan');
    }

    public function apiall($id)
    {
        $penugasan = Penugasan::with('user')->where('id_user',$id)->get();
        return $penugasan;        
    }

    public function hapuspenugasan($id_tugas)
    {    
        $penugasan = Penugasan::findOrFail($id_tugas)->delete();
        return 'tugas anda sudah diselesaikan';
    }
    
    public function selesai($id)
    {
        $penugasan = Penugasan::find($id);
        $penugasan->status="Selesai";
        $penugasan->save();

        return redirect("/penugasan")->with('disableButton',true);
    }
}
