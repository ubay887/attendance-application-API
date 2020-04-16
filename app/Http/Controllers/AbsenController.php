<?php

namespace App\Http\Controllers;

use App\Absen;
use App\User;
use DB;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Absen::all();
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
     * @param  \Illuminate\Http\Request  $req Zuest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //join 1 table 

        $Absen = DB::table('tbuser')
                ->join('tbabsen','tbabsen.id_user','=','tbuser.id_user')
                ->select('tbuser.nama','tbabsen.photo','tbabsen.timestamp','tbabsen.status','tbabsen.type','tbabsen.point')
                ->get();
        // return $absen;
        return view('/dataAbsensi',compact('Absen'));    
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $Absen =DB::table('tbuser')
            ->join('tbabsen','tbabsen.id_user','=','tbuser.id_user')
            ->select('tbuser.nama','tbabsen.photo','tbabsen.timestamp','tbabsen.status','tbabsen.type','tbabsen.point')
            ->where('nama','like',"%".$cari."%")
            ->get();

        // $Absen = Absen::where('nama','like',"%".$cari."%")->get();
        // $profile = Pegawai::where('nama','like',"%".$cari."%")->get();
        return view('dataAbsensi',compact('Absen'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absen)
    {
        //
    }

    public function absen(Request $request)
    {
        //

        $path = public_path()."/foto_absensi";

        $file = $request->file('photo');
        $file->move($path,$file->getClientOriginalName());

        $absen = new Absen();
        $absen->photo = $file->getClientOriginalName();        
        $absen->timestamp = $request->timestamp;        
        $absen->id_user = $request->id_user;        
        $absen->type = $request->type;        
        $absen->point = $request->point;        
        $absen->status = $request->status;        

        $absen->save();
        return "berhasil";

    }
}
