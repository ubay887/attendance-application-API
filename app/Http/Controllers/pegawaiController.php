<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Profile;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pegawai = Pegawai::with('profile')->get();
        return view('pegawai',compact('pegawai'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pegawai = Pegawai::where('nama','like',"%".$cari."%")->get();
        return view('pegawai',compact('pegawai'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('/pegawai/submit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pegawai $newPegawai)
    {
        //
        $validasi = $request->validate([
            "email" => "required",
            "nik_pegawai" => "required",
            "jam_kerja" => "required",
            "tgl_mulai_kerja" => "required",
            "nama" => "required",
            "devisi" => "required",
            "jatah_cuti" => "required",
            "status_karyawan" => "required",
            "no_hp" => "required",
            "jabatan" => "required",
            "no_ktp" => "required",
            "gender" => "required",
            "tgl_lahir" => "required",
            "tempat_lahir" => "required",
            "gol_darah" => "required",
            "agama" => "required",
            "tinggi_badan" => "required",
            "berat_badan" => "required",
            "alamat"=>"required",
        ]);
        
        $password = "siabsen@".$request->nik_pegawai;
        
        $pegawai = new Pegawai;
        $pegawai->email=$request->email;                
        $pegawai->password= bcrypt($password);
        $pegawai->nama = $request->nama;
        $pegawai->save();

        $profile = new Profile;
        $profile->id_user = $pegawai->id_user;
        $profile->nik_pegawai = $request->nik_pegawai;
        $profile->jam_kerja = $request->jam_kerja;
        $profile->tgl_mulai_kerja = $request->tgl_mulai_kerja;
        $profile->divisi = $request->devisi;
        $profile->jatah_cuti = $request->jatah_cuti;
        $profile->status = $request->status_karyawan;
        $profile->jabatan = $request->jabatan;
        $profile->no_ktp = $request->no_ktp;
        $profile->gender = $request->gender;
        $profile->tgl_lahir = $request->tgl_lahir;
        $profile->tempat_lahir = $request->tempat_lahir;
        $profile->gol_darah = $request->gol_darah;
        $profile->agama = $request->agama;
        $profile->tinggi_badan = $request->tinggi_badan;
        $profile->berat_badan = $request->berat_badan;
        $profile->alamat = $request->alamat;
        $profile->save();
                
        return redirect('/pegawai')->with('status','Data pegawai berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user)
    {
        //
        $profile = Profile::findOrFail($id_user)->delete();
        $pegawai = Pegawai::findOrFail($id_user)->delete();

        return redirect('/pegawai');
    }
}

